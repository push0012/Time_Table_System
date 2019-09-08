<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer_Free;
use App\Lecturer;
use Auth;

class LecturerFreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Lecturer_Free::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecturer =  Lecturer::all();
        return view('master.lecturer.timeslot')->with('lecturers', $lecturer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //$freetime =
        
        $response = Lecturer_Free::create([
            'free_time' => implode(",",$request->free_time),
            'start_date'=>$request->start_date,
            'end_date'=>$request->end_date,
            'user_data' => Auth::user()->email,
            'lecturer_id' => $request->lecturer_id
            ]);
            return redirect('/lecturer')->with('success', 'Lecturer was added');
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
