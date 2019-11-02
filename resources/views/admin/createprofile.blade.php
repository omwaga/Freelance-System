@extends('admin.layouts.master')
@section('content')

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Forms</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<form method="POST" action="/abouts">
									@csrf
								<div class="card-header">
									<div class="card-title">Website Details</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="largeInput">Website Name:</label>
												<input type="text" class="form-control form-control" name="websitename" value="{{old('websitename')}}" placeholder="Website Name">
											</div>
											<div class="form-group">
												<label for="email2">Email Address:</label>
												<input type="email" class="form-control" name="email" value="{{old('email')}}" placeholder="Enter Email">
												<small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small>
											</div>
											<div class="form-group">
												<label for="largeInput">Phone Number:</label>
												<input type="text" class="form-control form-control" name="phone" value="{{old('phone')}}" placeholder="Default Input">
											</div>
											<div class="form-group">
												<label for="exampleFormControlFile1">Logo:</label>
												<input type="file" class="form-control-file" value="{{old('logo')}}" name="logo">
											</div>
											<div class="form-group">
												<label for="largeInput">LinkedIn:</label>
												<input type="text" class="form-control form-control" name="linkedin" value="{{old('linkedin')}}" placeholder="Default Input">
											</div>
											<div class="form-group">
												<label for="largeInput">Facebook Page:</label>
												<input type="text" class="form-control form-control" name="facebook" value="{{old('facebook')}}" placeholder="Default Input">
											</div>
											<div class="form-group">
												<label for="largeInput">Instagram:</label>
												<input type="text" class="form-control form-control" name="instagram" value="{{old('instagram')}}" placeholder="Default Input">
											</div>
											<div class="form-group">
												<label for="largeInput">Twitter:</label>
												<input type="text" class="form-control form-control" name="twitter" value="{{old('twitter')}}" placeholder="Default Input">
											</div>
										</div>
										<div class="col-md-6 col-lg-8">
											<div class="form-group">
												<label for="comment">About Description:</label>
												<textarea class="form-control ckeditor" name="aboutdescription" rows="15">{{old('aboutdescription')}}
												</textarea>
											</div>
											<div class="form-group">
												<label for="largeInput">Banner Header 1:</label>
												<input type="text" class="form-control form-control" name="banner1" value="{{old('banner1')}}" placeholder="Default Input">
											</div>
											<div class="form-group">
												<label for="largeInput">Banner Header 2:</label>
												<input type="text" class="form-control form-control" name="banner2" value="{{old('banner2')}}" placeholder="Default Input">
											</div>
											<div class="form-group">
												<label for="largeInput">Banner Details 1:</label>
												<input type="text" class="form-control form-control" name="bannerdetails1" value="{{old('bannerdetails1')}}" placeholder="Default Input">
											</div>
											<div class="form-group">
												<label for="largeInput">Banner Details 2:</label>
												<input type="text" class="form-control form-control" name="bannerdetails2" value="{{old('bannerdetails2')}}" placeholder="Default Input">
											</div>
										</div>
									</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success">Submit</button>
									<button class="btn btn-danger">Cancel</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
	@endsection