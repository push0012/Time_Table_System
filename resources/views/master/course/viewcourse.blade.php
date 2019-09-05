@extends('layouts.app')

@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Course Details</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>View Courses</h3>
                        </div>
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <a class="btn btn-outline-primary btn-sm" href="{{ url('course/create') }}" value="">Add Course</a>
                            </div>
                        </div>
                        <table id="courseTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Section</th>
                                    <th>Max No Student</th>
                                    <th>Course Hours</th>
                                    <th>Department</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody> 
                            @foreach($courses as $course)
                            <tr>
                                <td>{{$course->course_code}}</td>
                                <td>{{$course->course_name}}</td>
                                <td>{{$course->section}}</td>
                                <td>{{$course->max_no_students}}</td>
                                <td>{{$course->course_hours}}</td>
                                <td>{{$course->department}}</td>
                                <td>
                                <a class="btn btn-outline-primary btn-sm" href="{{ url('course/'.$course->course_code.'/edit') }}">
                                <i class="far fa-edit"></i>
                                </a>
                                </td>
                                
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection