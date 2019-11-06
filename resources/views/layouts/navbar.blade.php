
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->  

        <!--Main Wrapper Start-->
        <div class="as-mainwrapper">
            <!--Bg White Start-->
            <div class="bg-white">
                <!--Header Area Start-->
                <header id="sticky-header" class="header-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-xs-12">
                                <div class="logo"><a href="index.html"><img src="imapges/logo/logo.png" alt="WorkPoint"></a></div>
                            </div>
                            <div class="col-md-9 hidden-sm hidden-xs">
                                <div class="pull-right">
                                    <nav id="primary-menu">
                                        <ul class="main-menu text-right">
                                            <li><a href="index.html">Home</a>
                                            </li>
                                            <li><a href="job-board.html" target="_blank">Job Board</a>
                                                <ul class="dropdown">
                                                    <li><a href="single-job-post.html" target="_blank">Single Job</a></li>
                                                    <li><a href="job-details.html" target="_blank">Job Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Features</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Slider Style<i class="zmdi zmdi-chevron-right"></i></a>
                                                    <ul class="inside-menu">
                                                            <li><a href="slider-style-1.html" target="_blank">Slider Style 1</a></li>
                                                            <li><a href="fixed-image.html" target="_blank">Fixed Background</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Menu Style<i class="zmdi zmdi-chevron-right"></i></a>
                                                        <ul class="inside-menu">
                                                            <li><a href="menu-style-1.html" target="_blank">Default Menu</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Page Title<i class="zmdi zmdi-chevron-right"></i></a>
                                                        <ul class="inside-menu">
                                                            <li><a href="breadcrumb-center.html" target="_blank">Title Center</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Footer Style<i class="zmdi zmdi-chevron-right"></i></a>
                                                        <ul class="inside-menu">
                                                            <li><a href="footer-style-1.html" target="_blank">Footer Style 1</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="resume.html" target="_blank">Resume</a></li>
                                            <li><a href="#">Page</a>
                                                <ul class="dropdown">
                                                    <li><a href="job-board.html" target="_blank">Job Board</a></li>
                                                    <li><a href="single-job-post.html" target="_blank">Single Job</a></li>
                                                    <li><a href="job-details.html" target="_blank">Job Details</a></li>
                                                    <li><a href="candidates.html" target="_blank">Candidates</a></li>
                                                    <li><a href="resume.html" target="_blank">Resume</a></li>
                                                    <li><a href="blog.html" target="_blank">Blog Page</a></li>
                                                    <li><a href="blog-details.html" target="_blank">Blog Details</a></li>
                                                    <li><a href="login.html" target="_blank">Login Page</a></li>
                                                    <li><a href="contact.html" target="_blank">Contact</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html" target="_blank">Blog</a>
                                                <ul class="dropdown">
                                                    <li><a href="blog-details.html" target="_blank">Blog Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html" target="_blank">Contact</a></li>
                                        </ul>
                                    </nav>
                                    <div class="login-btn pt-36">
                        <!-- Authentication Links -->
                        @guest
                        <a class="modal-view button" href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                        <a class="modal-view button" href="{{ route('register') }}">Register</a>
                            @endif
                        @else
                        <a class="modal-view button nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        @endguest
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area start -->
                    <div class="mobile-menu-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="mobile-menu">
                                        <nav id="dropdown">
                                            <ul>
                                                <li><a href="index.html">HOME</a>
                                                    <ul>
                                                        <li><a href="index.html">Slider Style 1</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="job-board.html">Job Board</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="single-job-post.html">Single Job</a></li>
                                                        <li><a href="job-details.html">Job Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Features</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="#">Slider Style</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="fixed-image.html">Fixed Background</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Menu Style</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="menu-style-1.html">Default Menu</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Page Title</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="breadcrumb-center.html">Title Center</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href="#">Footer Style</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="footer-style-1.html">Footer Style 1</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="resume.html" target="_blank">Resume</a></li>
                                                <li><a href="#">Page</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="job-board.html">Job Board</a></li>
                                                        <li><a href="single-job-post.html">Single Job</a></li>
                                                        <li><a href="job-details.html">Job Details</a></li>
                                                        <li><a href="candidates.html">Candidates</a></li>
                                                        <li><a href="resume.html">Resume</a></li>
                                                        <li><a href="blog.html">Blog Page</a></li>
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                        <li><a href="login.html">Login Page</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog.html">Blog</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </nav>
                                    </div>                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu Area end -->  
                </header>
                <!-- End of Header Area -->