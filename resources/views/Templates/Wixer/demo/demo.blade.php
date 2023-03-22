@extends('layouts.EditorMode.webpage_editor')


@section('title')
    <title>Wixer | One Page Parallax</title>
@endsection

@section('header_imports')
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('./assets/images/favicon.png') }}">
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/font-awesome.min.css') }}">
    <!-- Animate CSS File -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/animate.min.css') }}">
    <!-- Cube Portfolio CSS File -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/cubeportfolio.min.css') }}">
    <!-- Fancy Box CSS File -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/jquery.fancybox.min.css') }}">
    <!-- Revolution Slider CSS Files -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/settings.css') }}">
    <!-- Swiper CSS File -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/swiper.min.css') }}">
    <!-- Owl Carousel CSS Files -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/owl.theme.default.min.css') }}">
    <!-- Style CSS File -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/before-after-img.css') }}">
    <!-- Style CSS File -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/style.css') }}">
    <!-- Custom Style CSS File -->
    <link rel="stylesheet" href="{{ asset('./assets/Wixer/css/custom.css') }}">
@endsection

@section('site')

    @include('Templates.Wixer.index.index')
@endsection

@section('footer_imports')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('/assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap JS File -->
    <script src="{{ asset('/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
    <!-- Morphtext JS File -->
    <script src="{{ asset('/assets/js/morphext.min.js') }}"></script>
    <!-- Flip JS File -->
    <script src="{{ asset('/assets/js/jquery.flip.min.js') }}"></script>
    <!-- Appear JS File -->
    <script src="{{ asset('/assets/js/jquery.appear.js"') }}"></script>
    <!-- Isotop gallery -->
    <script src="{{ asset('/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- Cube Portfolio JS File -->
    <script src="{{ asset('/assets/js/jquery.cubeportfolio.min.js') }}"></script>
    <!-- Equal Height JS File -->
    <script src="{{ asset('/assets/js/jquery.matchHeight-min.js') }}"></script>
    <!--Parallax Background-->
    <script src="{{ asset('/assets/js/parallaxie.min.js') }}"></script>
    <!-- Fancy Box JS File -->
    <script src="{{ asset('/assets/js/jquery.fancybox.min.js') }}"></script>
    <!-- Swiper JS File -->
    <script src="{{ asset('/assets/js/swiper.min.js') }}"></script>
    <!-- Owl Carousel JS File -->
    <script src="{{ asset('/assets/js/owl.carousel.js') }}"></script>
    <!-- Wow JS File -->
    <script src="{{ asset('/assets/js/wow.js') }}"></script>
    <!-- Tween Max Animation File -->
    <script src="{{ asset('/assets/js/TweenMax.min.js') }}"></script>
    <!-- Headroom Nav File -->
    <script src="{{ asset('/assets/js/headroom.js') }}"></script>

    <!--Revolution Slider-->
    <script src="{{ asset('/assets/Wixer/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/jquery.themepunch.revolution.contdown.min.js') }}"></script>

    <!-- Before After Effect Slider Revolution -->
    <script src="{{ asset('/assets/Wixer/js/revolution.addon.particles.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/revolution.addon.beforeafter.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('/assets/Wixer/js/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('/assets/Wixer/js/revolution.extension.video.min.js') }}"></script>

    <!-- Google Map Api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCJRG4KqGVNvAPY4UcVDLcLNXMXk2ktNfY"></script>
    <script src="{{ asset('/assets/Wixer/js/maps.min.js') }}"></script>

    <!-- Custom JS File -->
    <script src="{{ asset('/assets/Wixer/js/functions.js') }}"></script>

    <script>
    // document.addEventListener('onload',()=>{
        console.log('i am ready');
    // })
</script>
@endsection
