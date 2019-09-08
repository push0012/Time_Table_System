@extends('layouts.app')
@section('title', 'Add Semester Plan')
@section('content')

<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
       
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Add Semester Plan</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                     
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>Add Semester Plan Details Here</h3>
                        </div> 
                        <form id="subjectfrm" >
                            <div class="form-group row">
                                <label for="course_code" class="col-md-2 col-form-label text-md-left">{{ __('Course Name') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="course_code" id="course_code" required>
                                        <option value="" disabled selected>Select Course ...</option>
                                        @foreach($courses as $course)
                                        <option value="{{$course->course_code}}">{{$course->course_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ac_year" class="col-md-2 col-form-label text-md-left">{{ __('Academic Year') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="ac_year" id="ac_year" required>
                                        <option value="" disabled selected>Select Year ...</option>
                                        @for ($i = 2016; $i <= 2020; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="semester" class="col-md-2 col-form-label text-md-left">{{ __('Semester') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="semester" id="semester" required>
                                        <option value="" disabled selected>Select Semester ...</option>
                                        @for ($i = 1; $i <= 6; $i++)
                                        <option value="{{ $i }}">Semester {{ $i }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="start_date" class="col-md-2 col-form-label text-md-left">{{ __('Start Date') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="date" name="start_date" id="start_date" required/>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="end_date" class="col-md-2 col-form-label text-md-left">{{ __('End Date') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="date" name="end_date" id="end_date" required/>
                                </div> 
                            </div>

                            <input class="btn btn-outline-primary btn-sm" type="button" id="addRow" value="Add Subject">
                            <input class="btn btn-outline-danger btn-sm" type="button" id="remove" value="Remove Row">
                                                        
                            <table id="example" class="display" style="width:50%">
                                <thead>
                                    <tr>
                                        <th >Subject ID</th>
                                        <th >Credits</th>
                                        <th >Lecturer</th>
                                    </tr>
                                </thead>
                            </table>
                            <br>
                            <center>									
                             <button class="default-big-btn" id="reddit" type="button" value="Submit">Submit</button>
                             <button class="default-big-btn form-cancel" type="button" value="">Cancel</button>		
                         </center>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 @endsection