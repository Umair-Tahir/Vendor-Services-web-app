@extends('admin_panel.inc.master')

<head>
    @section('title')
        Edit Vendor
    @endsection
</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vendor</li>
            <li class="breadcrumb-item active" aria-current="page">Edit-Vendor</li>
        </ol>
    </nav>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('gallery-module/imageuploadify.min.css')}}" >
@endsection

@section('scripts')
<script src="{{asset('gallery-module/imageuploadify.min.js')}}"></script>
<script src="{{asset('html5-validation-effects/valid-form.js')}}"></script>
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

<div class="container">
    <div class="row">
        <div class="col-sm-2"></div> <!--Change-->
        <div class="col-sm-8"><br> <!--Change-->
        <div class="example-form example-form_after">
        <form id="editVendorForm" align="left" action="{{action('VendorController@update', $vendors->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
           @csrf
            @method('put')

        <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
        <div id="step-1" class="card">
                <div class="card-header">
                    <strong class="card-title">Edit Vendor</strong>
                    <big><span class="badge badge-info float-right mt-1">Step 1/2</span></big>
                </div>
                <div class="card-body">

                    <div>
                        <div class="card-body">
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class="form-control-label">Business Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="username" id="username" placeholder="Enter Business Name" value="{{$vendors->user->username}}" class="form-control" data-valueMissing="Please enter a business name." required>
                                    </div>  <!--Vendor Username changed to Business Name-->
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class="form-control-label">Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="name" id="name" placeholder="Enter your Name" value="{{$vendors->name}}" class="form-control" data-valueMissing="Please enter a name." required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class="form-control-label">Mobile</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <div class="container">
                                    <div class="row">
                                        <div class="col-sm-3" style="padding-right: 0px; padding-left: 4px;">
                                            <input type="text" name="country_code" class="form-control cc-name valid" value="{{$vendors->country_code}}" readonly>
                                        </div>
                                        <div class="col-sm-3" style="padding-right: 0px; padding-left: 4px;">
                                            <input type="number" name="company_code" id="company_code" placeholder="323" class="form-control" value="{{$vendors->company_code}}" data-valueMissing="Company code cannot be empty" required>
                                        </div>
                                        <div class="col-sm-6" style="padding-right: 0px; padding-left: 4px;">
                                            <input type="number" name="number" id="number" placeholder="1234567" class="form-control" value="{{$vendors->phone_number}}" data-valueMissing="Enter remaining number." required>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class="form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input name="email" name="name" id="email" placeholder="Enter your Email" value="{{$vendors->user->email}}" class="form-control" data-valueMissing="Please enter your email." required>
                                    </div>
                                </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class="control-label mb-1">Password</label>
                                </div>
                                    <div class="col-12 col-md-9">
                                        <input type="password" name="password" placeholder="Enter New Password"  class="form-control cc-name valid">
                                    </div>
                            </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Description</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <textarea name="description" id="description" rows="9" class="form-control" data-valueMissing="Please provide a description." required>{{$vendors->description}}</textarea>
                                    </div>
                                </div>
                                <br>
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

            <div id="step-2" style="">
                    <div class="card" style="margin-bottom: -24px;margin-bottom: -1.5rem;">
                    <div class="card-header">
                        <strong class="card-title">Select Images</strong>
                        <big><span class="badge badge-info float-right mt-1">Step 2/2</span></big>
                    </div>
                    <div class="card" style="margin-bottom: -24px;margin-bottom: -1.5rem;">
                        <div class="card-body">
                            <h5 class="mt-2 mb-1">Select Cover Image</h5>
                            <hr style="margin-top: 10;margin-bottom: 15;">
                            <p class="card-text">
                                </p><div class="row"></div>
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div class="custom-file">
                                        <input type="file" name="cover_image" class="custom-file-input" id="customFile" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" for="customFile">Choose Image</label>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                            <p></p>
                        </div>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <img class="card-img-top" style="width:100%;height:auto;padding-bottom: 25;" height="80" name="cover_image" id="output" alt="Cover Image">
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                        <footer class="twt-footer">
                            <span class="pull-left">
                                <button style="border-radius: 5%;" type="button" id="step-2-back-btn" class="btn btn-lg btn-secondary btn-block">
                                    <i class="fa fa-share-square fa-lg" style="transform: scaleX(-1);-moz-transform: scaleX(-1);-webkit-transform: scaleX(-1);-ms-transform: scaleX(-1);"></i>&nbsp;
                                    <span>Back</span>
                                </button>
                            </span>
                            <span class="pull-right">
                                @method('PUT')
                                <button style="border-radius: 5%;" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span>Update</span>
                            </button>
                            </span>
                        </footer>
                    </div>
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
        var $myForm = $('#editVendorForm');
        $("#step-2").hide();
        $("#step-1-btn").click(function(){
            if(! $myForm[0].checkValidity()) {
                $myForm.find(':submit').click();
            }
            if($('#username')[0].checkValidity()&&$('#name')[0].checkValidity()&&$('#company_code')[0].checkValidity()&&$('#number')[0].checkValidity()&&$('#email')[0].checkValidity()&&$('#description')[0].checkValidity()){
                $('#step-1').fadeOut(500);
                $('#step-2').fadeIn(500);
            }
        });
        $("#step-2-back-btn").click(function(){
            $('#step-2').fadeOut(500);
            $('#step-1').fadeIn(500);
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
@endsection
