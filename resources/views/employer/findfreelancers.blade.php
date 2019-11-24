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
                                    <h4>Student Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="user-profile m-t-15">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="user-photo m-b-30">
                                                    <img class="img-responsive" src="employer/images/user-profile.jpg" alt="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="user-profile-name dib">Saiful Islam Details</div>
                                                <div class="custom-tab user-profile-tab">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active" id="1">
                                                            <div class="contact-information">
                                                                <div class="phone-content">
                                                                    <span class="contact-title">Name:</span>
                                                                    <span class="phone-number">MD.Saiful Islam</span>
                                                                </div>
                                                                <div class="website-content">
                                                                    <span class="contact-title">Class:</span>
                                                                    <span class="contact-website">6</span>
                                                                </div>
                                                                <div class="skype-content">
                                                                    <span class="contact-title">Section:</span>
                                                                    <span class="contact-skype">A</span>
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