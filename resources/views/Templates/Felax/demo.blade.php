@extends('layouts.EditorMode.webpage_editor')
@section('title')
    <title>Felax on Editor Mode</title>
@endsection

@section('header_imports')
    <!-- Link of CSS files -->
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/fontawsome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/meanmenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/Felax/css/responsive.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/Felax/images/fav-icon.png') }}">
@endsection

@section('site')
    @include('Templates.Felax.index')
@endsection

@section('script_imports')
    <!-- Link of JS files -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/Felax/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/TweenMax.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/appear.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/Felax/js/custom.js') }}"></script>
@endsection
