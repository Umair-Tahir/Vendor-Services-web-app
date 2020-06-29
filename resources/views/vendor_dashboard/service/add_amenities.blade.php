@extends('vendor_dashboard.vd_master')

@section('title')
    - Dashboard
@endsection

@section('content')
<div class="dashboard-content">
            <div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8"><br>
            <form action="{{action('Vendor_Dashboard\VdAmenitieController@store')}}" method="post">
                @csrf
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Add Amenities</strong>
                </div>
                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">
                            <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">Select Service</label>
                                            <select name="service" class="wide" style="display: none;">
                                                <option  value="">Select Service</option>
                                                @foreach($services as $service)
                                                <option value="{{$service->id}}">{{$service->title}}</option>
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                    <div class="form-group">
                                        <label class="control-label" for="city">Start Price</label>
                                        <select name="price" class="wide" style="display: none;">
                                            <option value="">Select Price</option>
                                            <option value="5">5k</option>
                                            <option value="10">10k</option>
                                            <option value="15">15k</option>
                                            <option value="20">20k</option>
                                            <option value="25">25k</option>
                                            <option value="30">30k</option>
                                        </select>
                                    </div>
                                </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div style="margin-left: 2%;"><h6>Select Amenities</h6></div>

                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="event_planners" class="custom-control-input" id="customCheck10">
                                            <label class="custom-control-label" for="customCheck10"><span style="margin-left: 20px;"> Event Planners</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="wifi" class="custom-control-input" id="customCheck11">
                                            <label class="custom-control-label" for="customCheck11"><span style="margin-left: 20px;"> Wifi</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="pet_friendly" class="custom-control-input" id="customCheck12">
                                            <label class="custom-control-label" for="customCheck12"><span style="margin-left: 20px;"> Pet Friendly</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="catering_service" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label" for="customCheck13"><span style="margin-left: 20px;"> Catering Service</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="car_rentals" class="custom-control-input" id="customCheck14">
                                            <label class="custom-control-label" for="customCheck14"><span style="margin-left: 20px;"> Car Rentals</span></label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="accommodations" class="custom-control-input" id="customCheck15">
                                            <label class="custom-control-label" for="customCheck15"><span style="margin-left: 20px;"> Accommodations</span></label>
                                        </div>

                                    </div>

                                </div>

                                <hr>

                                <h5 style="margin-top: 5%; ;margin-bottom: 3%;">Share Social Links</h5>
                                <div class="form-group">
                                    <label class="control-label mb-1">Facebook</label>
                                    <input name="facebook" type="text" class="form-control cc-exp" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-1">Twitter</label>
                                    <input name="twitter" type="text" class="form-control cc-exp" >
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-1">Instagram</label>
                                    <input name="instagram" type="text" class="form-control cc-exp" >
                                </div>

                        </div>
                        <footer class="twt-footer">
                            <span class="pull-left">
                                <button style="border-radius: 5%;" type="button" id="step-2-back-btn" class="btn btn-lg btn-secondary btn-block">
                                    <i class="fa fa-times-circle fa-lg"></i>&nbsp;
                                    <span>Cancel</span>
                                </button>
                            </span>
                            <span class="pull-right">
                                <button style="border-radius: 5%;" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span>Save</span>
                            </button>
                            </span>
                        </footer>
                    </div>

                </div>
            </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
        </div>
    @endsection
