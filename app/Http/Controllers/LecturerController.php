<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lecturer;
use Auth;
class LecturerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $lecturers =  Lecturer::all();
       return view('master.lecturer.viewlecturer')->with('lecturers',$lecturers);
    }
    public function getLecturer(){
        $lecturers =  Lecturer::all();
        return response()->json($lecturers, 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.lecturer.lecturer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lecturer = $request->all();

        $lecturer['user_data'] = Auth::user()->email;
        
        $response = Lecturer::create($lecturer);

        return response()->json($response, 201);
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
        $lecturers = Lecturer::findOrFail($id);
        return view('master.lecturer.editlecturer')->with('lecturers',$lecturers);
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
        $lecturer = Lecturer::where('lecturer_id', $id)->first();
        $lecturer->title = $request->title;
        $lecturer->initial = $request->initial;
        $lecturer->last_name = $request->last_name;
        $lecturer->short_name = $request->short_name;
        $lecturer->department = $request->department;
        $lecturer->save();

        $$lecturer = Lecturer::all();
        return redirect('/lecturer')->with('success', 'Stock has been updated');
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
