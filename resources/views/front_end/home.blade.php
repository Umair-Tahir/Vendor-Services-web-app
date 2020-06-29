@extends('front_end.master')

@section('title')
    Home
@endsection


@section('styles')
    <style>
        #searchsec{
            animation-duration: 1.6s;
            animation-delay: 0s;
            animation-iteration-count: 1;
        }

        #secondsec {
            animation-duration: 2s;
            animation-delay: 1s;
            animation-iteration-count: 8;
        }
    </style>
@endsection
@section('content')
    <div class="bg-white space-small">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default animated pulse" id="secondsec"><i class="icon-051-wedding-arch"></i></div>
                    <h3><strong>100+</strong> Venues & Other Services</h3>
                    <p>We provide pretty decent venues for accommodating the guests and providing other valueable event related services.</p>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20">
                    <div class="icon-3x mb30 text-default animated bounce" id="secondsec"><i class="icon-051-love-birds"></i></div>
                    <h3><strong>100+</strong> Successful Events</h3>
                    <p>We have made possible in creating some successful events as well as managing them.</p>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 mb20 ">
                    <div class="icon-3x mb30 text-default animated swing" id="secondsec"><i class="icon-017-location"></i></div>
                    <h3><strong>30+ </strong> Cities Available</h3>
                    <p>We are providing our services to some small and largest cities of Pakistan.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="space-medium pdb0">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h2 class="mb10">Choose Service</h2>
                        <p>Find the most famous and exotic services provided by some of the most fashioned providers. Happy hunting!</p>
                    </div>
                </div>
            </div>
            <div class="venue-thumbnail-carousel">
                <div class="owl-carousel owl-theme owl-venue-thumb">
                    @foreach($services as $service)
                        <div class="item">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="vendor-thumbnail">
                                    <div class="vendor-img zoomimg">
                                        <a href="{{action('Front_End\FeServiceController@show',[$service->title])}}"><img src="upload-images/{{$service->cover_image}}" style="width:349px;height:250px;" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="vendor-content">
                                        <h2 class="vendor-title"><a href="{{action('Front_End\FeServiceController@show',[$service->title])}}">{{$service->title}}</a></h2>
                                        <p class="vendor-address">{{$service->city->name}}</p>
                                    </div>

                                    <div class="vendor-meta">
                                        <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-guest" style="font-size: 15px;">
                                        By
                                        </span>
                                            <span class="vendor-text" style="font-size: 18px;">{{$service->vendor->user->username}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <div class="space-small">
        <div class="space-small bg-white">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title text-center">
                            <h2 class="mb10">Popular Locations</h2>
                            <p>Some of the popular location we are providing in our services.</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($cities as $city)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="vendor-categories-block zoomimg">
                                <div class="vendor-categories-img"><a href="{{action('Front_End\FeCategoryController@edit',[$city->name])}}"><img style="width:349px;height:250px;" src="/upload-images/{{$city->image}}" alt="" class="img-fluid"></a></div>
                                <div class="vendor-categories-overlay">
                                    <div class="vendor-categories-text">
                                        <h4 class="mb0"><a href="{{action('Front_End\FeCategoryController@edit',[$city->name])}}" class="vendor-categories-title">{{$city->name}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


        <div class="space-small">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb40">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="section-title text-center">
                            <h2 class="mb10">How it Works</h2>
                            <p>Simple and easy steps to get with planning your event.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="feature feature-icon-block">
                            <div class="feature-icon"> <i class="icon icon-004-chat icon-3x icon-default"></i></div>
                            <div class="feature-content">
                                <h3 class="mb-3">Search Service</h3>
                                <p>Search for a specific service within an area and have a detail analysis of the choosen service. </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="feature feature-icon-block">
                            <div class="feature-icon"><i class="icon icon-017-location icon-3x icon-default"></i></div>
                            <div class="feature-content">
                                <h3 class="mb-3">Service </h3>
                                <p>Users have varity of permission they can view the service requirements. The user are given premission to have a look at that service vendor.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="feature feature-icon-block">
                            <div class="feature-icon"><i class="icon icon-025-groom icon-3x icon-default"></i></div>
                            <div class="feature-content">
                                <h3 class="mb-3">Vendor</h3>
                                <p>Vendor is the service provider that provides a service of a specific category. A vendor of a service can be view after you have reviewed a service.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="space-medium bg-white">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center">
                        <h2 class="mb10">Latest Blogs</h2>
                        <p> These are some blogs written by a vendor.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="space-medium pdb0">
                    <div class="container">
                        <div class="venue-thumbnail-carousel">
                            <div class="owl-carousel owl-theme owl-venue-thumb">
                                @foreach($blogs as $blog)
                                    <div class="item">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <div class="vendor-thumbnail">
                                                <!-- Vendor thumbnail -->
                                                <div class="">

                                                    <div class="post-block text-center">
                                                        <div class="post-img mb30 zoomimg">
                                                            <a href="{{action('Front_End\FeBlogController@show',[$blog->id])}}"><img src="/upload-images/{{$blog->image}}" style="width: 360px;height: 240px;" alt="" class="img-fluid"></a>
                                                        </div>
                                                        <h4><a href="{{action('Front_End\FeBlogController@show',[$blog->id])}}" class="title">{{$blog->title}}</a></h4>
                                                        <!-- post block -->
                                                        <div class="meta">
                                                            <span class="meta-category"><span class="vendor-guest" style="font-size: 15px;">
                                                            By
                                                            </span>
                                                            <span class="vendor-text" style="font-size: 18px;color: black;">{{$blog->user->username}}</span></span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
