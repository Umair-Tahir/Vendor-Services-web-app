@extends('vendor_dashboard.vd_master')

@section('title')
    - Dashboard
@endsection

@section('content')

    <div class="dashboard-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-10 col-md-9 col-sm-12 col-12">
                    <div class="dashboard-page-header">

                        <h3 class="dashboard-page-title">Hi, {{Auth::user()->username}}</h3>
                        <p class="d-block">Here’s what’s happening with your business today.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary">
                        <div class="card-body">
                            <div class="float-left">
                                <div class="summary-count">{{$count}}</div>
                                <p>Total Services</p>
                            </div>
                            <div class="summary-icon"><i class="icon-051-wedding-arch"></i></div>

                        </div>
                        <div class="card-footer text-center"><a href="{{action('Vendor_Dashboard\VdserviceController@index',$user_id=Auth::user()->id)}}">View All</a></div>

                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="card card-summary">
                        <div class="card-body">
                            <div class="float-left">
                                <div class="summary-count">{{$count1}}</div>
                                <p>Number of Blogs</p>

                            </div>
                            <div class="summary-icon"><i class="icon-004-chat"></i></div>
                        </div>
                        <div class="card-footer text-center"><a href="{{action('Vendor_Dashboard\VdBlogController@index')}}">View All</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection
