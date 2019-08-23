<?php

namespace App\Http\Controllers;

use App\CourseSubject;
use App\Subject;
use App\Classroom;
use App\Lecturer;
use App\Lecturer_Free;
use App\Course;
use App\TimeTable;

use App\Services\TimeTableGenerator;

use Illuminate\Http\Request;

class TimeTableController extends Controller
{
    public function generate(CourseSubject $course_subject, TimeTable $table)
    {
        $condition = request()->all();
        if (!isset($condition['course_code'])) $condition['course_code'] = 0;
        
        $coz_subs = $course_subject->where($condition)->get()->toArray();
 
        $levelWideCourses = null;
        $newCondition = $condition;
        //$newCondition['course_code'] = 0;

        if ($table->alreadyHas($newCondition)) {

           $levelWideCourses = $table->where($newCondition)->first()->schedule;
           
        }

        try{
            $timeTable =  new TimeTableGenerator($coz_subs);
            $timeTable->levelWideCourse(json_decode($levelWideCourses, true));
            $timeTable = $timeTable->generate($condition['course_code']);

            if ($table->alreadyHas($condition)) {
                $table->where($condition)->update(['schedule' => json_encode($timeTable) ]);
            } else {
                $tables = $table->create([
                    'course_code'          => $condition['course_code'] ?? 0,
                    //'level'         => $condition['level'],
                    'semester'      => $condition['semester'],
                    'ac_year'       => $condition['ac_year'],
                    'schedule'      => json_encode($timeTable)
                ]);
            }
            return response()->json($timeTable, 201);
        } catch (\Exception $e)
        {
            return response()->json($e, 400);
        }
    }
}