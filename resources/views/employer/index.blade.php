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

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <li class="label">Main</li>
                    <li class="active"><a class="sidebar-sub-toggle"><i class="ti-home"></i> Dashboard <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="index.html">Dashboard 1</a></li>
                        </ul>
                    </li>
                    <li class="label">School</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-pencil-alt"></i>Management <span class="badge badge-primary">28</span><span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="school-student.html">Student</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="index.html"><!-- <img src="assets/images/logo.png" alt="" /> --><span>Adminity</span></a></div>
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
                                            <div class="notification-heading">Mr. Saifun</div>
                                            <div class="notification-text">5 members joined today </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Mariam</div>
                                            <div class="notification-text">likes a photo of you</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img class="pull-left m-r-10 avatar-img" src="assets/images/avatar/3.jpg" alt="" />
                                        <div class="notification-content">
                                            <small class="notification-timestamp pull-right">02:34 PM</small>
                                            <div class="notification-heading">Tasnim</div>
                                            <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                        </div>
                                    </a>
                                </li>
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
                <li class="header-icon dib"><img class="avatar-img" src="assets/images/avatar/1.jpg" alt="" /> <span class="user-avatar">Saifun <i class="ti-angle-down f-s-10"></i></span>
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
                                <li><a href="#"><i class="ti-power-off"></i> <span>Logout</span></a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-primary">
                                                <i class="ti-eye"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="stat-text">Order Received</div>
                                                <div class="stat-digit">6,250</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-success">
                                                <i class="ti-bag"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="stat-text">Today Delevered</div>
                                                <div class="stat-digit">2,584</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-warning">
                                                <i class="ti-user"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="stat-text">New Customer</div>
                                                <div class="stat-digit">9,874</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card p-0">
                                        <div class="stat-widget-three">
                                            <div class="stat-icon bg-danger">
                                                <i class="ti-money"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="stat-text">Net Earning</div>
                                                <div class="stat-digit">3,5621</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card bg-success">
                                        <div class="stat-widget-six">
                                            <div class="stat-icon p-15">
                                                <i class="ti-stats-up"></i>
                                            </div>
                                            <div class="stat-content p-t-12 p-b-12">
                                                <div class="text-left dib">
                                                    <div class="stat-heading">Daily sales</div>
                                                    <div class="stat-text">Total: 9765</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="card bg-primary">
                                        <div class="stat-widget-six">
                                            <div class="stat-icon p-15">
                                                <i class="ti-stats-down"></i>
                                            </div>
                                            <div class="stat-content p-t-12 p-b-12">
                                                <div class="text-left dib">
                                                    <div class="stat-heading">Daily Expense</div>
                                                    <div class="stat-text">Total: 6765</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-6">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Earning Graph</h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sales-chart">
                                    <canvas id="team-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Menu List</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-hover ">
                                        <tbody>
                                            <tr>
                                                <td class="no-border">Chicken Burger</td>
                                                <td class="no-border"><span class="btn btn-primary">$21</span></td>
                                            </tr>
                                            <tr>
                                                <td>Hot Dog</td>
                                                <td><span class="btn btn-success">$15</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                        <div class="col-lg-8">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Online Order List </h4>
                                    <div class="card-header-right-icon">
                                        <ul>
                                            <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                                            <li class="card-option drop-menu"><i class="ti-settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" role="link"></i>
                                                <ul class="card-option-dropdown dropdown-menu">
                                                    <li><a href="#"><i class="ti-loop"></i> Update data</a></li>
                                                    <li><a href="#"><i class="ti-menu-alt"></i> Detail log</a></li>
                                                    <li><a href="#"><i class="ti-pulse"></i> Statistics</a></li>
                                                    <li><a href="#"><i class="ti-power-off"></i> Clear ist</a></li>
                                                </ul>
                                            </li>
                                            <li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-hover ">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Order ID</th>
                                                <th>Product</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                                <th>Delevery</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jannatul Tasnim</td>
                                                <td>#12456</td>
                                                <td>Hot Dog</td>
                                                <td>3</td>
                                                <td class="color-warning">$21.56</td>
                                                <td><span class="btn btn-warning">Pending</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
                <!-- /# main content -->
            </div>
            <!-- /# container-fluid -->
        </div>
        <!-- /# main -->
    </div>
    <!-- /# content wrap -->


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