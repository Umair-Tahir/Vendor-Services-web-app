@extends('front_end.master')

@section('title')
    Events Bash
@endsection


@section('content')

    <!-- /.header -->
    <!-- page-header -->
    <div class="page-header" style="background-image:url(http://127.0.0.1:8000/upload-images/{{$category->image}});background-size: cover;>
        <div class="container">
    <div class="row">
        <!-- page caption -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
            <div class="page-caption">
                <h1 class="page-title">{{$category->name}}</h1>
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
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Category</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">{{$category->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <!-- vendor-section -->
    <div class="content">
        <div class="container">
            <div class="row">
                @if(count($service)>0)
                    @foreach($service as $service)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="vendor-thumbnail" >
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img zoomimg">
                                    <!-- Vendor img -->
                                    <a href="{{action('Front_End\FeServiceController@show',[$service->title])}}"><img src="/upload-images/{{$service->cover_image}}" style="width:340px;height:240px;" alt="" class="img-fluid"></a>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="{{action('Front_End\FeServiceController@show',[$service->title])}}" class="title">{{$service->title}}</a></h2>
                                    <p class="vendor-address">{{$service->city->name}}</p>
                                </div>

                                <!-- /.Vendor Content -->
                            </div>
                        </div>
                    @endforeach

                @else
                    <div class="error-block">
                        <div class="error-content">
                            <h1 class="error-title" style="color: red;">Oops!</h1>
                            <h2 class="error-second-title">No Service Found</h2>
                            <p class="error-second-title">Will be available soon</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
