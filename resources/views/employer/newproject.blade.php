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
                                    <h4>New Job Post</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form method="POST" action="/projects">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Job Title:</label>
                                                        <input type="text" name="title" class="form-control" placeholder="Project Title" required="" value="{{old('title')}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Location:</label>
                                                        <select name="location" class="form-control">
                                                            <option>Not Specified</option>
                                                            <option>Beginner</option>
                                                            <option>Intermediate</option>
                                                            <option>Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-6">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                <label>Get quotes until:</label>
                                                <input type="text" name="quotes_until" class="form-control calendar bg-ash" placeholder="dd/mm/yyyy" id="text-calendar">
                                                <span class="ti-calendar form-control-feedback booking-system-feedback m-t-30"></span>
                                            </div>
                                        </div>
                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Expertise Level:</label>
                                                        <select name="level_required" class="form-control">
															<option>Not Specified</option>
															<option>Beginner</option>
															<option>Intermediate</option>
															<option>Expert</option>
														</select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Job Category:</label>
                                                        <select name="category_id" class="form-control">
                                                        	<option>All Categories</option>
                                                        	@foreach($categories as $category)
															<option value="{{$category->id}}">{{$category->name}}</option>
															@endforeach
                                                        	<option>Others</option>
														</select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Job Description:</label>
                                                        <textarea name="description" class="form-control" rows="3" placeholder="Project Description" required="">{{old('description')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Payment Terms</h4>
                                    <span class="help-block">
                                                                <small>Select one payment term</small>
                                                            </span>
                                </div>
                                <div class="card-body">
                                    <div class="custom-tab">

                                    <ul class="nav nav-tabs">
                                        <li class="active"><a data-toggle="tab" href="#home">Fixed Price</a></li>
                                        <li><a data-toggle="tab" href="#menu1">Hourly</a></li>
                                        <li><a data-toggle="tab" href="#menu2">Not Sure</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade in active">
                                            <div class="form-group">
                                                <div class="form-check">
                                                        <label>
                                                    <input name="cost_range" type="radio" checked> Under Ksh 10000
                                                </label><br>
                                                <label>
                                                    <input name="cost_range" type="radio"> Ksh 10000 to Ksh 25000
                                                </label><br>
                                                <label>
                                                    <input name="cost_range" type="radio"> Ksh 25000 to ksh 50000
                                                </label><br>
                                                <label>
                                                    <input name="cost_range" type="radio"> ksh 50000 to ksh 75000
                                                </label><br>
                                                <label>
                                                    <input name="cost_range" type="radio"> ksh 75000 to Ksh 100000
                                                </label><br>
                                                <label>
                                                    <input name="cost_range" type="radio"> Ksh 100000 and above
                                                </label><br>
                                            </div>
                                                    </div>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Job Duration</label>
                                                        <select name="duration" class="form-control">
                                                            <option>Select Duration</option>
                                                            <option>Less than 1 week</option>
                                                            <option>Less than 1 month</option>
                                                            <option>1 to 3 months</option>
                                                            <option>3 to 6 months</option>
                                                            <option>More than 6 months</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Hours Per Week</label>
                                                        <select name="hours" class="form-control">
                                                            <option>Select hours per week</option>
                                                            <option>1 hour to 10 hours</option>
                                                            <option>10 hours to 40 hours</option>
                                                            <option>40 hours plus</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                        <label>Rate per Hour</label>
                                                    <div class="form-group">
                                                        <div class="col-lg-6">
                                                        <div class="col-sm-10">
                                                            <input name="minimum" class="form-control" type="text" placeholder="Amount in Ksh">
                                                            <span class="help-block">
                                                                <small>Minimum Amount</small>
                                                            </span>
                                                        </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                        <div class="col-sm-10">
                                                            <input name="maximum" class="form-control" type="text" placeholder="Amount in Ksh">
                                                            <span class="help-block">
                                                                <small>Maximum Amount</small>
                                                            </span>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu2" class="tab-pane fade">
                                            <h3>Menu 2</h3>
                                            <p>Some content in menu 2.</p>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            </div>
                        </div>
                                                <div class="col-lg-12">
                                                <button type="submit" class="btn btn-success m-b-10 m-l-5">Submit</button>
                                               </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection