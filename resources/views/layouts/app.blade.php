<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://wedjio.com/front/css/base.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
        @include('include.footer')  
    </div>
</body>

<script src="https://wedjio.com/front/js/jquery-3.6.0.min.js"></script>
    <script src="https://wedjio.com/front/library/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://wedjio.com/front/library/owlcarousel/js/owl.carousel.min.js"></script>
    <script src="https://wedjio.com/front/library/select2/js/select2.min.js"></script>
    <script src="https://wedjio.com/front/library/jquery-ui/js/jquery-ui.min.js"></script>
    <script src="https://wedjio.com/front/library/jquery-ui/js/jquery.ui.touch-punch.min.js"></script>
    <script src="https://wedjio.com/front/library/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://wedjio.com/front/library/isotope-layout/isotope.pkgd.min.js"></script> 
    <script src="https://wedjio.com/front/library/datepicker/js/datepicker.js"></script>    
    <script src="https://wedjio.com/front/js/script.js"></script>
    <script src="https://wedjio.com/front/js/custom.js"></script>
</html>
