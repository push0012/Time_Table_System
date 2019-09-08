@extends('layouts.app')
@section('title', 'View Semester Plan')
@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Semester Plan Details</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>View Semester Plan Details Here</h3>
                        </div>
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <a class="btn btn-outline-primary btn-sm" href="{{ url('course_subject/create') }}" value="">Add Semester Plan</a>
                            </div>
                        </div>
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-md-2">Course Name</div>
                            <div class="col-md-10">{{ $course['course_name'] }}</div>
                        </div>
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-md-2">Semester</div>
                            <div class="col-md-10">{{ $semester }}</div>
                        </div>
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-md-2">Batch Year</div>
                            <div class="col-md-10">{{ $ac_year }}</div>
                        </div>

                        <table id="planningTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Subject ID</th>
                                    <th>Notional Hours</th>
                                    <th>Lesson Hours</th>
                                    <th>For Week (Hr)</th>
                                    <th>Lecturer</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody> 
                            @foreach($cuz_subs as $cuz_sub)
                            <tr>
                                <td>{{$cuz_sub->subject_id}}</td>
                                <td>{{$cuz_sub->notional_hours}}</td>
                                <td>{{$cuz_sub->lesson_hours}}</td>
                                <td>{{$cuz_sub->week_lesson_hours}}</td>
                                <td>{{$cuz_sub->title}} {{ $cuz_sub->initial}} {{$cuz_sub->last_name}}</td>
                                <td>
                                    <a class="btn btn-outline-primary btn-sm" href="{{ url('course_subject/'.$course['course_code'].'/'.$semester.'/'.$ac_year.'/'.$cuz_sub->subject_id.'/edit') }}">
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