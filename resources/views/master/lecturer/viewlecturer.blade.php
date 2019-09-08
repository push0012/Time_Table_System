@extends('layouts.app')
@section('title', 'View Lecturer Details')
@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Lecturer Details</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>View Lecturers</h3>
                        </div>
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-md-7"></div>
                            <div class="col-md-2">
                                <a class="btn btn-outline-primary btn-sm" href="{{ url('lecturer/create') }}" value="">Add Lecturer</a>
                            </div>
                            <div class="col-md-2">
                                <a class="btn btn-outline-danger btn-sm" href="{{ url('lecturer_free/create') }}" value="">Add Free Timeslots</a>
                            </div>
                        </div>
                        <table id="lecturerTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Lecturer ID</th>
                                    <th>Title</th>
                                    <th>Initial</th>
                                    <th>Last Name</th>
                                    <th>Short Name</th>
                                    <th>Department</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody> 
                            @foreach($lecturers as $lecturer)
                            <tr>
                                <td>{{$lecturer->lecturer_id}}</td>
                                <td>{{$lecturer->title}}</td>
                                <td>{{$lecturer->initial}}</td>
                                <td>{{$lecturer->last_name}}</td>
                                <td>{{$lecturer->short_name}}</td>
                                <td>{{$lecturer->department}}</td>
                                <td>
                                <a class="btn btn-outline-primary btn-sm" href="{{ url('lecturer/'.$lecturer->lecturer_id.'/edit') }}">
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