@extends('front_end.master')
@section('title') Events Bash @endsection
@section('styles')
<link rel="stylesheet" href="{{asset(" css/fe/magnific-popup.css ")}}">
<link rel="stylesheet" href="{{asset(" css/fe/jquery.rateyo.css ")}}">
<link rel="stylesheet" href="{{asset(" css/fe/jquery-ui.css ")}}">

@endsection @section('content')
<!-- page-header -->
<div class="real-wedding-single-img" style="background-image:url(http://127.0.0.1:8000/upload-images/{{$vendor->user->image}});background-size: cover;color: transparent;text-shadow: 0 0 8px #000;">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                <div class="realwed-caption">
                    <h1 class="real-wedding-single-title" style="color: #ff4d4d;">{{$vendor->user->username}}</h1>
                    <span class="real-wedding-date"><h3 style="color: #ff4d4d;"><b>Joined,</b></h3></span>
                    <span class="real-wedding-place ml-4 text-white"><h3 style="color: #ff4d4d;"><b>{{ $vendor->created_at->format('M Y') }}</b>
                </h3></span></div>
            </div>
        </div>
    </div>
    <!-- page caption -->
    <div class="page-breadcrumb">
        <div class="container">
            <div class="row">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Service</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Vendor</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- page breadcrumb -->
</div>

<div class="vendor-content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">

                <div class="real-wedding-content bg-white border">

                    <h2>{{$vendor->user->username}}</h2>
                    <p class="meta">
                        <span class="meta-posted-by">Joined,</span>
                        <span class="meta-date">Date Created</span>
                    </p>

                    <div class="mb30">
                        <h3>Description</h3>
                        <p>{{$vendor->description}}</p>
                    </div>

                    <div class="venue-highlights">
                        <div class=" table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Vendor Highlights</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Vendor Name</td>
                                        <td class="venue-highlight-meta">{{$vendor->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile</td>
                                        <td class="venue-highlight-meta">{{$vendor->country_code}}-{{$vendor->company_code}}-{{$vendor->phone_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Vendor Email</td>
                                        <td class="venue-highlight-meta">{{$vendor->user->email}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.location -->
            <!-- list-sidebar -->
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                <div class="sidebar ">
                    <div class="widget">
                        <h3 class="widget-title">Blogs Published</h3>
                        <div class="recent-realwed">
                            <div class="row">
                                <!-- real wedding block -->
                                <div class="col-xl-4">
                                    <div class="real-wedding-img zoomimg">
                                        <!-- real wedding img -->
                                        <a href="#"><img style="height: 80px;width: 90px;" src="https://weraveyou.com/wp-content/uploads/2019/10/PV20_Mainstage-2019_%C2%A9Robin-B%C3%B6ttcher.jpg" alt="Wedding Vendor &amp; Supplier Directory HTML Template " class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <!-- /.real wedding img -->
                                    <div class="recent-realwed-content pl-0">
                                        <!-- real wedding content -->
                                        <h5 class="mb-1"><a href="#" class="title">Blog Title</a></h5>
                                        <div class="real-wedding-meta"><span class="real-wedding-date">07 May, 2018</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.real wedding img -->
                        </div>
                        <div class="recent-realwed">
                            <div class="row">
                                <!-- real wedding block -->
                                <div class="col-xl-4">
                                    <div class="real-wedding-img zoomimg">
                                        <!-- real wedding img -->
                                        <a href="#"><img style="height: 80px;width: 90px;" src="https://mastermanagementevent.weebly.com/uploads/5/8/7/8/58788755/8035742_orig.jpg" alt="Wedding Vendor &amp; Supplier Directory HTML Template " class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <!-- /.real wedding img -->
                                    <div class="recent-realwed-content pl-0">
                                        <!-- real wedding content -->
                                        <h5 class="mb-1"><a href="#" class="title">Blog Title</a></h5>
                                        <div class="real-wedding-meta"><span class="real-wedding-date">05 May, 2018</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.real wedding img -->
                        </div>
                        <div class="recent-realwed">
                            <div class="row">
                                <!-- real wedding block -->
                                <div class="col-xl-4">
                                    <div class="real-wedding-img zoomimg">
                                        <!-- real wedding img -->
                                        <a href="#"><img style="height: 80px;width: 90px;" src="https://static.wixstatic.com/media/f37000_481db801f8144722a9fa5e8c877a0b5f.jpg" alt="Wedding Vendor &amp; Supplier Directory HTML Template " class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <!-- /.real wedding img -->
                                    <div class="recent-realwed-content pl-0">
                                        <!-- real wedding content -->
                                        <h5 class="mb-1"><a href="#" class="title">Blog Title</a></h5>
                                        <div class="real-wedding-meta"><span class="real-wedding-date">04 May, 2018</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.real wedding img -->
                        </div>
                        <div class="recent-realwed">
                            <div class="row">
                                <!-- real wedding block -->
                                <div class="col-xl-4">
                                    <div class="real-wedding-img zoomimg">
                                        <!-- real wedding img -->
                                        <a href="#"><img style="height: 80px;width: 90px;" src="https://cdn.hipwallpaper.com/i/22/53/ik9MZH.jpg" alt="Wedding Vendor &amp; Supplier Directory HTML Template " class="img-fluid"></a>
                                    </div>
                                </div>
                                <div class="col-xl-8">
                                    <!-- /.real wedding img -->
                                    <div class="recent-realwed-content pl-0">
                                        <!-- real wedding content -->
                                        <h5 class="mb-1"><a href="#" class="title">Blog Title</a></h5>
                                        <div class="real-wedding-meta"><span class="real-wedding-date">03 May, 2018</span> </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.real wedding img -->
                        </div>
                    </div>

                </div>
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
                <h2>Vendor Services</h2>
                <!-- Those Vendors will be listed which have the same city and category -->
            </div>
        </div>
        <div>
            <div class="container">
                <div class="venue-thumbnail-carousel">
                    <div class="owl-carousel owl-theme owl-venue-thumb">
                        @foreach($services as $service)
                        <div class="item">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="vendor-thumbnail">
                                    <!-- Vendor thumbnail -->
                                    <div class="vendor-img zoomimg">
                                        <!-- Vendor img -->
                                        <a href="{{action('Front_End\FeServiceController@show',[$service->title])}}"><img src="/upload-images/{{$service->cover_image}}" style="width:600px;height:150px;" alt="" class="img-fluid"></a>
                                    </div>
                                    <!-- /.Vendor img -->
                                    <div class="vendor-content">
                                        <!-- Vendor Content -->
                                        <h2 class="vendor-title"><a href="{{action('Front_End\FeServiceController@show',[$service->title])}}" class="title">{{$service->title}}</a></h2>
                                        <p class="vendor-address">{{$service->city->name}}</p>
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
                    </div>
                </div>
            </div>
        </div>
        <!-- /. venue-thumbnail-section-->
    </div>
</div>

@endsection @section('scripts')
<script src="{{asset('js/fe/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/fe/jquery-ui.js')}}"></script>
@endsection
