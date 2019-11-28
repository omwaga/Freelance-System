@extends('employer.layouts.master')
@section('content')
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">

                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>All Workrooms</h4>
                                </div>
                                <div class="card">
                                    <div class="recent-comment m-t-15">
                                        @foreach($jobs as $job)
                                    <div class="media">
                                                <h4 class="media-heading color-deafult">{{$job->title}}</h4>
                                            <div class="media-left">
                                                <a href="#"><img class="media-object" src="employer/images/avatar/3.jpg" alt="..."></a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading color-deafult">03/04/2014</h4>
                                                <h4 class="media-heading color-danger">Mr. Saifun</h4>
                                                <p>{!!$job->description!!}</p>
                                                <div class="comment-date">Yesterday</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>This dashboard was generated on <span id="date-time"></span> <a href="#" class="page-refresh">Refresh Dashboard</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                                    
                </section>
            </div>
        </div>
    </div>
@endsection