@extends('front_end.master')

@section('title')
    Events Bash
@endsection


@section('content')

<!-- /.header -->
<!-- page-header -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <!-- page caption -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="page-caption">
                    <h1 class="page-title">Services</h1>
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
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Listing</a></li>
                        <li class="breadcrumb-item active text-white" aria-current="page">Services</li>
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
            <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                @foreach($services as $service)
                <div class="vendor-thumbnail list-view">
                    <!-- Vendor thumbnail -->
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 border-right pr-0">
                            <div class="vendor-img">
                                <!-- Vendor img -->
                                <a href="#"><div class="zoomimg"><img src="/upload-images/{{$service->cover_image}}" style="width:349px;height:175px;" alt="" class="img-fluid"></div></a>
                            </div>
                        </div>
                        <!-- /.Vendor img -->
                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 pl-0">
                            <div class="vendor-content">
                                <!-- Vendor Content -->
                                <h2 class="vendor-title"><a href="/single_page" class="title">{{$service->title}}</a></h2>
                                <p class="vendor-address">{{$service->city->name}}</p>
                                <!-- /.Vendor meta -->
                            </div>
                            <div class="vendor-meta m-0">
                                <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-price">
                                    $150
                                        </span>
                                    <span class="vendor-text">Start From</span></div>
                                <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-guest">
                                              120+
                                         </span>
                                    <span class="vendor-text">Guest</span>
                                </div>
                                <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i>
                                    </span>
                                    <span class="rating-count vendor-text">(20)</span></div>
                            </div>
                            <!-- /.Vendor Content -->
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- paginations -->
                <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="pagination justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">{{$services->links()}}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

                <!-- /.paginations -->
            </div>
            <!-- sidebar-section -->
            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                <div class="filter-form">
                    <form class="form-row">

                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <h3 class="widget-title">filter</h3>
                        </div>


                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <select class="wide">
                                <option value="Venue Type">Service Type</option>
                                <option value="Hotel">Loop</option>
                            </select>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <select class="wide">
                                <option value="">Minimim Guest</option>
                                <option value="100">100</option>
                                <option value="250">250</option>
                                <option value="400">400</option>
                                <option value="600">600</option>
                                <option value="800">800</option>
                                <option value="1000">1000</option>
                            </select>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <select class="wide">
                                <option value="">Starting Price</option>
                                <option value="$150">$150</option>
                                <option value="$500">$500</option>
                                <option value="$150">$1000</option>
                                <option value="$2000">$2000</option>
                                <option value="$3500">$3500</option>
                                <option value="$4500">$4500</option>
                            </select>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb20">
                            <!-- aminites -->
                            <div class="aminities">
                                <h3 class="widget-title"> Amenities</h3>
                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5"><p style="margin-left: 25px;"> Event Planner </p></label>
                                </div>
                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck8">
                                    <label class="custom-control-label" for="customCheck8"><p style="margin-left: 25px;"> Catering Services </p></label>
                                </div>
                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck9">
                                    <label class="custom-control-label" for="customCheck9"><p style="margin-left: 25px;"> Clean Up </p></label>
                                </div>
                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck10">
                                    <label class="custom-control-label" for="customCheck10"><p style="margin-left: 25px;"> Event Rentals </p></label>
                                </div>
                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck11">
                                    <label class="custom-control-label" for="customCheck11"><p style="margin-left: 25px;"> Wifi </p></label>
                                </div>
                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck12">
                                    <label class="custom-control-label" for="customCheck12"><p style="margin-left: 25px;"> Pet Friendly </p></label>
                                </div>
                                <!-- checkbox -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck13">
                                    <label class="custom-control-label" for="customCheck13"><p style="margin-left: 25px;"> Accommodations </p></label>
                                </div>
                            </div>
                            <!-- /.aminites -->
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <button class="btn btn-default btn-block" type="submit">Refresh</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.sidebar-section -->
        </div>

    </div>
</div>

@endsection