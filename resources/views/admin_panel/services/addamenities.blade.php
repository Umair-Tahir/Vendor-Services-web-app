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
            <li class="breadcrumb-item active" aria-current="page">Service</li>
            <li class="breadcrumb-item active" aria-current="page">Add-Amenities</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8"><br>
        	<form action="#" method="post">
        	<div class="card">
                <div class="card-header">
                    <strong class="card-title">Add Amenities</strong>
                </div>
                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">
                            <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="control-label mb-1"><h6 style="margin-bottom: 5;">Start Price</h6></label>
                                                <select name="select" id="select" class="form-control">
                                                    <option value="">Select Price</option>
                                                    <option value="150">150</option>
                                                    <option value="200">500</option>
                                                    <option value="1000">1000</option>
                                                    <option value="2000">2000</option>
                                                    <option value="3500">3500</option>
                                                    <option value="4500">4500</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label class="control-label mb-1"><h6 style="margin-bottom: 5;">Min Guest Served</h6></label>
                                                <select name="select" id="select" class="form-control">
                                                    <option value="">Select Guests</option>
                                                    <option value="150">100</option>
                                                    <option value="200">250</option>
                                                    <option value="1000">400</option>
                                                    <option value="2000">600</option>
                                                    <option value="3500">800</option>
                                                    <option value="4500">1000</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                            	<hr>

                                <div class="row">
                                	<div style="margin-left: 2%;"><h6>Select Amenities</h6></div>

                                	<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck9">
                                            <label class="custom-control-label" for="customCheck9"> Clean Up</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck10">
                                            <label class="custom-control-label" for="customCheck10">Event Planner</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck11">
                                            <label class="custom-control-label" for="customCheck11">Wifi</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck12">
                                            <label class="custom-control-label" for="customCheck12">Pet Friendly</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label" for="customCheck8"> Catering Services</label>
                                        </div>
                                    </div>

                                	<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label" for="customCheck5">Event Rentals</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck13">
                                            <label class="custom-control-label" for="customCheck13">Accommodations</label>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <h5 style="margin-top: 5%; ;margin-bottom: 3%;">Share Social Links</h5>
                                <div class="form-group">
                                    <label class="control-label mb-1">Facebook</label>
                                    <input name="facebook" type="text" class="form-control cc-exp" placeholder="https://www.facebook.com/">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-1">Twitter</label>
                                    <input name="twitter" type="text" class="form-control cc-exp" placeholder="https://www.twitter.com/">
                                </div>
                                <div class="form-group">
                                    <label class="control-label mb-1">Youtube</label>
                                    <input name="youtube" type="text" class="form-control cc-exp" placeholder="https://www.youtube.com/">
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
@endsection
