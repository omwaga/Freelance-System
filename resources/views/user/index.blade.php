@extends('layouts.master')
@section('content')
<!-- Fun Facts -->
<section id="fun-facts" class="fun-facts section">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-delay="0.5s">
                <div class="text-content">
                    <div class="section-title">
                        <h1><span>Good Morning,</span>{{auth()->user()->name}} </h1>
                        <p>Pellentesque vitae gravida nulla. Maecenas molestie ligula quis urna viverra venenatis. Donec at ex metus. Suspendisse ac est et magna viverra eleifend. Etiam varius auctor est eu eleifend.</p>
                        <a href="contact.html" class="btn primary">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">   
                    <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
                        <!-- Single Fact -->
                        <div class="single-fact">
                            <div class="icon"><i class="fa fa-clock-o"></i></div>
                            <div class="counter">
                                <p><span class="count">35</span></p>
                                <h4>Invoices Due</h4>
                            </div>
                        </div>
                        <!--/ End Single Fact -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
                        <!-- Single Fact -->
                        <div class="single-fact">
                            <div class="icon"><i class="fa fa-bullseye"></i></div>
                            <div class="counter">
                                <p><span class="count">8</span>K</p>
                                <h4>Works IN-Progress</h4>
                            </div>
                        </div>
                        <!--/ End Single Fact -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="1s">
                        <!-- Single Fact -->
                        <div class="single-fact">
                            <div class="icon"><i class="fa fa-dollar"></i></div>
                            <div class="counter">
                                <p><span class="count">10</span>M</p>
                                <h4>Open Projects</h4>
                            </div>
                        </div>
                        <!--/ End Single Fact -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="1.2s">
                        <!-- Single Fact -->
                        <div class="single-fact">
                            <div class="icon"><i class="fa fa-trophy"></i></div>
                            <div class="counter">
                                <p><span class="count">32</span></p>
                                <h4>Completed Projects</h4>
                            </div>
                        </div>
                        <!--/ End Single Fact -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Fun Facts -->

<!-- Fun Facts -->
<section id="fun-facts" class="fun-facts section">
    <div class="container"> 
        <div class="row">
            <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.5s">
                <div class="text-content">
                    <div class="section-title">
                        <h1><span>OPEN PROJECTS,</span>0 </h1>
                        <p>You have no open projects
                        Post a project for free and let the best freelancers come to you</p>
                        <a href="contact.html" class="btn primary">LET'S GO</a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.5s">
                <div class="text-content">
                    <div class="section-title">
                        <h1><span>WORKSTREAMS IN-PROGRESS,</span>0 </h1>
                        <p>No in-progress projects at this moment!
                        Have you searched our freelancers?</p>
                        <a href="contact.html" class="btn primary">FIND FREELANCERS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Fun Facts -->

<!-- Call To Action -->
<section class="call-to-action section" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 wow fadeInUp">
                <div class="call-to-main">
                    <h2>We have 35+ Years of experiences for creating creative website project.</h2>
                    <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac enim feugiat, facilisis arcu vehicula, consequat sem. Cras et vulputate nisi, ac dignissim mi. Etiam laoreet</p>
                    <a href="contact.html" class="btn">Buy This Theme</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ End Call To Action -->

<!-- Blogs Area -->
<section class="blogs-main section">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp">
                <div class="section-title">
                    <span class="title-bg">Projects</span>
                    <h1>TOP SALES OFFERS</h1>
                    <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row blog-slider">
                        <div class="col-lg-3 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="{{asset('images/blogs/blog1.jpg')}}" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
                                            <span><i class="fa fa-calendar"></i>03 May, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">333k</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-lg-3 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="{{asset('images/blogs/blog1.jpg')}}" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Marketing</a></span>
                                            <span><i class="fa fa-calendar"></i>03 May, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">333k</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-lg-3 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="{{asset('images/blogs/blog3.jpg')}}" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">10 ways to improve your startup Business</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Brand</a></span>
                                            <span><i class="fa fa-calendar"></i>15 April, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">10m</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                        <div class="col-lg-3 col-12">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-head">
                                    <img src="{{asset('images/blogs/blog4.jpg')}}" alt="#">
                                </div>
                                <div class="blog-bottom">
                                    <div class="blog-inner">
                                        <h4><a href="blog-single.html">Recognizing the need is the primary</a></h4>
                                        <p>Maecenas sapien erat, porta non porttitor non, dignissim et enim. Aenean ac tincidunt tortor sedelon bond</p>
                                        <div class="meta">
                                            <span><i class="fa fa-bolt"></i><a href="#">Online</a></span>
                                            <span><i class="fa fa-calendar"></i>25 March, 2018</span>
                                            <span><i class="fa fa-eye"></i><a href="#">38k</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Blog -->
                        </div>
                    </div>
                    <div align="center"><br>
                        <a href="contact.html" class="btn primary">BROWSE ALL PROJECTS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Blogs Area -->
    @endsection