<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Devpromaster">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Bachmann Floors')</title>

    <link rel="icon" href="{{ asset('assets/frontend/img/favicon.png') }}" type="image/png">
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/line-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/fontAwesomePro.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/barfiller.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/backToTop.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/metismenu.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/odometer.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/fancy-box.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/custom.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body>

    {{-- Header --}}
    @includeIf('frontend.layouts.partials.header')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    @include('frontend.partials.new-footer')
    {{-- JS --}}

    <!-- jQuery -->
    <script src="{{ asset('assets/frontend/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/pure-counter.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/isotope-3.0.6-min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/backToTop.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/metismenu.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.barfiller.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/jquery-fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>
