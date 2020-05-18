@extends('layouts.master')

@section('content')
<div class="account-area pt-70 mb-120">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 justify-content-center">
        
        <!-- Fun Facts -->
        <section id="fun-facts" class="fun-facts section">
            <div class="container"> 
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="text-content" align="center">
                            <div class="section-title">
                                <h1><span>Our achievements</span>With smooth animation numbering </h1>
                                <p>Pellentesque vitae gravida nulla. </p>
                            </div>
                        </div>
                        <div class="row">   
                            <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.6s">
                                <!-- Single Fact -->
                                <div class="single-fact" align="center">
                                    <div class="icon"><i class="fa fa-users"></i></div>
                                       <a href="/register" class="h5">Register as Freelancer</a>
                                </div>
                                <!--/ End Single Fact -->
                            </div>
                            <div class="col-lg-6 col-md-6 col-12 wow fadeIn" data-wow-delay="0.8s">
                                <!-- Single Fact -->
                                <div class="single-fact">
                                    <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                                       <a href="{{route('register-employer')}}" class="h5">Register as Employer</a>
                                </div>
                                <!--/ End Single Fact -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ End Fun Facts -->
        </div>
    </div>
</div>
</div>
@endsection
