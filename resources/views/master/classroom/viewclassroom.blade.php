@extends('layouts.app')

@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Classroom Details</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>View Classroom</h3>
                        </div>
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <a class="btn btn-outline-primary btn-sm" href="{{ url('classroom/create') }}" value="">Add Classroom</a>
                            </div>
                        </div>
                        <table id="classTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Classroom ID</th>
                                    <th>Classroom Name</th>
                                    <th>Location</th>
                                    <th>Student Capacity</th>
                                    <th>Method</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody> 
                            @foreach($classrooms as $classroom)
                            <tr>
                                <td>{{$classroom->classroom_id}}</td>
                                <td>{{$classroom->classroom_name}}</td>
                                <td>{{$classroom->location}}</td>
                                <td>{{$classroom->student_capacity}}</td>
                                <td>{{$classroom->method}}</td>
                                <td>
                                <a class="btn btn-outline-primary btn-sm" href="{{ url('classroom/'.$classroom->classroom_id.'/edit') }}">
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