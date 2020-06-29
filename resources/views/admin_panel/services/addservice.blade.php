@extends('admin_panel.inc.master')

<head>
    @section('title')
        Add Service
    @endsection
</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
            <li class="breadcrumb-item active" aria-current="page">Add-Service</li>
        </ol>
    </nav>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('gallery-module/imageuploadify.min.css')}}" >
@endsection

@section('scripts')
<script src="{{asset('gallery-module/imageuploadify.min.js')}}"></script>
<script src="{{asset('html5-validation-effects/valid-form.js')}}"></script>
<!-- Google autocomplete api-key -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAck8OvwoNdtjtj6XsJE13Tw_WwLJWcN8A&libraries=places"></script>
@endsection

@section('content')
<style media="screen">
    form .form-control.invalid {
      border-color: red;
    }
    .example-form .form-group .validation-error {
      color: red;
      font-size: 14px;
    }
</style>

<!-- Google autocomplete api style -->
<style>
    #map-canvas {
      height: 100%;
      width: 100%;
      margin: 0px;
      padding: 0px;


  }

  .gm-fullscreen-control {
        display: none;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div> <!--Change-->
        <div class="col-sm-8"><br> <!--Change-->
        <div class="example-form example-form_after">
        <form id="addServiceForm" action="{{action('ServiceController@store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
        <div id="step-1" class="card">
                <div class="card-header">
                    <strong class="card-title">Add Basic Info</strong>
                    <big><span class="badge badge-info float-right mt-1">Step 1/3</span></big>
                </div>
                <div class="card-body">

                    <div>
                        <div class="card-body">
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Vendor</label>
                                    <select name="vendor" id="vendor" data-valueMissing="Please select a category." class="form-control" required>
                                        <option value="">Please Select</option>
                                        @foreach($vendor as $vendor)
                                            <option value="{{$vendor->id}}">{{$vendor->user->username}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Select Category</label>
                                    <select name="category" id="category" data-valueMissing="Please select a category." class="form-control" required>
                                        <option value="">Please Select</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Select City</label>
                                    <select name="city" id="city" data-valueMissing="Please select a city." class="form-control" required>
                                        <option value="">Please Select</option>
                                        @foreach($cities as $city)
                                            <option value="{{$city->id}}">{{$city->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Title</label>
                                    <input name="title" id="title" data-valueMissing="Please enter a title." placeholder="Enter Title" type="text" class="form-control cc-name valid" required>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-sm-9"></div>
                                    <div class="col-sm-3">
                                    <button style="border-radius: 5%;" type="button" id="step-1-btn" class="btn btn-lg btn-info btn-block">
                                        <span>Next</span>
                                    </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-sm-1"></div>
            </div>

            <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
            <div id="step-2" class="card">
                <div class="card-header">
                    <strong class="card-title">Share Social Media Links</strong>
                    <big><span class="badge badge-info float-right mt-1">Step 2/3</span></big>
                </div>
                <div class="card-body">

                    <div>
                        <div class="card-body">
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Address</label>
                                    <input id="pac-input" data-valueMissing="Please enter your address." placeholder="Enter Address" type="text" class="form-control cc-name valid" required>
                                    <input type="hidden" id="cityName" name="city2" />
                                    <input type="hidden" id="cityLat" name="latitude" required/>
                                    <input type="hidden" id="cityLng" name="longitude" required/>
                                    <div class="form-group has-success">
                                        <div class="card-header" style=";height: 215;">
                                            <div id="map-canvas"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Description</label>
                                    <textarea rows="9" id="description" name="description" placeholder="Enter Description" class="form-control" data-valueMissing="Please enter your description." required></textarea>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-sm-3">
                                    <button style="border-radius: 5%;" type="button" id="step-2-back-btn" class="btn btn-lg btn-secondary btn-block">
                                        <i class="fa fa-share-square fa-lg" style="transform: scaleX(-1);-moz-transform: scaleX(-1);-webkit-transform: scaleX(-1);-ms-transform: scaleX(-1);"></i>&nbsp;
                                        <span>Back</span>
                                    </button>
                                    </div>
                                    <div class="col-sm-6"></div>
                                    <div class="col-sm-3">
                                    <button style="border-radius: 5%;" type="button" id="step-2-btn" class="btn btn-lg btn-info btn-block">
                                        <span>Next</span>
                                    </button>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-sm-1"></div>
            </div>

            <div id="step-3">
                <div class="card">
                <div class="card-header">
                    <strong class="card-title">Select Images</strong>
                    <big><span class="badge badge-info float-right mt-1">Step 3/3</span></big>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="mt-2 mb-1">Select Cover Image</h5>
                        <hr style="margin-top: 10;margin-bottom: 15;">
                        <p class="card-text">
                            <div class="row"></div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" id="customFile" accept="image/*" onchange="loadFile(event)">
                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                </div>
                            </div>
                            <div class="col-sm-2"></div>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <img class="card-img-top" style="width:100%;height:auto;padding-bottom: 25;" name="image" height="80" id="output" alt="Cover Image">
                        </div>
                        <div class="col-sm-2"></div>
                    </div>
                </div>


                <div class="card" style="margin-top: 35;">
                    <div class="card-body">
                        <div class="mx-auto d-block">
                            <div>
                                <span>
                                    <h5 style="margin-left: 15;" class="mt-2 mb-1">Select Gallery Images</h5>
                                    <hr style="margin-top: 10;margin-bottom: 15;">
                                    <div class="container">
                                        <input type="file" accept="image/*" name="gallery_image[]" multiple>
                                    </div>

                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        $('input[type="file"]').imageuploadify();
                                    })
                                </script>
                                <script type="text/javascript">

                                  var _gaq = _gaq || [];
                                  _gaq.push(['_setAccount', 'UA-36251023-1']);
                                  _gaq.push(['_setDomainName', 'jqueryscript.net']);
                                  _gaq.push(['_trackPageview']);

                                  (function() {
                                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                                  })();

                                </script>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="twt-footer">
                        <span class="pull-left">
                            <button style="border-radius: 5%;" type="button" id="step-3-back-btn" class="btn btn-lg btn-secondary btn-block">
                                <i class="fa fa-share-square fa-lg" style="transform: scaleX(-1);-moz-transform: scaleX(-1);-webkit-transform: scaleX(-1);-ms-transform: scaleX(-1);"></i>&nbsp;
                                <span>Back</span>
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
            </form>
            </div>
    </div>
    <div class="col-sm-2"></div>
</div>
</div>

<script>
    $(document).ready(function() {
        var $myForm = $('#addServiceForm');
        $("#step-2").hide();
        $("#step-3").hide();
        $("#step-1-btn").click(function(){
            if(! $myForm[0].checkValidity()) {
                $myForm.find(':submit').click();
            }
            if($('#vendor')[0].checkValidity()&&$('#category')[0].checkValidity()&&$('#city')[0].checkValidity()&&$('#title')[0].checkValidity()){
                $('#step-1').fadeOut(500);
                $('#step-2').fadeIn(500);
            }
        });
        $("#step-2-back-btn").click(function(){
                    $('#step-2').fadeOut(500);
                    $('#step-1').fadeIn(500);
        });
        $("#step-2-btn").click(function(){
            if(! $myForm[0].checkValidity()) {
                $myForm.find(':submit').click();
            }
            if($('#description')[0].checkValidity()&&$('#pac-input')[0].checkValidity()&&$('#cityLat')[0].checkValidity()){
                    $('#step-2').fadeOut(500);
                    $('#step-3').fadeIn(500);
            }
        });
        $("#step-3-back-btn").click(function(){
                    $('#step-3').fadeOut(500);
                    $('#step-2').fadeIn(500);
        });
    });
</script>

<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

<script>
    var forms = document.querySelectorAll('.example-form_after form')
    forms.forEach(function (form) {
      ValidForm(form, {errorPlacement: 'after'})
    })
</script>

<!-- Google autocomplete api script -->
<script>
  function initialize() {
    var mapOptions = {
      center: new google.maps.LatLng(30.375321, 69.34511599999996),
      zoom: 6
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

    // Set the default bounds for the autocomplete search results.
    // This will bias the search results to Sydney, Australia.
    var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(30.375321, 69.34511599999996),
      new google.maps.LatLng(30.375321, 69.34511599999996));

    var options = {
      bounds: defaultBounds
    };

    // Get the HTML input element for the autocomplete search box.
    var input = document.getElementById('pac-input');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

    var autocomplete = new google.maps.places.Autocomplete(input, options);
    autocomplete.setComponentRestrictions({'country': ['pk']});

    // Define an info window to display the address details of the selected
    // location.
    var infowindow = new google.maps.InfoWindow();
    var marker = new google.maps.Marker({
      map: map
    });

    google.maps.event.addListener(autocomplete, 'place_changed', function() {
      infowindow.close();
      marker.setVisible(false);
      var place = autocomplete.getPlace();
      if (!place.geometry) {
        return;
      }

      // If the place has a geometry, then present it on a map.
      if (place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
      } else {
        map.setCenter(place.geometry.location);
        map.setZoom(17);  // Why 17? Because it looks good.
      }

      marker.setIcon(({
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(35, 35)
      }));
      marker.setPosition(place.geometry.location);
      marker.setVisible(true);

      document.getElementById('cityName').value = place.name;
      document.getElementById('cityLat').value = place.geometry.location.lat();
      document.getElementById('cityLng').value = place.geometry.location.lng();

      // Get the address details from the place returned by autocomplete.
      var address = '';
      if (place.address_components) {
        address = [
          (place.address_components[0] && place.address_components[0].short_name || ''),
          (place.address_components[1] && place.address_components[1].short_name || ''),
          (place.address_components[2] && place.address_components[2].short_name || '')
        ].join(' ');
      }

      infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
  </script>
@endsection
