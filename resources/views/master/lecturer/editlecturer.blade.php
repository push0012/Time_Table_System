@extends('layouts.app')

@section('content')
<section class="s-space-bottom-full bg-accent-shadow-body">
    <div class="container">
       
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="gradient-wrapper item-mb">
                    <div class="gradient-title">
                        <h2>Edit Lecturer Details</h2>
                    </div>
                    <div class="input-layout1 gradient-padding">
                        <div class="section-title-left-dark child-size-xl title-bar item-mb">
                            <h3>Edit Lecturer</h3>
                        </div> 
                        <form method="POST" action="{{ route('lecturer.update',$lecturers->lecturer_id ) }}" >
                            @method('PATCH')
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="text" name="title" id="title" placeholder="Title" value="{{ $lecturers['title']}}"/>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="initial" class="col-md-4 col-form-label text-md-right">{{ __('Initial') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="text" name="initial" id="initial" placeholder="Initial" value="{{ $lecturers['initial']}}"/>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Last Name" value="{{ $lecturers['last_name']}}"/>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="short_name" class="col-md-4 col-form-label text-md-right">{{ __('Short Name') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="text" name="short_name" id="short_name" placeholder="Last Name" value="{{ $lecturers['short_name']}}"/>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-6">
                                    <input class="form-control" type="text" name="department" id="department" placeholder="Department" value="{{ $lecturers['department']}}"/>
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
                                <a class="default-big-btn form-cancel" href="{{url('lecturer')}}" value="">Back</a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection