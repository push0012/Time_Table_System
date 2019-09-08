<?php

namespace App\Services;

use App\Classroom;
use App\Course;
use App\Course_Subject;
use App\Subject;
use App\TimeTable;
use App\TimeSlot;
use App\Lecturer_Free;
use App\RoomAllocation;
use Auth;

class TimeTableGenerator {

        /**
     * Number of hours that make up an academic day
     * @var int
     */
    protected $sizeOfDay = 8;

    /**
     * Number of days in an academic week
     * @var int
     */
    protected $daysOfWeek = 5;

    /**
     * Array index to use as break time
     * @var int
     */
    protected $indexOfBreak = 4;

    /**
     * Number of hours to use for break
     * @var int
     */
    protected $numOfHoursForBreak = 1;

    /**
     * Checks if double period should be allowed
     * @var bool
     */
    private $allowDoublePeriods = true;

    /**
     * String to be used to denote free / empty periods
     * @var string
     */
    protected $emptyIndicator = '-';

    /**
     * Indicates if timetable is for department or level
     *
     * @var
     */
    protected $is_general;

    protected $this_semester;
    protected $this_ac_year;
    protected $this_start_date;
    protected $this_end_date;

    /**
     * The timetable object to store the final result
     * @var array[][]
     */
    protected $timeTable;

    /**
     * Keep track of slots that have prefilled data
     * so that they cannot be reassigned...
     * @var array
     */
    protected $usedSlots = [];

    /**
     * The gene data. Typically gotten from the database.
     * In this case, the courses
     * @var
     */
    protected $gene;

    /**
     * Saves level wide courses
     * @var null
     */
    //protected $levelWideCourses = null;

    /**
     * Individual courses represented as a whole
     * in multiples of their units...
     * @var
     */
    protected $chromosomes;
    protected $chromosomes2;

    /**
     * Store locations for each break element
     * @var array
     */
    protected $break = ['B', 'R', 'E', 'A', 'K'];

    /**
     * Holds a list of all available classrooms
     *
     * @var array|\Illuminate\Database\Eloquent\Collection|static[]
     */
    protected $classrooms = [];

    /**
     * Holds the instance of the classroom model
     *
     * @var
     */
    protected $classroom;

    protected $hasDoublePeriod = [];

    /**
     * TimeTableGenerator constructor.
     * @param array $gene
     */
    public function __construct(array $gene)
    {
        $this->gene = $gene;
        //$this->indexOfBreak = (new Setting())->getByKey('break_time');
        $this->initializeTimeTable();
        $this->classroom = new Classroom();

        $this->classrooms = $this->classroom->all();

        return $this;
    }

    /**
     * Add level wide courses if they exists
     * @param $courses
     * @return $this
     */
    /*public function levelWideCourse($courses)
    {
        $this->levelWideCourses = $courses;
        return $this;
    }*/

    /**
     * Initialize the timetable array object
     * @return array
     */
    public function initializeTimeTable()
    {
        return $this->timeTable = array(array(), array());;
    }



    /**
     * Call necessary methods and return the timetable array
     * @param $dept
     * @return \array[][]
     */
    public function generate($course_code,$semester,$ac_year,$start_date,$end_date)
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        
        $this->is_general = $course_code;
        $this->this_semester = $semester;
        $this->this_ac_year = $ac_year;
        $this->this_start_date = $start_date;
        $this->this_end_date = $end_date;
        /*if (!$this->slotsAreEnough()) {
            abort(500, 'The number of units exceed the available spaces.');
        }*/
        $out->writeln("It passed here");
        $this->makeChromosomes();
        $this->createInitialGeneration();
        $this->startSelection();
        return $this->timeTable;
    }

    /**
     * Split the genes into chromosomes.
     * In this case, split the courses
     * into individual entities.
     */
    private function makeChromosomes()
    {
        $chromosomes = array();
        $r =0;
        foreach ($this->gene as $gene) {
            
           // for ($x = 0; $x < $cou; $x++) {
                $chromosomes[$r][0] = $gene['subject_id'];
                $chromosomes[$r][1] = $gene['week_lesson_hours'];
                $chromosomes[$r][2] = $gene['lecturer_id'];
            //}
            $r++;
        }
        $this->chromosomes = $chromosomes;
        //$this->chromosomes2 = $chromosomes2;
        //$out = new \Symfony\Component\Console\Output\ConsoleOutput();
            //$out->writeln($chromosomes[2][0]);
        return $this;
    }

    /**
     * Create an initial generation with zero elements
     * @return $this
     */
    private function createInitialGeneration()
    {
        for ($y = 0; $y < $this->daysOfWeek; $y++) {
            for ($z = 0; $z < $this->sizeOfDay; $z++) {

                $indicator = $this->emptyIndicator;
                if ($z == $this->indexOfBreak) $indicator = $this->break[$y];

                /*if ($this->hasLevelWideCourses()) {
                    if ($this->levelWideCourses[$y][$z] != '-') $indicator = $this->levelWideCourses[$y][$z];            
                }*/
                $this->timeTable[$y][$z] = $indicator;

            }
        }
        return $this;
    }

    /**
     * Checks if the level wide courses is not null
     * @return bool
     */
   /* public function hasLevelWideCourses()
    {
        return $this->is_general == "0" ? false : true;
    }*/

    /**
     * Perform the actual schedule
     * @return TimeTableGenerator
     */
    private function startSelection()
    {
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        
        $totalSlot = $this->daysOfWeek * $this->sizeOfDay;
        $size = count($this->chromosomes);
        
        $seed = 1;
        for ($x = 0; $x < $size; $x++) {
            $rou = 0;
            
            $counting = $this->chromosomes[$x][1];
           //if($rou <= $counting){
            for ($y = 0; $y < $this->daysOfWeek; $y++) {
                for ($z = 0; $z < $this->sizeOfDay; $z++) {


                    $slotnum = $this->findTimeSlot($y,$z);
                    //$out->writeln("hasAssigned seed ".$slotnum);
                   

                    if ($this->hasAssigned($slotnum)){
                        //$out->writeln("hasAssigned seed ".$slotnum);
                        continue;
                    } 
                    
                    if ($this->isBreakTimeZone($z)){
                        //$out->writeln("isbreak zone seed ".$z);
                        continue;
                    }
                   
                    //$out->writeln($this->isLecturerFree($slotnum, 5));
                    if (!($this->isLecturerFree($slotnum, $this->chromosomes[$x][2]))){
                        continue;
                    }

                        if($rou < $counting){
                            
                            if(($rou == 0 && $z == 3) || 
                                ($this->chromosomes[$x][1] >=3 && $z == 2 && $rou == 0) || 
                                ($this->chromosomes[$x][1] >=3 && $z == 1 && $rou == 0) ||
                                ($rou == 0 && $z == 7) || 
                                ($this->chromosomes[$x][1] >3 && $z == 5 && $rou == 0) || 
                                ($this->chromosomes[$x][1] >=3 && $z == 6 && $rou == 0) ||
                                ($this->chromosomes[$x][1] >=3 && $y == 3 &&  $z == 0 && $rou == 0) ||
                                ($y == 3 && ($z == 2 || $z == 3) )) {
                                
                                    //$out->writeln("one period seed ".$slotnum);
                                //$seed = $seed + 1;
                                continue;
                            }else{
                                //$out->writeln("With subject id is here ".$this->chromosomes[$x][0]." ".$slotnum);
                                //$out->writeln("With lecturer id is here ".$this->chromosomes[$x][2]." ".$slotnum);
                                $s = 0;$c = 1;
                                $this->timeTable[$y][$z] = $this->chromosomes[$x][0];
                                $this->savedata($this->chromosomes[$x], $y, $z,$slotnum);
                                $this->usedSlots[] = $slotnum;
                                //$seed = $seed + 1;
                            }

                        }else{
                            //$seed = $seed + 1;
                            continue;

                        } 
                    $rou=$rou+1;   
                }
            }
    }
        return $this;
    }

    public function savedata($cromesom, $y, $z,$slotnum){

        $tablesave = new TimeTable();
        $room = new RoomAllocation();

        $place = $this->selectClassroom($cromesom[0], $slotnum);

        $tables = $tablesave->create([
            'course_code'   => $this->is_general,
            'batch'         => 'B2',
            'semester'      => $this->this_semester,
            'ac_year'       => $this->this_ac_year,
            'subject_id'    => $cromesom[0],
            'dayofweek'     => $y,
            'sizeofday'     => $z,
            'lecturer_id'   => $cromesom[2],
            'classroom_id'  => $place,

        ]);
        $Allocation = $room->create([
            'start_date'    => $this->this_start_date,
            'end_date'      => $this->this_end_date,
            'ac_year'       => $this->this_ac_year,
            'subject_id'    => $cromesom[0],
            'course_code'   => $this->is_general,
            'classroom_id'  => $place,
            'slot_id'       => $slotnum
        ]);

        return $this;
    }

    public function selectClassroom($subject, $slotnum){
        $out = new \Symfony\Component\Console\Output\ConsoleOutput();
        $lectureMethod = Subject::select('method')->where('subject_id',$subject)->first();
        $courseStudents = Course::select('max_no_students')->where('course_code',$this->is_general)->first();
        
        $method = $lectureMethod->method;
        $students = $courseStudents->max_no_students;

        $roomAllcoation = RoomAllocation::where('start_date',$this->this_start_date)
        ->where('end_date',$this->this_end_date)
        ->where('ac_year', $this->this_ac_year)
        ->where('slot_id',$slotnum)->where('method',$method)->get()->count();
        $out->writeln("room allocation count is ".$roomAllcoation);

        

        if($roomAllcoation > 0){
            $out->writeln("room allocation count is passed second option");
            $classrooms = Classroom::select('classroom_id')->where('method', $method)
        ->where('student_capacity','>=',$students)->get();
        
            $roomAllcoation = RoomAllocation::select('classroom_id')->where('start_date',$this->this_start_date)
        ->where('end_date',$this->this_end_date)
        ->where('ac_year', $this->this_ac_year)
        ->where('slot_id',$slotnum)->where('method',$method)->get();

        $result = array_diff($roomAllcoation->classroom_id, $classrooms->classroom_id);

        $final_result = $result[0];


        }else{
            $out->writeln("room allocation count is passed first option");
            $classroomsss = Classroom::select('classroom_id')->where('method', $method)
        ->where('student_capacity','>=',$students)->first();
        $final_result = $classroomsss->classroom_id;
        }

        return $final_result;

    }

    public function isLecturerFree($seed, $lecturer_id){
        $lecturer_frees = Lecturer_Free::select('free_time')
        ->where('lecturer_id',$lecturer_id)
        ->where('start_date',$this->this_start_date)
        ->where('end_date',$this->this_end_date)
        ->first();
        
        $temp = $lecturer_frees->free_time;
        $temp2 = explode(",", $temp);  
        $freetimes = $this->bubble_Sort($temp2);
        $out->writeln("pass 5 ");
        return in_array($seed , $freetimes);
    }
    public function bubble_Sort($my_array)
    {
            do
            {
                $swapped = false;
                for( $i = 0, $c = count( $my_array ) - 1; $i < $c; $i++ )
                {
                    if( $my_array[$i] > $my_array[$i + 1] )
                    {
                        list( $my_array[$i + 1], $my_array[$i] ) =
                                array( $my_array[$i], $my_array[$i + 1] );
                        $swapped = true;
                    }
                }
            }
            while( $swapped );
        return $my_array;
    }

    public function findTimeSlot($dayofweek,$sizeofday){
        $timeslots = TimeSlot::select('slot_id')->where('dayofweek', $dayofweek)
        ->where('sizeofday', $sizeofday)->first();
        return $timeslots->slot_id;
    }
    /**
     * Check if the seed falls withing the break time zone
     * @param $seed
     * @return bool
     */ 
    public function isBreakTimeZone($seed)
    {
        /*if ($seed < $this->sizeOfDay)*/
            return $seed == $this->indexOfBreak;
        /*return ($seed - $this->sizeOfDay) % $this->indexOfBreak === 0;*/
        
    }

    /**
     * Check if a seed has already been assigned
     * @param $seed
     * @return bool
     */
    private function hasAssigned($seed){
        return in_array($seed, $this->usedSlots);
    }

    public function hasUsedDoublePeriods($coz_subs)
    {
        return in_array($coz_subs, $this->hasDoublePeriod);
    }

    /**
     * Intelligently select a classroom for a schedule
     *
     * @param $subject_id
     * @param $day
     * @param $period
     */
    /*public function selectClassroom($subject_id, $day, $period)
    {
        $classroomCount = count($this->classrooms);
        $found = false;
        $iteration = 0;

        while ($found === false) {
            $iteration++;
            if ($iteration > $classroomCount) break;

            $seed = rand(0, $classroomCount - 1);

            $selected = $this->classrooms[$seed];

            if (! $selected->hasBeenAssignedOn($day, $period)) {

                $selected->markAsAssignedOn($course_id, $day, $period);
                $found = true;

            }
        }
    }*/
    

}