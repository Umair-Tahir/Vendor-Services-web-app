@extends('admin_panel.inc.master')

<head>
    @section('title')
        Admin Home
    @endsection
</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin</li>
        </ol>
    </nav>
@endsection

@section('content')
    <div class="container animated fadeIn delay 5s">
        <div class="row" style="margin-top: 30px;margin-left: 20px;margin-right: 20px;">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib">
                                <img src="{{url('/images/vendor1.png')}}" style="height: 100px;">
                            </div>
                        <!--   {{$ven=count_ven()}} nav() function is helper function-->
                            <div class="stat-content dib">
                                <div class="stat-text">Total Vendors</div>
                                <div class="stat-digit">{{$ven}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib">
                                <img src="{{url('/images/service1.png')}}" style="height: 100px;">
                            </div>
                            <div class="stat-content dib">
                           <!--   {{$ser=count_ser()}} nav() function is helper function-->
                                <div class="stat-text">Total Services</div>
                                <div class="stat-digit">{{$ser}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--   {{$cat=count_cat()}} nav() function is helper function-->
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib">
                                <img src="{{url('images/category1.png')}}" style="height: 100px;">
                            </div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Categories</div>
                                <div class="stat-digit">{{$cat}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
