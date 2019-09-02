     
<header style="height:150px;">
    <div id="header-three" class="header-style1 header-fixed">
        <div class="header-top-bar top-bar-style1">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-8">
                        <div class="top-bar-left">
                            <p class="hidden-sm hidden-xs">
                                <i class="fa fa-life-ring" aria-hidden="true"></i>Have any questions? +94761088342 or univotec.lk
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-mb-4">
                        <div class="top-bar-right">
                            <ul>
                                <li class="hidden-mb"></li>
                                <li> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg-primary" id="sticker">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center">
                    <div class="col-lg-2 col-md-2 col-sm-3">
                        <div class="logo-area">
                            <a href="index.html" class="img-responsive">
                                <img src="{{ asset('image/logo.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8 col-sm-6 possition-static">
                        <div class="cp-main-menu">
                            <nav>
                                <ul>
                                    <li class="active"><a href="#">Home</a>
                                        <ul class="cp-dropdown-menu">
                                            <li class="active"><a href="{{ route('login') }}">Home</a></li>
                                        </ul>
                                    </li>

                                    <li class="menu-justify current"><a href="#">Pages</a>
                                        <div class="rt-dropdown-mega container" style="width:100% !important;">
                                            <div class="rt-dropdown-inner">
                                                <div class="row" >
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="{{ route('login') }}">Home</a></li>
                                                            <li><a href="{{ url('classroom/create') }}">Class Room</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="{{ url('course/create') }}">Course</a></li>
                                                            <li><a href="{{ url('lecturer/create') }}">Lecturer</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items">
                                                            <li><a href="{{ url('subject/create') }}">Subject</a></li>
                                                            <li><a href="{{ url('lecturer_free/create') }}">Free Times</a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <ul class="rt-mega-items"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="features.html">Features</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    @guest
                    <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                        
                        <a class="cp-default-btn" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </div>
                    @if (Route::has('register'))
                    <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                        
                        <a class="cp-default-btn" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </div>
                    @endif
                    @else
                    <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                        <strong id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </strong>
                    </div>
                    
                    <div class="col-lg-2 col-md-2 col-sm-3 text-right">
                        <a class="cp-default-btn" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        
                        {{ __('Logout') }}
                    </a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</div>
</header>