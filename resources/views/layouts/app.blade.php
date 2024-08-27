<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
   <!--  <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://wedjio.com/front/css/base.css" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ asset('storage/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,500;0,600;0,700;1,400;1,600&amp;display=swap">
    <link rel="stylesheet" href="{{ asset('storage/front/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/front/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/front/css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/front/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/front/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/front/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/front/css/style.css') }}">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div id="app">
        
    @include('include.header')
        <main class="py-4">
            @yield('content')
        </main>
        @include('include.footer')  
    </div>
</body>

 <script src="https://wedjio.com/front/js/jquery-3.6.0.min.js"></script>
    <script src="https://wedjio.com/front/library/owlcarousel/js/owl.carousel.min.js"></script> 
        <script src="{{ asset('storage/front/js/select2.min.js') }}"></script>
    <script src="https://wedjio.com/front/library/jquery-ui/js/jquery-ui.min.js"></script>
    <script src="https://wedjio.com/front/library/jquery-ui/js/jquery.ui.touch-punch.min.js"></script>
    <script src="https://wedjio.com/front/library/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://wedjio.com/front/library/isotope-layout/isotope.pkgd.min.js"></script> 
    <script src="https://wedjio.com/front/library/datepicker/js/datepicker.js"></script>    
    <script src="https://wedjio.com/front/js/script.js"></script>
    <script src="https://wedjio.com/front/js/custom.js"></script>
</html>
