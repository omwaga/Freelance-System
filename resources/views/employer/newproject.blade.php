@extends('employer.layouts.master')
@section('content')
<div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
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
                                                        <label>Description:</label>
                                                        <textarea name="description" class="form-control" rows="3" placeholder="Project Description" required="">{{old('description')}}</textarea>
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
                                                <button type="submit" class="btn btn-success m-b-10 m-l-5">Submit</button>
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