@extends('layouts.master')
@section('content')
                <!--Start of Slider Area-->
                <div class="slider-area">
                    <div class="preview-2">
                        <div id="nivoslider" class="slides">    
                            <img src="images/slider/slider1.jpeg" alt="" title="#slider-1-caption1"/>
                            <img src="images/slider/slider.jpeg" alt="" title="#slider-1-caption2"/>
                        </div> 
                        <div id="slider-1-caption1" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content">
                                                    <h1 class="title1 wow bounceInDown text-uppercase text-white mb-16" data-wow-duration="3s" data-wow-delay="0s">{{$details->banner1}}</h1>
                                                    <p class="sub-title wow bounceInRight hidden-xs" data-wow-duration="3s" data-wow-delay="1s"> {{$details->bannerdetails1}}</p>
                                                    <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="3s" data-wow-delay="2s">
                                                        <a class="button slider-btn" data-toggle="modal" data-target="#register">Register</a>                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                        <div id="slider-1-caption2" class="nivo-html-caption nivo-caption">
                            <div class="banner-content slider-2">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="text-content-wrapper">
                                                <div class="text-content slide-2">
                                                    <h1 class="title1 wow flipInX text-uppercase text-white mb-16" data-wow-duration="1s" data-wow-delay="0s">{{$details->banner2}}</h1>
                                                    <p class="sub-title wow lightSpeedIn hidden-xs" data-wow-duration="1s" data-wow-delay=".2s"> {{$details->bannerdetails2}}</p>
                                                    <div class="banner-readmore wow bounceInUp mt-35" data-wow-duration="1s" data-wow-delay=".6s">
                                                        <a class="button slider-btn" href="#">Find a job</a>                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
                </div>
                <!--End of Slider Area-->
                <!--Start of Job Post Area-->
                <div class="job-post-area ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center ">
                                    <h2 class="uppercase">Recent Jobs</h2>
                                    <div class="separator mt-35 mb-77">
                                        <span><img src="images/icons/1.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="job-post-container fix mb-70">
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/1.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Graphic Designer</h4>
                                                <h5><a href="#">Devitems</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 200.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/2.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Web Designer</h4>
                                                <h5><a href="#">Hastech</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 450.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/3.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Print Designer</h4>
                                                <h5><a href="#">Bootexperts</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button button-dark-blue">Internship</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/4.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">UI/UX Designer</h4>
                                                <h5><a href="#">CodeCarnival</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/2.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Web Development</h4>
                                                <h5><a href="#">PowerBoosts</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button">Part Time</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <a href="#" class="button large-button">Browse all jobs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Job Post Area -->
                <!--Start of Job Post Area-->
                <div class="job-post-area pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center ">
                                    <h2 class="uppercase">Featured Jobs</h2>
                                    <div class="separator mt-35 mb-77">
                                        <span><img src="images/icons/1.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="job-post-container fix">
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/1.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Graphic Designer</h4>
                                                <h5><a href="#">Devitems</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 200.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/2.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Web Designer</h4>
                                                <h5><a href="#">Hastech</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 450.00</span>
                                            <a href="#" class="button button-red">Full Time</a>
                                        </div>
                                    </div>
                                    <div class="single-job-post fix">
                                        <div class="job-title col-4 pl-30">
                                            <span class="pull-left block mtb-17">
                                                <a href="#"><img src="images/company-logo/3.png" alt=""></a>
                                            </span>
                                            <div class="fix pl-30 mt-29">
                                                <h4 class="mb-5">Print Designer</h4>
                                                <h5><a href="#">Bootexperts</a></h5>
                                            </div>
                                        </div>
                                        <div class="address col-4 pl-50">
                                            <span class="mtb-30 block">2020 Willshire Glen,<br>
                                            Alpharetta, GA-30009</span>
                                        </div>
                                        <div class="time-payment col-2 pl-60 text-center pt-22">
                                            <span class="block mb-6">€ 500.00</span>
                                            <a href="#" class="button">Part Time</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Job Post Area -->
                <!--Start of Fun Factor Area-->
                <div class="fun-factor-area bg-1 text-center fix bg-opacity-blue-10 ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <div class="single-fun-factor">
                                    <h3 class="pb-15 mb-23">Jobs</h3>
                                    <h1><span class="counter">1250</span></h1>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="single-fun-factor">
                                    <h3 class="pb-15 mb-23">Members</h3>
                                    <h1><span class="counter">500</span></h1>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="single-fun-factor">
                                    <h3 class="pb-15 mb-23">Resume</h3>
                                    <h1><span class="counter">700</span></h1>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="single-fun-factor">
                                    <h3 class="pb-15 mb-23">Company</h3>
                                    <h1><span class="counter">1250</span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Fun Factor Area-->
                <!--Start of Advertise Area-->
                <div class="advertise-area ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-lg-offset-1 col-md-6 col-xs-12">
                                <div class="fix video-post">
                                    <div class="player-blog" data-property="{videoURL:'https://youtu.be/U3YQMfV3dkQ',containment:'self',autoPlay:false, mute:false, startAt:1, opacity:1}">video Post</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12">
                                <div class="advertise-content pl-15">
                                    <h3 class="uppercase pb-16 mb-21 mt-26">Join Thousands of <br>
                                    Companies That Rely on Jobify</h3>
                                    <p class="pr-50">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.available, but the majority have suffered alteration in some form,</p>
                                    <a href="#" class="button large-button mt-9">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Advertise Area-->
                <!--Testimonial Area Start-->
                <div class="testimonial-area bg-2 text-center fix bg-opacity-blue-70 ptb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                                <div class="testimonial-carousel carousel-style-one">
                                    <div class="single-testimonial">
                                        <div class="testimonial-img mb-18">
                                            <img src="images/testimonial/profile.jpg" style="width: 100px;height: 100px;" alt="" />
                                        </div>
                                        <div class="testimonial-info">
                                            <span class="testimonial-name uppercase text-white block">Kevin Roberts</span>
                                            <span class="testimonial-title text-white block">CEO,Ajobko</span>
                                        </div>
                                        <div class="testimonial-text pt-46">
                                            <p class="text-white p-0">I have already heard back about the internship I applied through Job Finder, that's the fastest job reply I've ever gotten and it's so much better than waiting weeks to hear back.I have already heard back about the internship I applied through Job Finder, that's the fastest job reply</p>
                                        </div>
                                    </div>
                                </div> 
                            </div>  
                        </div>
                    </div>
                </div>
                <!--End of Testimonial Area-->
                <!--Start of Blog Area-->
                <div class="blog-area ptb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title text-center ">
                                    <h2 class="uppercase">Our Blog</h2>
                                    <div class="separator mt-35 mb-77">
                                        <span><img src="images/icons/1.png" alt=""></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="blog-carousel carousel-style-two">
                                <div class="col-xs-12">
                                    <div class="single-blog hover-effect">
                                        <div class="blog-image box-hover">
                                            <a href="#" class="block">
                                                <img src="images/blog/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-text">
                                            <div class="blog-date pt-12">
                                                <span class="text-large block text-white">25</span>
                                                <span class="uppercase block text-white">June</span>
                                            </div>
                                            <div class="blog-post-info">
                                                <span class="pl-10"><i class="zmdi zmdi-account pr-8"></i>amir Khan</span>
                                                <span class="pl-35"><i class="zmdi zmdi-favorite pr-8"></i>like</span>
                                                <span class="pl-15"><i class="zmdi zmdi-comments pr-8"></i>comments</span>
                                            </div>
                                            <h5 class="pt-28 mb-6"><a href="#">There are many variations of passages</a></h5>
                                            <p class="mb-21">It is a long established fact that a reader will be distracted by the readable content of a page when looking  its layout. The point of using Lorem Ipsum is tat it has a more-or-less normal distribution of letters</p>
                                            <a href="#" class="button large-button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-blog hover-effect">
                                        <div class="blog-image box-hover">
                                            <a href="#" class="block">
                                                <img src="images/blog/2.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-text">
                                            <div class="blog-date pt-12">
                                                <span class="text-large block text-white">25</span>
                                                <span class="uppercase block text-white">June</span>
                                            </div>
                                            <div class="blog-post-info">
                                                <span class="pl-10"><i class="zmdi zmdi-account pr-8"></i>amir Khan</span>
                                                <span class="pl-35"><i class="zmdi zmdi-favorite pr-8"></i>like</span>
                                                <span class="pl-15"><i class="zmdi zmdi-comments pr-8"></i>comments</span>
                                            </div>
                                            <h5 class="pt-28 mb-6"><a href="#">There are many variations of passages</a></h5>
                                            <p class="mb-21">It is a long established fact that a reader will be distracted by the readable content of a page when looking  its layout. The point of using Lorem Ipsum is tat it has a more-or-less normal distribution of letters</p>
                                            <a href="#" class="button large-button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-blog hover-effect">
                                        <div class="blog-image box-hover">
                                            <a href="#" class="block">
                                                <img src="images/blog/3.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-text">
                                            <div class="blog-date pt-12">
                                                <span class="text-large block text-white">25</span>
                                                <span class="uppercase block text-white">June</span>
                                            </div>
                                            <div class="blog-post-info">
                                                <span class="pl-10"><i class="zmdi zmdi-account pr-8"></i>amir Khan</span>
                                                <span class="pl-35"><i class="zmdi zmdi-favorite pr-8"></i>like</span>
                                                <span class="pl-15"><i class="zmdi zmdi-comments pr-8"></i>comments</span>
                                            </div>
                                            <h5 class="pt-28 mb-6"><a href="#">There are many variations of passages</a></h5>
                                            <p class="mb-21">It is a long established fact that a reader will be distracted by the readable content of a page when looking  its layout. The point of using Lorem Ipsum is tat it has a more-or-less normal distribution of letters</p>
                                            <a href="#" class="button large-button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-blog hover-effect">
                                        <div class="blog-image box-hover">
                                            <a href="#" class="block">
                                                <img src="images/blog/1.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="blog-text">
                                            <div class="blog-date pt-12">
                                                <span class="text-large block text-white">25</span>
                                                <span class="uppercase block text-white">June</span>
                                            </div>
                                            <div class="blog-post-info">
                                                <span class="pl-10"><i class="zmdi zmdi-account pr-8"></i>amir Khan</span>
                                                <span class="pl-35"><i class="zmdi zmdi-favorite pr-8"></i>like</span>
                                                <span class="pl-15"><i class="zmdi zmdi-comments pr-8"></i>comments</span>
                                            </div>
                                            <h5 class="pt-28 mb-6"><a href="#">There are many variations of passages</a></h5>
                                            <p class="mb-21">It is a long established fact that a reader will be distracted by the readable content of a page when looking  its layout. The point of using Lorem Ipsum is tat it has a more-or-less normal distribution of letters</p>
                                            <a href="#" class="button large-button">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Blog Area-->
                <!--Start of Social Link Area-->
                <div class="social-link-area ptb-40 dark-blue-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 fix col-xs-12 col-sm-6">
                                <div class="footer-logo pull-left">
                                    <a href="index.html" class="block"><img src="images/logo/footer-logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-md-6 fix col-xs-12 col-sm-6">
                                <div class="social-links pull-right">
                                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                                    <a href="#"><i class="zmdi zmdi-rss"></i></a>
                                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                                    <a href="#"><i class="zmdi zmdi-pinterest"></i></a>
                                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Social Link Area--> 

                <!--Start of Register Form-->
        <div id="quickview-register">
            <!-- Modal -->
            <div class="modal fade" id="register" tabindex="-1" role="dialog">
                <div class="modal-dialog register" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-pop-up-content ptb-60 pl-60 pr-60">
                                <div class="area-title text-center mb-43">
                                    <h2 class="pt-7 pb-7 pl-40 pr-40">Sign Up</h2>
                                </div>
                                <form method="post" action="#">
                                    <div class="form-box">
                                        <input type="text" name="fullname" placeholder="Full Name" class="mb-14">
                                        <input type="text" name="username" placeholder="User Name" class="mb-14">
                                        <input type="email" name="email" placeholder="Email" class="mb-14">
                                        <input type="password" name="pass" placeholder="Password" class="mb-14">
                                        <input type="password" name="re_pass" placeholder="Confirm Password">
                                    </div>
                                    <div class="fix ptb-30">
                                        <span class="remember">
                                            <input class="p-0 pull-left" type="checkbox">
                                            <span class="fix block">There are many variations of passages of Lorem Ipsum available</span> 
                                        </span>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="text-uppercase">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>  
                </div>
            </div>
        </div>
        <!--End of Register Form-->     
@endsection