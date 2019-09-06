<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CourseSubject;
use App\Subject;
use App\Course;
use Auth;

class CourseSubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condition = request()->all();
        $course =  Course::select('course_code','course_name')->where('course_code', $condition['course_code'])->first();
        //$cuz =  CourseSubject::select('start_date','end_date')->where($condition)->first()->groupby('course_code');
        $coz_subs =  CourseSubject::where($condition)->get();
        return view('genarate.viewplanning')
        ->with('cuz_subs',$coz_subs)
        //->with('cuz',$cuz)
        ->with('course',$course)
        ->with('semester', $condition['semester'])
        ->with('ac_year', $condition['ac_year']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('genarate.planning')->with('courses',$courses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $courseSubject = CourseSubject::create($request->all());

        $resource = CourseSubject::create([
            'semester'=>$request->semester,
            'notional_hours'=>$request->credits*25,
            'course_code'=>$request->course_code,
            'subject_id'=>$request->subject_id,
            'ac_year'=>$request->ac_year,
            'start_date' =>$request->start_date,
            'end_date' =>$request->end_date,
            'lecturer_id'=>$request->lecturer_id,
            'user_data'=>Auth::user()->email,
        ]);
        return response()->json($resource, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
