@extends('layouts.app')

@section('content')
<section class="bg-body ">
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
                        <div class="plan-title">{{ __('User Login Here') }}</div>
                        <div class="login-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label for="email">{{ __('Username or email address *') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Username or E-mail" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                <label for="password">{{ __('Password *') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                
                                <div class="checkbox checkbox-primary">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="row">

                                    <center>
                                        <button class="default-big-btn" type="submit" value="Login">
                                            {{ __('Login') }}
                                        </button>

                                        <button class="default-big-btn form-cancel" type="reset" value="">Cancel</button>

                                        <label class="lost-password">
                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
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
