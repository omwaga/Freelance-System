@extends('layouts.master')
@section('content')
<!--Start of Account Area-->
                <div class="account-area pt-70 mb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form action="{{route('regemployer')}}" method="POST">
                                	@csrf
                                        <div class="login-form mt-36">
                                            <div class="single-info pb-14 fix">
                                                <div class="form-box col-4 fix">
                                                <label for="name" class="pull-left m-0 lg-text">User Name:</label>
                                                    <input type="text" id="name" name="name" placeholder="Please enter your name">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14 fix">
                                                <div class="form-box col-4 fix">
                                                <label for="email" class="pull-left m-0 lg-text">Email address:</label>
                                                    <input type="text" id="email" name="email" placeholder="Please enter your email">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14 fix">
                                                <div class="form-box col-4 fix">
                                                <label for="password" class="pull-left m-0 lg-text">Password:</label>
                                                    <input type="password" id="password" name="password" placeholder="Please enter your password">
                                                </div>
                                            </div>
                                            <div class="single-info mb-14 fix">
                                                <div class="form-box col-4 fix">
                                                <label for="r_password" class="pull-left m-0 lg-text">Retype password:</label>
                                                    <input type="password" id="r_password" name="confirm_password" placeholder="Please enter your password">
                                                </div>
                                            </div>
                                        </div>
                                        <button class="button button-style-two medium mt-15">Continue</button>
                                </form>    
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Account Area--><!--Start of Login Form-->    
 @endsection