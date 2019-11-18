@extends('employer.layouts.master')
@section('content')
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>New Project</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>New Project</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form method="POST" action="/projects">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Title:</label>
                                                        <input type="text" name="title" class="form-control" placeholder="Project Title" required="" value="{{old('title')}}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Location:</label>
                                                        <select name="level_required" class="form-control">
                                                            <option>Not Specified</option>
                                                            <option>Beginner</option>
                                                            <option>Intermediate</option>
                                                            <option>Expert</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Get Quotes Untill:</label>
                                                        <select name="level_required" class="form-control">
                                                            <option>Not Specified</option>
                                                            <option>Beginner</option>
                                                            <option>Intermediate</option>
                                                            <option>Expert</option>
                                                        </select>
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
                                                        <label>Project Category:</label>
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
                                                        <label>Description:</label>
                                                        <textarea name="description" class="form-control" rows="3" placeholder="Project Description" required="">{{old('description')}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active bg-info" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Fixed Price</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-info" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Hourly</a>
  </li>
  <li class="nav-item">
    <a class="nav-link bg-info" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Not Sure</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="row">
    <div class="col-lg-6">
      <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Under $250
                                                </label><br>
                                                <label>
                                                    <input type="checkbox"> Under $250
                                                </label><br>
                                                <label>
                                                    <input type="checkbox"> Under $250
                                                </label>
                                            </div>
                                            </div>
                                            <div class="col-lg-6">
      <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Under $250
                                                </label><br>
                                                <label>
                                                    <input type="checkbox"> Under $250
                                                </label><br>
                                                <label>
                                                    <input type="checkbox"> Under $250
                                                </label>
                                            </div>
                                            </div>
                                            </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
       <div class="row">
    <div class="col-lg-6">
      <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Under $250
                                                </label>
                                            </div>
                                            </div>
                                            <div class="col-lg-6">
      <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Under $250
                                                </label>
                                            </div>
                                            </div>
                                            </div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Not Sure
                                                </label>
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