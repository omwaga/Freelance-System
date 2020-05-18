<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <!-- Meta tag -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="Radix" content="Responsive Multipurpose Business Template">
    <meta name='copyright' content='Radix'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    

    <!-- Title Tag -->
    <title>Radix &#8739; Creative Business & Consulting HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">    

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700,800" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Slick Nav CSS -->
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}">
    <!-- Cube Portfolio CSS -->
    <link rel="stylesheet" href="{{asset('css/cubeportfolio.min.css')}}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.min.css')}}">
    <!-- Fancy Box CSS -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('css/niceselect.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- Slick Slider CSS -->
    <link rel="stylesheet" href="{{asset('css/slickslider.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">

    <!-- Radix StyleShet CSS -->
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">    
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">   

    <!-- Radix Color CSS -->
    <link rel="stylesheet" href="{{asset('css/color/color1.css')}}">
    <link rel="stylesheet" href="#" id="colors">    
</head>
<body>

    <!-- Preloader -->
    <div class="preloader">
      <div class="preloader-inner">
        <div class="single-loader one"></div>
        <div class="single-loader two"></div>
        <div class="single-loader three"></div>
        <div class="single-loader four"></div>
        <div class="single-loader five"></div>
        <div class="single-loader six"></div>
        <div class="single-loader seven"></div>
        <div class="single-loader eight"></div>
        <div class="single-loader nine"></div>
    </div>
</div>
<!-- End Preloader -->

<!-- Get Pro Button -->
<ul class="pro-features">
    <a class="get-pro" href="#">Get Pro</a>
    <li class="title">Pro Version Some Features</li>
    <li>Multipage & Onepage Homepage</li>
    <li>26+ HTML5 pages</li>
    <li>All Premium Features</li>
    <li>Documentation Included</li>
    <li>6+ Month Dedicated Support!</li>
    <div class="button">
        <a href="https://www.codeglim.com/downloads/radix-multipurpose-business-consulting-template/" target="_blank" class="btn">Buy Pro Version</a>
        <a href="https://www.codeglim.com/downloads/radix-multipurpose-business-consulting-template/" target="_blank" class="btn">View Details</a>
    </div>
</ul>

<!-- Start Header -->
<header id="header" class="header">
    <!-- Topbar -->
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Contact -->
                    <ul class="contact">
                        <li><i class="fa fa-headphones"></i> +(123) 45678910</li>
                        <li><i class="fa fa-envelope"></i> <a href="mailto:info@yourmail.com">info@yourmail.com</a></li>
                        <li><i class="fa fa-clock-o"></i>Opening: 09am-5pm</li>
                    </ul>
                    <!--/ End Contact -->
                </div>
                <div class="col-lg-6 col-12">
                    <div class="topbar-right">
                        <!-- Search Form -->
                        <div class="search-form active">
                            <a class="icon" href="#"><i class="fa fa-search"></i></a>
                            <form class="form" action="#">
                                <input placeholder="Search & Enter" type="search">
                            </form>
                        </div>
                        <!--/ End Search Form -->
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        <!--/ End Social -->
                    </div>
                </div>
            </div>
        </div>  
    </div>
    <!--/ End Topbar -->
    <!-- Middle Bar -->
    <div class="middle-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-12">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="/"><img src="{{asset('images/logo.png')}}" alt="logo"></a>
                    </div>
                    <div class="link"><a href="/"><span>R</span>adix</a></div>
                    <!--/ End Logo -->
                    <button class="mobile-arrow"><i class="fa fa-bars"></i></button>
                    <div class="mobile-menu"></div>
                </div>
                <div class="col-lg-10 col-12">
                    <!-- Main Menu -->
                    <div class="mainmenu">
                        <nav class="navigation">
                            <ul class="nav menu">
                                @guest
                                <li><a href="#">Solutions<i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="#">Business Size</a></li>
                                        <li><a href="#">Start Ups</a></li>
                                        <li><a href="#">SMB</a></li>
                                        <li><a href="#">Enterprise</a></li>

                                        <li><a href="#">Department</a></li>
                                        <li><a href="#">Marketing</a></li>
                                        <li><a href="#">Operations</a></li>
                                        <li><a href="#">Engineering</a></li>
                                    </ul>
                                </li>
                                @endguest
                                @auth
                                <li><a href="#">My Account<i class="fa fa-caret-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="#">Post Offer</a></li>
                                        <li><a href="#">Dashboard</a></li>
                                        <li><a href="#">Profile</a></li>
                                        <li><a href="#">Buyer Activity</a></li>
                                        <li><a href="#">Payments</a></li>
                                        <li><a href="#">Settings</a></li>
                                        <li><a href="#">Logout</a></li>
                                        <li></li>
                                        <li><a href="#">Invite & Earn</a></li>
                                        <li><a href="#">View Leaderboard</a></li>
                                        <li><a href="#">Customer Support</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            @else
                            <li><a href="/login">Login</a></li>   
                            <li><a href="{{route('select-registration-type')}}">Sign Up</a></li> 
                            @endauth
                        </ul>
                    </nav>
                    <!-- Button -->
                    @auth
                    <div class="button">
                        <a href="#" class="btn">Logout</a>
                    </div>
                    @else
                    <div class="button">
                        <a href="{{route('login-form')}}" class="btn">Post a Job</a>
                    </div>
                    @endauth
                    <!--/ End Button -->
                </div>
                <!--/ End Main Menu -->
            </div>
        </div>
    </div>
</div>
<!--/ End Middle Bar -->
</header>
<!--/ End Header -->
@yield('content')


<!-- Footer -->
<footer id="footer" class="footer wow fadeIn">
    <!-- Top Arrow -->
    <div class="top-arrow">
        <a href="#header" class="btn"><i class="fa fa-angle-up"></i></a>
    </div>
    <!--/ End Top Arrow -->
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- About Widget -->
                    <div class="single-widget about">
                        <h2>Office Location</h2>
                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim.</p>
                        <ul class="list">
                            <li><i class="fa fa-map-marker"></i>Address: House 20, Sector-7, Road-5, California, US</li>
                            <li><i class="fa fa-headphones"></i>Phone: +(123) 45678 910</li>
                            <li><i class="fa fa-headphones"></i>Email:<a href="mailto:info@youremail.com">Info@yourwebsite.com</a></li>
                        </ul>   
                    </div>
                    <!--/ End About Widget -->
                </div>  
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Links Widget -->
                    <div class="single-widget links">
                        <h2>Quick Links</h2>
                        <ul class="list">
                            <li><a href="#"><i class="fa fa-caret-right"></i>About Our Company</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Our Latest services</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Our Recent Project</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Latest Blog</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Help Desk</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i>Contact With Us</a></li>
                        </ul>
                    </div>
                    <!--/ End Links Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Twitter Widget -->
                    <div class="single-widget twitter">
                        <h2>Recent Tweets</h2>
                        <div class="single-tweet">
                            <i class="fa fa-twitter"></i>
                            <p><a href="#">@Radix</a>Mauris sagittis nibh et nibh commodo vehicula. Praesent blandit nulla nec tristique egestas. Integer in volutpat turpis</p>
                        </div>
                        <div class="single-tweet">
                            <i class="fa fa-twitter"></i>
                            <p><a href="#">@Radix</a>Maecenas vulputate, dui eget varius sagittis, justo nunc efficitur sem, id vestibulum</p>
                        </div>
                        <div class="single-tweet">
                            <i class="fa fa-twitter"></i>
                            <p><a href="#">@Radix</a>Praesent facilisis tortor nec diam suscipit condimentum</p>
                        </div>
                    </div>
                    <!--/ End Twitter Widget -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Newsletter Widget -->
                    <div class="single-widget newsletter">
                        <h2>Newsletter</h2>
                        <p>consectetur adipiscing elit. Vestibulum vel sapien et lacus tempus varius. In finibus lorem vel.</p>
                        <form>
                            <input placeholder="Your Name" type="text">
                            <input placeholder="your email" type="email">
                            <button type="submit" class="button primary">Subscribe Now!</button>
                        </form> 
                    </div>
                    <!--/ End Newsletter Widget -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bottom-top">
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                        <!--/ End Social -->
                        <!-- Copyright -->
                        <div class="copyright">
                            <p>&copy; 2020 All Right Reserved. Design & Development By <a target="_blank" href="#">ThemeLamp.com</a>, Theme Provided By  <a target="_blank" href="#">CodeGlim.com</a></p>
                        </div>
                        <!--/ End Copyright -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Footer Bottom -->
</footer>
<!--/ End footer -->

<!-- Jquery -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('js/bootstrap.min.js')}}"></script> 
<!-- Colors JS -->
<script src="{{asset('js/colors.js')}}"></script>
<!-- Modernizer JS -->
<script src="{{asset('js/modernizr.min.js')}}"></script>
<!-- Nice select JS -->
<script src="{{asset('js/niceselect.js')}}"></script>
<!-- Tilt Jquery JS -->
<script src="{{asset('js/tilt.jquery.min.js')}}"></script>
<!-- Fancybox  -->
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<!-- Jquery Nav -->
<script src="{{asset('js/jquery.nav.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<!-- Slick Slider JS -->
<script src="{{asset('js/slickslider.min.js')}}"></script>
<!-- Cube Portfolio JS -->
<script src="{{asset('js/cubeportfolio.min.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{asset('js/jquery.slicknav.min.js')}}"></script>
<!-- Jquery Steller JS -->
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{asset('js/magnific-popup.min.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('js/wow.min.js')}}"></script>
<!-- CounterUp JS -->
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<!-- Waypoint JS -->
<script src="{{asset('js/waypoints.min.js')}}"></script>
<!-- Jquery Easing JS -->
<script src="{{asset('js/easing.min.js')}}"></script>
<!-- Google Map JS -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>  -->
<script src="{{asset('js/gmap.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>