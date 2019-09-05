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
                        <h2>Add Lecturer Details</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>Add Lecturer</h3>
                        </div> 
                        <form method="POST" action="{{ url('lecturer') }}">
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="text" name="title" id="title" placeholder="Title" />
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="initial" class="col-md-4 col-form-label text-md-right">{{ __('Initial') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="text" name="initial" id="initial" placeholder="Initial" />
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" />
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="short_name" class="col-md-4 col-form-label text-md-right">{{ __('Short Name') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="text" name="short_name" id="short_name" placeholder="Short Name" />
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
                            </center>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <div class="sidebar-item-box">
                    <div class="gradient-wrapper">
                        <div class="gradient-title">
                            <h3>Search Lecturer</h3>
                        </div>
                        <ul class="sidebar-seller-information">
                            <li><center>
                            Enter Lecturer ID/Name</br>
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