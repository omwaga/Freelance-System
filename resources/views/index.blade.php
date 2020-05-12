@extends('layouts.master')
@section('content')
        <!-- Hero Area -->
        <section id="hero-area" class="hero-area">
            <!-- Slider -->
            <div class="slider-area">
                <!-- Single Slider -->
                <div class="single-slider" style="background-image:url('images/slider/slider-image1.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-12">
                                <!-- Slider Text -->
                                <div class="slider-text">
                                    <h1>Radix <span>Business</span> In-demand talent on demand.TM<span>!</span></h1>
                                    <p>Upwork expertly connects professionals and agencies to businesses seeking specialized talent.</p>
                                    <div class="button">
                                        <a href="portfolio-3-column.html" class="btn">Our Portfolio</a>
                                        <a href="https://www.youtube.com/watch?v=FZQPhrdKjow" class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
                                    </div>
                                </div>
                                <!--/ End Slider Text -->
                            </div>
                            <div class="col-lg-5 col-md-6 col-12">
                                <!-- Image Gallery -->
                                <div class="image-gallery">
                                    <div class="single-image">
                                        <img src="images/slider/gallery-image1.jpg" alt="#">
                                    </div>
                                    <div class="single-image two">
                                        <img src="images/slider/gallery-image2.jpg" alt="#">
                                    </div>
                                </div>
                                <!--/ End Image Gallery -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Single Slider -->
                <!-- Single Slider -->
                <div class="single-slider slider-right" style="background-image:url('images/slider/slider-image2.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12">
                                <!-- Image Gallery -->
                                <div class="image-gallery">
                                    <div class="single-image">
                                        <img src="images/slider/gallery-image1.jpg" alt="#">
                                    </div>
                                    <div class="single-image two">
                                        <img src="images/slider/gallery-image2.jpg" alt="#">
                                    </div>
                                </div>
                                <!--/ End Image Gallery -->
                            </div>
                            <div class="col-lg-7 col-md-6 col-12">
                                <!-- Slider Text -->
                                <div class="slider-text text-right">
                                    <h1>Radix <span>Business</span> In-demand talent on demand.TM<span>!</span></h1>
                                    <p>Upwork expertly connects professionals and agencies to businesses seeking specialized talent. </p>
                                    <div class="button">
                                        <a href="services.html" class="btn">Our Services</a>
                                        <a href="https://www.youtube.com/watch?v=FZQPhrdKjow" class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
                                    </div>
                                </div>
                                <!--/ End Slider Text -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Single Slider -->
                <!-- Single Slider -->
                <div class="single-slider slider-center" style="background-image:url('images/slider/slider-image1.jpg')">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1 col-12">
                                <!-- Slider Text -->
                                <div class="slider-text text-center">
                                    <h1>In-demand talent on demand.TM</h1>
                                    <p>Upwork expertly connects professionals and agencies to businesses seeking specialized talent.</p>
                                    <div class="button">
                                        <a href="about-us.html" class="btn">About Company</a>
                                        <a href="https://www.youtube.com/watch?v=FZQPhrdKjow" class="btn video video-popup mfp-fade"><i class="fa fa-play"></i>Play Now</a>
                                    </div>
                                </div>
                                <!--/ End Slider Text -->
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ End Single Slider -->
            </div>
            <!--/ End Slider -->
        </section>
        <!--/ End Hero Area -->

        <!-- Services -->
        <section id="services" class="services section">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp">
                        <div class="section-title">
                            <span class="title-bg">Services</span>
                            <h1>Find quality talent or agencies</h1>
                            <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="service-slider">
                            <!-- Single Service -->
                            @foreach($categories as $category)
                            <div class="single-service">
                                <i class="fa fa-magic"></i>
                                <h2><a href="service-single.html">{{$category->name}}</a></h2>
                                <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                            </div>
                            @endforeach
                            <!-- End Single Service -->
                        </div>
                        <div class="service-slider">
                            <!-- Single Service -->
                            <div class="single-service">
                                <i class="fa fa-magic"></i>
                                <h2><a href="service-single.html">Consulting</a></h2>
                                <p>welcome to our consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt</p>
                            </div>
                            <!-- End Single Service -->
                            <!-- Single Service -->
                            <div class="single-service">
                                <i class="fa fa-lightbulb-o"></i>
                                <h2><a href="service-single.html">Creative Idea</a></h2>
                                <p>Creative and erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                            </div>
                            <!-- End Single Service -->
                            <!-- Single Service -->
                            <div class="single-service">
                                <i class="fa fa-wordpress"></i>
                                <h2><a href="service-single.html">Development</a></h2>
                                <p>just fine erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                            </div>
                            <!-- End Single Service -->
                            <!-- Single Service -->
                            <div class="single-service">
                                <i class="fa fa-bullhorn "></i>
                                <h2><a href="service-single.html">Marketing</a></h2>
                                <p>Possible of erat, porta non porttitor non, dignissim et enim Aenean ac enim feugiat classical Latin</p>
                            </div>
                            <!-- End Single Service -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Services -->
        
        <!-- Fun Facts -->
        <section id="fun-facts" class="fun-facts section">
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-5 col-12 wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="text-content">
                            <div class="section-title">
                                <h1><span>Our achievements</span>With smooth animation numbering </h1>
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
                                        <h4>years of success</h4>
                                    </div>
                                </div>
                                <!--/ End Single Fact -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
                                <!-- Single Fact -->
                                <div class="single-fact">
                                    <div class="icon"><i class="fa fa-bullseye"></i></div>
                                    <div class="counter">
                                        <p><span class="count">88</span>K</p>
                                        <h4>Project Complete</h4>
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
                                        <h4>Total Earnings</h4>
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
                                        <h4>Winning Awards</h4>
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
                    <div class="col-lg-12 col-12">
                        <div class="row">   
                            <div class="col-lg-3 col-md-3 col-12 wow fadeIn" data-wow-delay="0.6s">
                                <!-- Single Fact -->
                                <div class="single-fact">
                                    <div class="icon"><i class="fa fa-clock-o"></i></div>
                                    <div class="counter">
                                        <p><span class="count">35</span></p>
                                        <h4>years of success</h4>
                                    </div>
                                </div>
                                <!--/ End Single Fact -->
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 wow fadeIn" data-wow-delay="0.8s">
                                <!-- Single Fact -->
                                <div class="single-fact">
                                    <div class="icon"><i class="fa fa-bullseye"></i></div>
                                    <div class="counter">
                                        <p><span class="count">88</span>K</p>
                                        <h4>Project Complete</h4>
                                    </div>
                                </div>
                                <!--/ End Single Fact -->
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 wow fadeIn" data-wow-delay="1s">
                                <!-- Single Fact -->
                                <div class="single-fact">
                                    <div class="icon"><i class="fa fa-dollar"></i></div>
                                    <div class="counter">
                                        <p><span class="count">10</span>M</p>
                                        <h4>Total Earnings</h4>
                                    </div>
                                </div>
                                <!--/ End Single Fact -->
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 wow fadeIn" data-wow-delay="1.2s">
                                <!-- Single Fact -->
                                <div class="single-fact">
                                    <div class="icon"><i class="fa fa-trophy"></i></div>
                                    <div class="counter">
                                        <p><span class="count">32</span></p>
                                        <h4>Winning Awards</h4>
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
                            <span class="title-bg">News</span>
                            <h1>How IT WORKS</h1>
                            <p>Sed lorem enim, faucibus at erat eget, laoreet tincidunt tortor. Ut sed mi nec ligula bibendum aliquam. Sed scelerisque maximus magna, a vehicula turpis Proin<p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="row blog-slider">
                            <div class="col-lg-4 col-12">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head">
                                        <img src="images/blogs/blog1.jpg" alt="#">
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
                            <div class="col-lg-4 col-12">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head">
                                        <img src="images/blogs/blog3.jpg" alt="#">
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
                            <div class="col-lg-4 col-12">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head">
                                        <img src="images/blogs/blog4.jpg" alt="#">
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
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Blogs Area -->
@endsection