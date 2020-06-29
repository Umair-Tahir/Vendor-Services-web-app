@extends('front_end.master')

@section('title')
    Events Bash
@endsection


@section('styles')
    <link rel="stylesheet" href="{{asset("css/fe/magnific-popup.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/jquery.rateyo.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/jquery-ui.css")}}" >
@endsection


@section('content')


    <!-- page-header -->
    <dir class="list-single-second" style="border-bottom: 0px;">
        <dir class="container">
            <div class="list-single-carousel">
                <div class="owl-carousel owl-theme owl-slider">
                    @foreach(json_decode($service->gallery_image, true) as $image)
                        <div class="item">
                            <img src="/upload-images/{{$image}}" style="width:1900px;height:408px;" alt="">
                        </div>
                    @endforeach
                </div>
            </div>
        </dir>
    </dir>
    <div class="list-single-second">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                        <div class="vendor-head text-left">
                            <h2 class="mb10">{{$service->title}}</h2>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                        <div class="vendor-head text-xl-right">
                            <a href="{{action('Front_End\FeVendorController@show_vendor',[$service->vendor_id])}}" class="btn btn-primary">View Vendor</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="vendor-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <!--vendor-details -->

                    <div class="">
                        <div class="card border card-shadow-none">
                            <h3 class="card-header bg-white">About the Service</h3>
                            <div class="card-body">
                                <!--/.vendor-details -->
                                <!--vendor-description -->
                                <p>{{$service->description}}</p>
                                <div class="venue-highlights">
                                    <div class=" table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th scope="col">Service Highlights</th>
                                                <th scope="col"></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Service Vendor</td>
                                                <td class="venue-highlight-meta"><b>{{$service->vendor->user->username}}</b></td>
                                            </tr>
                                            <tr>
                                                <td>Service City</td>
                                                <td class="venue-highlight-meta"><b>{{$service->city->name}}</b></td>
                                            </tr>
                                            <tr>
                                                <td>Service Category</td>
                                                <td class="venue-highlight-meta"><b>{{$service->category->name}}</b></td>
                                            </tr>
                                            <tr>
                                                <td>Guest Minimum</td>
                                                <td class="venue-highlight-meta"><b>120</b></td>
                                            </tr>
                                            <tr>
                                                <td>Price Start</td>
                                                <td class="venue-highlight-meta"><b>$150</b></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.venue-highlights -->
                            </div>
                        </div>
                        <!--vendor-description -->


                    </div>

                    <!-- location -->
                    <div class="card border card-shadow-none">
                        <div class="card-header bg-white mb0">
                            <h3 class="mb0">Location - Map</h3>
                        </div>
                        <div class="card-body">
                            <div id="map"></div>
                        </div>
                    </div>
                </div>
                <!-- /.location -->
                <!-- list-sidebar -->
                <div class="col-md-5">
                    <!-- vendor-address -->
                    <div class="vendor-owner-profile mb30">
                        <div class="vendor-owner-profile-head">
                            <div class="vendor-owner-profile-img"><img src="./images/admin-pic.jpg" class="rounded-circle" alt=""></div>
                            <h4 class="vendor-owner-name mb0">Vendor Business Info.</h4>
                        </div>
                        <div class="vendor-owner-profile-content">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><span class="mr-2 text-default"><i class="fas fa-fw fa-user"></i></span>Vendor Name<p align="right"><b>{{$service->vendor->name}}</b></p></li>
                                <li class="list-group-item"><span class="mr-2  text-default"><i class="fas fa-fw fa-envelope"></i></span>Email&nbsp&nbsp&nbsp<p align="right"><b>{{$service->vendor->user->email}}</b></p></li>
                                <li class="list-group-item"><span class="mr-2  text-default"><i class="fas fa-fw fa-phone"></i></span>Phone No.<p align="right"><b>{{$service->vendor->country_code}}-{{$service->vendor->company_code}}-{{$service->vendor->phone_number}}</b></p></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.vendor-address -->
                </div>
            </div>
            <!-- /.list-sidebar -->
        </div>
    </div>
    <!-- vendor-thumbnail section -->
    <div class="space-small">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2>Similar Services</h2>    <!-- Those Vendors will be listed which have the same city and category -->
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="venue-thumbnail-carousel">
                        <div class="owl-carousel owl-theme owl-venue-thumb">
                            @if(count($s_services)>0)
                                @foreach($s_services as $s_service)
                                    <div class="item">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="vendor-thumbnail">
                                                <!-- Vendor thumbnail -->
                                                <div class="vendor-img zoomimg">
                                                    <!-- Vendor img -->
                                                    <a href="{{action('Front_End\FeServiceController@show',[$s_service->title])}}"><img src="/upload-images/{{$s_service->cover_image}}" style="width:600px;height:150px;" alt=""  class="img-fluid"></a>
                                                </div>
                                                <!-- /.Vendor img -->
                                                <div class="vendor-content">
                                                    <!-- Vendor Content -->
                                                    <h2 class="vendor-title"><a href="{{action('Front_End\FeServiceController@show',[$s_service->title])}}" class="title">{{$s_service->title}}</a></h2>
                                                    <p class="vendor-address">{{$s_service->city->namee}}</p>
                                                </div>
                                                <!-- /.Vendor Content -->
                                                <div class="vendor-meta">
                                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-guest" style="font-size: 15px;">
                                    By
                                </span>
                                                        <span class="vendor-text" style="font-size: 18px;">{{$service->vendor->user->username}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.Vendor thumbnail -->
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. venue-thumbnail-section-->
        </div>
    </div>

@endsection

@section('scripts')
    <script src="{{asset('js/fe/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('js/fe/jquery-ui.js')}}"></script>


    <script>
        function initMap() {
            var uluru = {
                lat: 31.582045,
                lng: 74.329376
            };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 17,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map,
                icon: 'images/map-pin.png'
            });
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAck8OvwoNdtjtj6XsJE13Tw_WwLJWcN8A&callback=initMap">
    </script>
@endsection
