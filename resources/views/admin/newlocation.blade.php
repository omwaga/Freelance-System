@extends('admin.layouts.master')
@section('content')

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					
					<div class="row">
						<div class="col-md-12">
								<div class="card-header">
									<div class="card-title">New Location</div>
								</div>
								@include('errors')
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="card">
								<form method="POST" action="/countries">
									@csrf
												<div class="row">
										<div class="col-md-12 col-lg-12">
											<div class="form-group">
												<label for="largeInput">Country Name:</label>
												<input type="text" class="form-control form-control" name="country" value="{{old('country')}}" placeholder="Category Name" required="">
											</div>
										</div>
										</div>
										
								<div class="card-action">
									<button class="btn btn-success">Submit</button>
								</div>
									</form>
										</div>
										</div>
										<div class="col-md-6 col-lg-8">
											<div class="card">
								<form method="POST" action="/cities">
									@csrf
												<div class="row">
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="defaultSelect">Country:</label>
												<select class="form-control"  name="country_id">
    <option selected>Select Country</option>
    @foreach($countries as $country)
    <option value="{{$country->id}}">{{ $country->country }}</option>
    @endforeach
  </select>
											</div>
										</div>
										<div class="col-md-6 col-lg-6">
											<div class="form-group">
												<label for="largeInput">City:</label>
												<input type="text" class="form-control form-control" name="city" value="{{old('city')}}" placeholder="Category Name" required="">
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
				</div>
			</div>
			</div>
	@endsection