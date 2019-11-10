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
								<form method="POST" action="/categories">
									@csrf
								<div class="card-header">
									<div class="card-title">New Category</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="largeInput">Category Name:</label>
												<input type="text" class="form-control form-control" name="name" value="{{old('name')}}" placeholder="Category Name" required="">
											</div>
										</div>
										<div class="col-md-6 col-lg-8">
											<div class="form-group">
												<label for="comment">About Description:</label>
												<textarea class="form-control ckeditor" name="description" rows="10" required="">{{old('description')}}
												</textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="card-action">
									<button class="btn btn-success">Submit</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
	@endsection