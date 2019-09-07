@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container" id="isotope-container">
        <div class="section-title-dark">
            <h1>Welcome To Time Table Scheduling System</h1>
            <p>University of Vocational Technology</p>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5"></div>
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"><img style="height:175px;"  src="{{ asset('image/uni.png') }}"/></div>
        </div>        
    </div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <section class="bg-body">
        
                    <div class="container">
                       <div class="pricing-box bg-box">
                        <div class="plan-title">{{ __('Register Users') }}</div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <label for="name" >{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name" />
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                                <label for="email" >{{ __('Email') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label for="password">{{ __('Password *') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                                
                                <div class="row">
                                    <center>
                                        <button class="default-big-btn" type="submit" value="Register">
                                            {{ __('Register') }}
                                        </button>

                                        <button class="default-big-btn form-cancel" type="reset" value="">Cancel</button>
                                    
                                        
                                        <label class="lost-password">
                                            
                                            <a class="btn btn-link" href="{{ route('login') }}">
                                                {{ __('Already have Account?') }}
                                            </a>
                                            
                                        </label>
                                    </center>

                                </div>
                            </form>
                        </div>

                        
                        
                    </div>
                </section>

           

        </div>
    </div>
</div>
@endsection
