<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KaziPoint : Creative Admin Dashboard</title>
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

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard </a>
                    </li>
                    <li class="label">My projects</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-pencil-alt"></i>All Projects<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="/projects">My Projects<span class="badge badge-primary">28</span></a></li>
                            <li><a href="/projects/create">New Project</a></li>
                        </ul>
                    </li>
                    <li class="label">Applicants</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-pencil-alt"></i>New Candidates<span class="badge badge-primary">28</span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="#">Previous Candidates</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>KaziPoint</span></a></div>
            <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
        <div class="pull-right p-r-15">
            <ul>
                <li class="header-icon dib"><a href="#search"><i class="ti-search"></i></a></li>
                <li class="header-icon dib"><i class="ti-bell"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Recent Notifications</span>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Ishrat Jahan</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib"><i class="ti-email"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-heading">
                            <span class="text-left">2 New Messages</span>
                            <a href="email.html"><i class="ti-pencil-alt pull-right"></i></a>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/1.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Saiul Islam</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Ishrat Jahan</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Saiul Islam</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/2.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Ishrat Jahan</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="#" class="more-link">See All</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar">{{auth()->user()->name}} <i class="ti-angle-down f-s-10"></i></span>
                    <div class="drop-down dropdown-profile">
                        <div class="dropdown-content-heading">
                            <span class="text-left">Upgrade Now</span>
                            <p class="trial-day">30 Days Trail</p>
                        </div>
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="#"><i class="ti-user"></i> <span>Profile</span></a></li>
                                <li><a href="#"><i class="ti-wallet"></i> <span>My Balance</span></a></li>
                                <li><a href="#"><i class="ti-write"></i> <span>My Task</span></a></li>
                                <li><a href="#"><i class="ti-calendar"></i> <span>My Calender</span></a></li>
                                <li><a href="#"><i class="ti-email"></i> <span>Inbox</span></a></li>
                                <li><a href="#"><i class="ti-settings"></i> <span>Setting</span></a></li>
                                <li><a href="#"><i class="ti-help-alt"></i> <span>Help</span></a></li>
                                <li><a href="#"><i class="ti-lock"></i> <span>Lock Screen</span></a></li>
                                <li><a href="#" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off"></i> <span>Logout</span></a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

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