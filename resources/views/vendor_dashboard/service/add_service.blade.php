@extends('vendor_dashboard.vd_master')

@section('title')
    - Dashboard
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

<div class="dashboard-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Add New Service</h3>
                            <p>Creating service let you start and expand your business.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"> <h4 class="mb0">Add Service</h4></div>
                    <div class="">
                        <div class="example-form example-form_after">
                        <form action="{{action('Vendor_Dashboard\VdserviceController@store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <!-- Form Name -->
                            <div class="venue-form-info card-body">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title">Title</label>
                                            <input id="title" name="title" type="text" placeholder="Title" class="form-control" data-valueMissing="Please enter a title." required>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="city">City</label>
                                            <select class="wide" name="city" id="city" style="display: none;" data-valueMissing="Please select a city." required>
                                                <option value="">Select City</option>
                                                @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                        <!-- Select Basic -->
                                        <div class="form-group">
                                            <label class="control-label" for="Category">Category</label>
                                            <select class="wide" name="category" id="Category" style="display: none;" data-valueMissing="Please select a category." required>
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="address">Address </label>
                                            <input id="pac-input" data-valueMissing="Please enter your address." placeholder="Enter Address" type="text" class="form-control " required>
                                            <input type="hidden" id="cityName" name="city2" />
                                            <input type="hidden" id="cityLat" name="latitude" />
                                            <input type="hidden" id="cityLng" name="longitude" />
                                            <div class="form-group has-success">
                                                <div class="card-header" style=";height: 215px;">
                                                    <div id="map-canvas"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="summernote">Descriptions </label>
                                            <textarea rows="12" id="description" name="description" placeholder="Enter Description" class="form-control" data-valueMissing="Please enter your description." data-valueMissing="Please service description." required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="filebutton">Browse Image</label>
                                            <input id="filebutton" name="image" class="btn btn-primary btn-block" type="file" data-valueMissing="Please select a Image." required>
                                        </div>
                                    </div>
                                    <div class="social-form-info card-body border-top">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="mx-auto d-block">
                                                    <div>
                                                        <span>
                                                            <h3>Select Gallery Images </h3>
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

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button style="margin-top: 10%;" class="btn btn-default" type="submit">Submit</button>
                                        </div>

                                    </div>

                        </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</div>

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
