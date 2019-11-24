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
                                    <h4>New Project</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="order-list-item">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Customer</th>
                                                <th>Order ID</th>
                                                <th>Menu Name</th>
                                                <th>Price</th>
                                                <th>Rating</th>
                                                <th>Quantity</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Saiful Islam</td>
                                                <td>#8546677</td>
                                                <td>Hot Dog</td>
                                                <td><button type="button" class="btn btn-success btn-rounded">$29</button></td>
                                                <td>
                                                    <div class="full-stars-only"></div>
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-rounded">100</button></td>
                                                <td><button type="button" class="btn btn-success btn-rounded">Paid</button></td>
                                            </tr>

                                            <tr>
                                                <td>Jannatul Mariam</td>
                                                <td>#8546678</td>
                                                <td>Chicken Biryani</td>
                                                <td><button type="button" class="btn btn-success btn-rounded">$30</button></td>
                                                <td>
                                                    <div class="half-full-stars"></div>
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-rounded">105</button></td>
                                                <td><button type="button" class="btn btn-warning btn-rounded">Pending</button></td>
                                            </tr>

                                            <tr>
                                                <td>Anik Hasan</td>
                                                <td>#8546679</td>
                                                <td>Chicken Fried Rice</td>
                                                <td><button type="button" class="btn btn-success btn-rounded">$31</button></td>
                                                <td>
                                                    <div class="full-stars-only"></div>
                                                </td>
                                                <td><button type="button" class="btn btn-primary btn-rounded">110</button></td>
                                                <td><button type="button" class="btn btn-primary btn-rounded">Failed</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->
                </div>
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