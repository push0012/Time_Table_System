@extends('layouts.app')
@section('title', 'View Subjects Details')
@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Subject Details</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>View Subjects</h3>
                        </div>
                        <div class="row" style="padding-bottom:10px;">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <a class="btn btn-outline-primary btn-sm" href="{{ url('subject/create') }}" value="">Add Subject</a>
                            </div>
                        </div>
                        <table id="subjectsTable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Subject ID</th>
                                    <th>Subject Title</th>
                                    <th>Method</th>
                                    <th>Needs</th>
                                    <th>Credits</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody> 
                            @foreach($subjects as $subject)
                            <tr>
                                <td>{{$subject['subject_id']}}</td>
                                <td>{{$subject->subject_title}}</td>
                                <td>{{$subject->method}}</td>
                                <td>{{$subject->needs}}</td>
                                <td>{{$subject->credits}}</td>
                                <td>
                                <a class="btn btn-outline-primary btn-sm" href="{{ url('subject/'.$subject->subject_id.'/edit') }}">
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