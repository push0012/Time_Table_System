<?php

namespace App\Http\Controllers;

use App\CourseSubject;
use App\RoomAllocation;
use App\Subject;
use App\Classroom;
use App\Lecturer;
use App\Lecturer_Free;
use App\Course;
use App\TimeTable;
use DB;
use App\Services\TimeTableGenerator;
use PDF;

use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function generate(CourseSubject $course_subject, TimeTable $table)
    {
        $condition = request()->all();
        if (!isset($condition['course_code'])) $condition['course_code'] = 0;
        
        $coz_subs = $course_subject->where($condition)->get()->toArray();
        
        /*$levelWideCourses = null;
        $newCondition = $condition;
        $newCondition['course_code'] = 0;

        if ($table->alreadyHas($newCondition)) {

           $levelWideCourses = $table->where($newCondition)->first()->schedule;
           
        }*/

        try{
            $schedules = TimeTable::where('course_code', $condition['course_code'])
                            ->where('semester',$condition['semester'])
                            ->where('ac_year', $condition['ac_year'])->get()->count();
            $timeTable =  new TimeTableGenerator($coz_subs);
            if($schedules>0){
                TimeTable::where('course_code', $condition['course_code'])
                ->where('semester',$condition['semester'])
                ->where('ac_year', $condition['ac_year'])->delete();

                RoomAllocation::where('course_code', $condition['course_code'])
                ->where('start_date',$condition['start_date'])
                ->where('end_date',$condition['end_date'])
                ->where('ac_year', $condition['ac_year'])->delete();

                $timeTable = $timeTable->generate(
                    $condition['course_code'],
                    $condition['semester'],
                    $condition['ac_year'],
                    $condition['start_date'],
                    $condition['end_date']
                );
            }else{
                $timeTable = $timeTable->generate(
                    $condition['course_code'],
                    $condition['semester'],
                    $condition['ac_year'],
                    $condition['start_date'],
                    $condition['end_date']
                );
            }

            
            //$timeTable->levelWideCourse(json_decode($levelWideCourses, true));
            /*$timeTable = $timeTable->generate(
                $condition['course_code'],
                $condition['semester'],
                $condition['ac_year'],
                $condition['start_date'],
                $condition['end_date']
            );*/

            /*if ($table->alreadyHas($condition)) {
                $table->where($condition)->update(['schedule' => json_encode($timeTable) ]);
            } else {*/
                /*$tables = $table->create([
                    'course_code'          => $condition['course_code'] ?? 0,
                    //'level'         => $condition['level'],
                    'semester'      => $condition['semester'],
                    'ac_year'       => $condition['ac_year'],
                    'schedule'      => json_encode($timeTable)
                ]);*/
            //}
            //return response()->json($timeTable, 201);
            return redirect('/home');
        } catch (\Exception $e)
        {
            return response()->json($e, 400);
        }
    }

    public function viewTimeTable(){
        
        $condition = request()->all();

        $timetables = DB::table('final_timeltable')->where($condition)->get();
        $dates = CourseSubject::select('start_date','end_date','ac_year')
                    ->where('ac_year',$condition['ac_year'])
                    ->where('semester',$condition['semester'])
                    ->first();   

        $course = $condition['course_name'];
        $semester = $condition['semester'];

        //$timetables =  TimeTable::all();
        //return view('genarate.timetable')->with('timetables', $timetables);;

        //$data = Customer::get();
        // Send data to the view using loadView function of PDF facade
        $pdf = PDF::loadView('genarate.timetablepdf',compact('timetables','course','semester','dates'))->setPaper('A4','landscape');
        return $pdf->stream('timetablepdf.pdf');
        // If you want to store the generated pdf to the server then you can use the store function
        /*$pdf->save(storage_path().'_filename.pdf');
        // Finally, you can download the file using download function
        return $pdf->download('timetable.pdf');*/
    }
    public function createGenerator(){
        $courses = Course::all();
        return view('genarate.generate')->with('courses',$courses);
    }

}
