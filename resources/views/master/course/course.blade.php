@extends('layouts.app')

@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
            <div class="container">
         
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
                        <div class="gradient-wrapper item-mb">
                            <div class="gradient-title">
                                <h2>Add Course Details</h2>
                            </div>
                            <div class="input-layout1 gradient-padding">
                               
                                <div class="section-title-left-dark child-size-xl title-bar item-mb">
                                    <h3>Add Course Here</h3>
                                </div> 
                                <form method="POST" action="{{ url('course') }}">
									
                                    <div class="form-group row">
                                        <label for="course_name" class="col-md-4 col-form-label text-md-right">{{ __('Course Name') }}</label>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                            <input class="form-control" type="text" name="course_name" id="course_name" placeholder="Course Name" />
                                        </div> 
                                    </div>
									<div class="form-group row">
                                        <label for="section" class="col-md-4 col-form-label text-md-right">{{ __('Section') }}</label>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                            <input class="form-control" type="text" name="section" id="section" placeholder="Section" />
                                        </div> 
                                    </div>		
                                    <div class="form-group row">
                                        <label for="max_no_students" class="col-md-4 col-form-label text-md-right">{{ __('Maximum No of Student') }}</label>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                            <input class="form-control" type="text" name="max_no_students" id="max_no_students" placeholder="Maximum No of Student" />
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="course_hours" class="col-md-4 col-form-label text-md-right">{{ __('Course Hours') }}</label>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                            <input class="form-control" type="text" name="course_hours" id="course_hours" placeholder="Course Hours" />
                                        </div> 
                                    </div>
                                    <div class="form-group row">
                                        <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                            <input class="form-control" type="text" name="department" id="department" placeholder="Department" />
                                        </div> 
                                    </div>
                                    @guest
                                       <input class="form-control" type="hidden" name="user_data" id="user_data" value="Guest"/>
                                    @else
                                       <input class="form-control" type="hidden" name="user_data" id="user_data" value="{{ Auth::user()->email }}"/>
                                    @endguest
                                    <center>
                                        <button class="default-big-btn" type="submit" value="Login">Submit</button>
                                        <button class="default-big-btn form-cancel" type="reset" value="">Cancel</button>
                                        <a class="default-big-btn form-cancel" href="{{url('course')}}" value="">Back</a>
                                    </center>
                            </div>
                        </div>
         
                  
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="sidebar-item-box">
                            <div class="gradient-wrapper">
                                <div class="gradient-title">
                                    <h3>Search Course</h3>
                                </div>
                                <ul class="sidebar-seller-information">
									   <li><center>
                                       Enter Course Code</br>
									   <input type="text" id="search_class_room"/>
									   </br>
									   <a href="#" class="btn btn-default">
									   <i class="fa fa-search" aria-hidden="true"></i>Search
									   </a></center>
									   
                                   
                                
                                 
                                </ul>
                            </div>
                        </div>
                    
                       
                    </div>
                </div>
            </div>
        </section>

        @endsection