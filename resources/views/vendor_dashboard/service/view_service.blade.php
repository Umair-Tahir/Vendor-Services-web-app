@extends('vendor_dashboard.vd_master')

@section('title')
    - Dashboard
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('gallery-module/imageuploadify.min.css')}}" >
<link rel="stylesheet" href="{{asset("css/fe/view-service-style.css")}}" >
@endsection

@section('scripts')
<script src="{{asset('gallery-module/imageuploadify.min.js')}}"></script>
<script src="{{asset('html5-validation-effects/valid-form.js')}}"></script>
@endsection

@section('content')
<div class="dashboard-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <div class="container">
                    <div class="card" style="background-color: #fff;">
                        <div class="container-fliud">
                            <div class="wrapper row">
                                <div class="preview col-md-6">

                                    <div class="preview-pic tab-content">
                                      <div class="tab-pane active" id="pic-1"><img src="/upload-images/{{$service->cover_image}}" /></div>

                                      <ul class="list-group list-group-flush">
                                             <li class="list-group-item">
                                                <i class="fa fa-user"></i> Vendor <span class="pull-right">{{$service->vendor->name}}</span>
                                             </li>
                                            <li class="list-group-item">
                                                <i class="fa fa-picture-o"></i> City <span class="pull-right">{{$service->city->name}}</span>
                                             </li>
                                            <li class="list-group-item">
                                                <i class="fa fa-list"></i> Category <span class="pull-right">{{$service->category->name}}</span>
                                             </li>
                                              <!--  <li class="list-group-item">
                                                <i class="fa fa-user"></i> Postal Code <span class="pull-right">15000</span>
                                             </li>  -->
                                          </ul>
                                    </div>

                                </div>
                                <div class="details col-md-6">
                                    <h3 class="product-title">{{$service->title}}</h3>
                                    <div class="rating">
                                        <i class="fa fa-map-marker"></i> Address <span class="pull-right">bla bla bla</span>
                                    </div>
                                    <p class="product-description">{{$service->description}}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            <div class="card" style="background-color: white;">
                @if($amenitie!=null)
                <div class="card-header">
                    <strong class="card-title"><p>{{$service->title}}</p> <p>Amenities</p></strong>
                </div>
                
                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="city">Start Price</label>
                                        <h4>{{$amenitie->price}}</h4>
                                    </div>
                                </div>
                                </div>

                                <hr>
                                 @if($amenitie->event_planners!=0||$amenitie->wifi!=0||$amenitie->pet_friendly!=0||$amenitie->catering_service!=0||$amenitie->car_rentals!=0||$amenitie->accommodations!=0)
                                <div class="row">
                                    <div style="margin-left: 2%;">Select Amenities</h6></div>

                                        @if($amenitie->event_planners!=0)
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <i style="color: red;" class="fa fa-check-square-o"></i>&nbsp
                                            <span style="margin-left: 20px;"> Event Planners</span>
                                        </div>
                                    </div>
                                    @endif

                                    @if($amenitie->wifi!=0)
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <i style="color: red;" class="fa fa-check-square-o"></i>&nbsp
                                            <span style="margin-left: 20px;"> Wifi</span>
                                        </div>
                                    </div>
                                    @endif

                                    @if($amenitie->pet_friendly!=0)
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <i style="color: red;" class="fa fa-check-square-o"></i>&nbsp
                                            <span style="margin-left: 20px;"> Pet Friendly</span>
                                        </div>
                                    </div>
                                    @endif
                                    @if($amenitie->catering_service!=0)
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <i style="color: red;" class="fa fa-check-square-o"></i>&nbsp
                                            <span style="margin-left: 20px;"> Catering Service</span>
                                        </div>
                                    </div>
                                    @endif

                                    @if($amenitie->car_rentals!=0)
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <i style="color: red;" class="fa fa-check-square-o"></i>&nbsp
                                            <span style="margin-left: 20px;"> Car Rentals</span>
                                        </div>
                                    </div>
                                    @endif

                                    @if($amenitie->accommodations!=0)
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-checkbox">
                                            <i style="color: red;" class="fa fa-check-square-o"></i>&nbsp
                                            <span style="margin-left: 20px;"> Accommodations</span>
                                        </div>
                                    </div>
                                    @endif
                                   </div>
                            @else
                            <a style="margin-bottom: 20px;" href="{{action('Vendor_Dashboard\VdAmenitieController@create')}}" class="btn btn-danger btn btn-sm">Add Amenities</a>

                            <h4 style="color:red;">Amenities Currently Not Available.</h4>
                            @endif
                                <hr>

                                <h5 style="margin-top: 5%; ;margin-bottom: 3%;">Social Links</h5>
                                <li class="list-group-item">
                                    <i class="fa fa-flag"></i> Links <span class="pull-right">
                                         @if($amenitie->facebook!=null)
                                         <a href="{{$amenitie->facebook}}"><i class="fa fa-facebook pr-1"></i></a>
                                         @else 
                                        <a href="https://www.facebook.com"><i class="fa fa-facebook pr-1"></i></a>
                                         @endif
                                         @if($amenitie->twitter!=null)
                                         <a href="{{$amenitie->twitter}}"><i class="fa fa-twitter pr-1"></i></a>
                                         @else 
                                         <a href="https://www.twitter.com"><i class="fa fa-twitter pr-1"></i></a>
                                          @endif
                                        @if($amenitie->instagram!=null)
                                         <a href="{{$amenitie->instagram}}"><i class="fa fa-instagram pr-1"></i></a>
                                         @else 
                                         <a href="https://www.instagram.com"><i class="fa fa-instagram pr-1"></i></a>
                                          @endif

                                    </span>
                                </li>

                        </div>
                    </div>

                </div>
                @else
                <h2 style="color:red;">Add Amenities to get more bookings</h2>
                @endif
            </div>
          </div>
          <div class="col-sm-2"></div>
        </div>
    </div>
</div>
@endsection
