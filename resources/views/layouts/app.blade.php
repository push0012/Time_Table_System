<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }} " type="text/javascript" defer></script>
    <!-- Modernizr Js -->
    <script src="{{ asset('js/modernizr-2.8.3.min.js') }}" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" type="text/css">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/OwlCarousel/owl.theme.default.min.css') }}">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
    <!-- Magnific CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/hover-min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
</head>
<body>
    <div id="app">
    <div id="wrapper">   
       @include('navbar')
       
        <main class="py-4">
            @yield('content')
        </main>
        @include('footer')
    </div>
    </div>

    <script src="{{ asset('js/jquery-2.2.4.min.js') }} " type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="{{ asset('js/plugins.js') }} " type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap.min.js') }} " type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="{{ asset('vendor/OwlCarousel/owl.carousel.min.js') }} " type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="{{ asset('js/jquery.meanmenu.min.js') }} " type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }} " type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/waypoints.min.js') }}" type="text/javascript"></script>
    <!-- Select2 Js -->
    <script src="{{ asset('js/select2.min.js') }}" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }} " type="text/javascript"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="{{ asset('js/main.js') }} " type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" defer></script>
    <script src="{{ asset('js/custom.js') }} " type="text/javascript"></script>
</body>
</html>
