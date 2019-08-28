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
                        <h2>Add Class Rooms/Labs And Search Class Rooms/Labs</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                     
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>Add Class Room and Lab Details:</h3>
                        </div> 
                        <form method="POST" action="{{ url('classroom') }}">
                        <div class="form-group row">
                            <label for="classroom_name" class="col-md-4 col-form-label text-md-right">{{ __('Classroom Name') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                <input class="form-control" type="text" name="classroom_name" id="classroom_name" placeholder="Classroom Name" />
                            </div> 
                        </div>
                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('Location') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="location" id="location">
                                    <option value="0" disabled selected>Select Location ...</option>
                                    <option value="NB">New Building (NB)</option>
                                    <option value="OB">Old Building (OB)</option>
                                    <option value="MB">Media Building (MB)</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="student_capacity" class="col-md-4 col-form-label text-md-right">{{ __('Student Capacity') }}</label>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                <input class="form-control" type="text" name="student_capacity" id="student_capacity" placeholder="Student Capacity" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" name="type" id="type">
                                    <option value="0" disabled selected>Select Type ...</option>
                                    <option value="COM">Computer Lab</option>
                                    <option value="CR">Class Room</option>
                                    <option value="WS">Workshop</option>
                                    <option value="LH">Large Hall</option>
                                </select>
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
                     </center>
                 </div>
             </div>
         </div>
         <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="sidebar-item-box">
                <div class="gradient-wrapper">
                    <div class="gradient-title">
                        <h3>Search Class Room</h3>
                    </div>
                    <ul class="sidebar-seller-information">
                        <li><center>
                        Enter Class Room ID</br>
                        <input type="text" id="search_class_room"/>
                    </br>
                    <a href="#" class="btn btn-default">
                        <i class="fa fa-search" aria-hidden="true"></i>Search
                    </a></center>
                </li>
                <li><center>
                Enter Lab ID</br>
                <input type="text" id="search_class_room"/>
            </br>
            <a href="#" class="btn btn-default">
                <i class="fa fa-search" aria-hidden="true"></i>Search
            </a></center>
            
        </li>
        
        
        
    </ul>
</div>
</div>


</div>
</div>
</div>
</section>

@endsection