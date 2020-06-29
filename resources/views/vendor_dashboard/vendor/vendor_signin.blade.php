<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Vendor Form</title>


    <link rel="stylesheet" href="{{asset('css/master/bootstrap.min.css')}}" >   <!---->
    <link rel="stylesheet" href="{{asset("css/fe/fontawesome-all.css")}}" > <!---->
    <link rel="stylesheet" href="{{asset("css/fe/fontello.css")}}" >    <!---->
    <link rel="stylesheet" href="{{asset("css/fe/fonts.googleapis.css")}}" >    <!---->
    <link rel="stylesheet" href="{{asset("css/fe/style.css")}}" >   <!---->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('ccs/fe/fe-images/favicon.ico')}}"> <!---->
</head>
<body>
<div>
    <style media="screen">
        form .form-control.invalid {
            border-color: red;
        }
        .example-form .form-group .validation-error {
            color: red;
            font-size: 14px;
        }
    </style>
    @if(count($errors)>0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{$error}}

            </div>
        @endforeach
    @endif

    <div style="height:935px;padding-bottom: 0px;" class="vendor-bg-image">
        <!-- sign up -->
        <div class="example-form example-form_after">
            <div class="vendor-form">

                <div class="container">
                    <div class="row ">
                        <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                            <div class="vendor-head">
                                <a href="#"><img src="{{asset('css/fe/fe-images/logo-new.png')}}" style="height: 50px;width: 128px;"></a>
                            </div>
                            <div class="st-tab">
                                <ul class="nav nav-tabs nav-justified" id="Mytabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="tab-1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab-1" aria-selected="true">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="tab-2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab-2" aria-selected="false">Login</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <!-- vendor title -->
                                            <div class="vendor-form-title">
                                                <h3 class="mb-2">Business Register</h3>
                                                <p>Join us to get your business listed or to claim your listing for FREE!</p>
                                            </div>
            <!------------ vendor Login Form ------------->
                                            <form action="{{action('Vendor_Dashboard\VdvendorController@register')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                               @csrf
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="control-label sr-only" for="bussinessname"></label>
                                                            <input id="bussinessname" type="text" name="username" placeholder="Bussiness Name" class="form-control" data-valueMissing="Please provide a Business Name." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="control-label sr-only" for="username"></label>
                                                            <input id="username" type="text" name="name" placeholder="Name" class="form-control" data-valueMissing="Please provide a Name." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-sm-2" style="padding-right: 0px;">
                                                                    <label class="control-label sr-only"></label>
                                                                    <input type="text" name="country_code" class="form-control cc-name valid" value="+92" readonly>
                                                                </div>
                                                                <div class="col-sm-3" style="padding-right: 4px;padding-left: 4px;">
                                                                    <label class="control-label sr-only"></label>
                                                                    <input id="username" name="company_code" type="number" placeholder="323" class="form-control" data-valueMissing="Company code is required" required>
                                                                </div>
                                                                <div class="col-sm-7" style="padding-left: 0px;">
                                                                    <label class="control-label sr-only"></label>
                                                                    <input id="username" type="number" name="number" placeholder="1234567" class="form-control" data-valueMissing="Enter remaining number" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group service-form-group">
                                                            <label class="control-label sr-only" for="email"></label>
                                                            <input id="email" name="email" type="email" placeholder="Email" class="form-control" data-valueMissing="Please enter your email." required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group service-form-group">
                                                            <label class="control-label sr-only" for="passwordregister"></label>
                                                            <input id="passwordregister" type="password" name="password" placeholder="Password" class="form-control" data-valueMissing="Password is required" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- select -->
                                                        <div class="form-group">
                                                            <textarea rows="8" name="description" id="description" data-valueMissing="Please provide a description." placeholder="Enter Description" class="form-control" data-valueMissing="Please provide a description" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- select -->
                                                        <div class="form-group">
                                                            <input id="filebutton" name="image" class="btn btn-primary btn-block" type="file" data-valueMissing="Please select an image" required>
                                                        </div>
                                                    </div>
                                                    <!-- buttons -->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <button type="submit" name="signup" class="btn btn-default">Sign up</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- vendor-login -->
                                    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab-2">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <div class="vendor-form-title">
                                                <!--vendor-title -->
                                                <h3 class="mb-2">Welcome Back Vendor</h3>
                                            </div>

                                            <form action="{{action('Vendor_Dashboard\VdvendorController@register')}}" method="post" >
                                                @csrf
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="control-label sr-only" for=""></label>
                                                            <input id="username" type="text" name="username" placeholder="username" class="form-control" data-valueMissing="Enter your Username" required>
                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <div class="form-group service-form-group">
                                                            <label class="control-label sr-only" for="passwordlogin"></label>
                                                            <input id="passwordlogin" type="password" name="password" placeholder="Password" class="form-control" data-valueMissing="Enter your password" required>
                                                        </div>
                                                    </div>
                                                    <!--buttons -->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <button type="submit" name="signin" class="btn btn-default">Login</button>
                                                    </div>
                                                </div>
                                            </form>
                                           <!-- <p class="mt-2"> Create a New Account for user.<a href="#" class="wizard-form-small-text"> Click here</a></p>-->
                                        </div>
                                    </div>
                                    <!-- /.vendor-login -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.vendor-form -->
        </div>
    </div>

</div>
<script src="{{asset('js/master/jquery.min.js')}}"></script>    <!---->
<script src="{{asset('js/master/bootstrap.min.js')}}"></script> <!---->
<script src="{{asset('js/fe/jquery.nice-select.min.js')}}"></script>    <!---->
<script src="{{asset('js/fe/fastclick.js')}}"></script> <!---->
<script src="{{asset('js/fe/custom-script.js')}}"></script> <!---->
<script src="{{asset('html5-validation-effects/valid-form.js')}}"></script>

<script>
    var forms = document.querySelectorAll('.example-form_after form')
    forms.forEach(function (form) {
        ValidForm(form, {errorPlacement: 'after'})
    })
</script>
</body>
</html>
