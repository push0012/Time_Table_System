@extends('layouts.app')
@section('title', 'Time Table Schedule System - Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Dashboard</h1></div>

                <div class="card-body">
                    <div class="container justify-content-center">
                        <div class="row justify-content-center">
                            <div class="col-md-6 dash">
                                <a href="{{ url('classroom') }}" class="linkdash">
                                    <i class="fas fa-chalkboard fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Classroom</span>
                                </a>
                            </div>

                            <div class="col-md-6 dash">
                                <a href="{{ url('course') }}" class="linkdash">
                                    <i class="fas fa-award fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Course</span>
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 dash">
                                <a href="{{ url('subject') }}" class="linkdash">
                                    <i class="fas fa-laptop-code fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Subject</span>
                                </a>
                            </div>
                            <div class="col-md-6 dash">
                                <a href="{{ url('lecturer') }}" class="linkdash">
                                    <i class="fas fa-chalkboard-teacher fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Lecturer</span>
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 dash">
                                <a href="#" data-toggle="modal" data-target="#myModal"  class="linkdash">
                                    <i class="fas fa-shapes fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Semester Plan</span>
                                </a>
                            </div>
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-lg" style="width:50%;">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                    <h4 class="modal-title">Find Semester Plan</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        <form method="GET" action="{{ url('course_subject')}}">
                                            <div class="form-group row">
                                                <label for="course_code" class="col-md-4 col-form-label text-md-left">{{ __('Course') }}</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="course_code" id="course_code">
                                                        <option value="0" disabled selected>Select Course ...</option>
                                                        @foreach($courses as $course)
                                                        <option value="{{ $course->course_code}}">{{ $course->course_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="semester" class="col-md-4 col-form-label text-md-left">{{ __('Semester') }}</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="semester" id="semester">
                                                        <option value="0" disabled selected>Select Semester ...</option>
                                                        <option value="1">Semester 01</option>
                                                        <option value="2">Semester 02</option>
                                                        <option value="3">Semester 03</option>
                                                        <option value="4">Semester 04</option>
                                                        <option value="5">Semester 05</option>
                                                        <option value="6">Semester 06</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="ac_year" class="col-md-4 col-form-label text-md-left">{{ __('Academic Year') }}</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="ac_year" id="ac_year">
                                                        <option value="0" disabled selected>Select Year ...</option>
                                                        @for ($i = 2016; $i <= 2020; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <center>									
                                                <button class="default-big-btn" id="save" type="submit" value="Submit">Submit</button>
                                            </center>
                                        </form>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                    
                                </div>
                                </div>
                            </div>

                            <div class="col-md-6 dash">
                                <a href="#" data-toggle="modal" data-target="#myModal2" class="linkdash">
                                    <i class="fas fa-calendar-alt fa-5x"></i><br>
                                    <span class="badge badge-secondary names">Timetable</span>
                                </a>
                            </div>
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog modal-lg" style="width:50%;">
                                <div class="modal-content">
                                
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">TimeTable Generating and Viewing</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    
                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        
                                        <form method="GET" action="{{ url('viewtimetable') }}">
                                            <div class="form-group row">
                                                <label for="course_code" class="col-md-4 col-form-label text-md-left">{{ __('Course') }}</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="course_name" id="course_name">
                                                        <option value="0" disabled selected>Select Course ...</option>
                                                        @foreach($courses as $course)
                                                        <option value="{{ $course->course_name}}">{{ $course->course_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="semester" class="col-md-4 col-form-label text-md-left">{{ __('Semester') }}</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="semester" id="semester">
                                                        <option value="0" disabled selected>Select Semester ...</option>
                                                        <option value="1">Semester 01</option>
                                                        <option value="2">Semester 02</option>
                                                        <option value="3">Semester 03</option>
                                                        <option value="4">Semester 04</option>
                                                        <option value="5">Semester 05</option>
                                                        <option value="6">Semester 06</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="ac_year" class="col-md-4 col-form-label text-md-left">{{ __('Academic Year') }}</label>
                                                <div class="col-md-8">
                                                    <select class="form-control" name="ac_year" id="ac_year">
                                                        <option value="0" disabled selected>Select Year ...</option>
                                                        @for ($i = 2016; $i <= 2020; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>
                                            <center>									
                                                <button class="default-big-btn form-cancel" type="submit" >View</button>
                                            </center>
                                        </form>
                                    </div>
                                    
                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <a type="button" class="btn btn-danger" href="{{url('createGenerator')}}" >Generate Time Table</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
