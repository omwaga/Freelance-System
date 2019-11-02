<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adminity : Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('employer/css/lib/chartist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{ asset('employer/css/lib/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('employer/css/lib/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('employer/css/lib/owl.carousel.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('employer/css/lib/owl.theme.default.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('employer/css/lib/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{ asset('employer/css/lib/menubar/sidebar.css')}}" rel="stylesheet">
    <link href="{{ asset('employer/css/lib/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('employer/css/lib/unix.css')}}" rel="stylesheet">
    <link href="{{ asset('employer/css/style.css')}}" rel="stylesheet">
</head>

<body>
@include('employer.layouts.navbar')

    @yield('content')

    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="{{ asset('employer/js/lib/jquery.min.js')}}"></script>
    <script src="{{ asset('employer/js/lib/jquery.nanoscroller.min.js')}}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('employer/js/lib/menubar/sidebar.js')}}"></script>
    <script src="{{ asset('employer/js/lib/preloader/pace.min.js')}}"></script>
    <!-- sidebar -->
    <script src="{{ asset('employer/js/lib/bootstrap.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('employer/js/lib/mmc-common.js')}}"></script>
    <script src="{{ asset('employer/js/lib/mmc-chat.js')}}"></script>
    <!--  Chart js -->
    <script src="{{ asset('employer/js/lib/chart-js/Chart.bundle.js')}}"></script>
    <script src="assets/js/lib/chart-js/chartjs-init.js"></script>
    <!-- // Chart js -->

    <!--  Datamap -->
    <script src="{{ asset('employer/js/lib/datamap/d3.min.js')}}"></script>
    <script src="{{ asset('employer/js/lib/datamap/topojson.js')}}"></script>
    <script src="{{ asset('employer/js/lib/datamap/datamaps.world.min.js')}}"></script>
    <script src="{{ asset('employer/js/lib/datamap/datamap-init.js')}}"></script>
    <!-- // Datamap -->-->
    <script src="{{ asset('employer/js/lib/weather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{ asset('employer/js/lib/weather/weather-init.js')}}"></script>
    <script src="{{ asset('employer/js/lib/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('employer/js/lib/owl-carousel/owl.carousel-init.js')}}"></script>
    <script src="{{ asset('employer/js/scripts.js')}}"></script>
    <!-- scripit init-->
</body>

</html>