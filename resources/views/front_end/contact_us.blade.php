@extends('front_end.master')

@section('title')
    Home
@endsection

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">About us</h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">About us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <!-- about-descriptions -->
    <div class="space-medium pb-0">
        <div class="container">
            <div class="row">
                <!--  about-details  -->
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 mb60">
                    <div class="about-descriptions text-center">
                        <div class="circle-icon rounded-circle bg-default mb30">
                            <i class="icon-051-balloons"></i>
                        </div>
                        <h2>A Vision Beyond Your Dreams</h2>
                        <p class="lead">Events bash aims to provide a platform where users can experience superior event services with just a click. It enables different business vendors to publish their services hence enhancing their business to market.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 pl-xl-0 pr-xl-0">
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body metrics">
                                <h1 class="metrics-title">Founded in</h1>
                                <h2 class="metrics-subtitle">2020</h2>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body metrics">
                                <h1 class="metrics-title ">City</h1>
                                <h2 class="metrics-subtitle ">Lahore</h2>
                            </div>
                        </div>
                        <div class="card ">
                            <div class="card-body metrics">
                                <h1 class="metrics-title">Our Team</h1>
                                <h2 class="metrics-subtitle">3+</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-medium">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                    <div class="section-title">
                        <h2>What we do</h2>
                        <p>Events bash aims to provide a platform where users can experience superior event services with just a click.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                    <div class="feature-block">
                        <div class="circle-icon bg-info rounded-circle mb30">
                            <i class="icon-038-bouquet"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Hire the right vendor</h3>
                            <p>It enables different business vendors to publish their services hence enhancing their business to market. </p>
                            <a href="{{action('Front_End\FeCategoryController@index')}}" class="btn btn-outline-default">find now</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                    <div class="feature-block">
                        <div class="circle-icon bg-danger rounded-circle mb30">
                            <i class="icon-013-calendar"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Event Planning</h3>
                            <p>Take a deep breath, de-stress and get comfy while we take on the responsibility of planning and executing your event.</p>
                            <a href="{{action('Front_End\FeServiceController@index')}}" class="btn btn-outline-default">Star Your Planning</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center">
                    <div class="feature-block">
                        <div class="circle-icon bg-secondary rounded-circle mb30">
                            <i class="icon-021-love-1"></i>
                        </div>
                        <div class="feature-content">
                            <h3>Event Tips & advice</h3>
                            <p>Feel free to get in touch with us and We promise a lot of happiness, fun and some REAL entertainment.</p>
                            <a href="{{action('Front_End\FeCategoryController@index')}}" class="btn btn-outline-default">read our articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.feature-section -->



@endsection
