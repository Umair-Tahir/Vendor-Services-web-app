@extends('admin_panel.inc.master')

<head>
    @section('title')
       Edit City
    @endsection
</head>

@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cities</li>
            <li class="breadcrumb-item active" aria-current="page">Edit-City</li>
        </ol>
    </nav>
@endsection

@section('scripts')
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
        <div class="col-sm-3"></div> <!--Change-->
        <div class="col-sm-6"><br> <!--Change-->
        
        <div class="card">
                <div class="card-header">
                    <strong class="card-title">Edit City</strong>
                </div>
                <div class="card-body">
        
                    <div>
                        <div class="card-body">
                            <div class="example-form example-form_after">
                            <form align="left" action="{{action('CityController@update', $cities->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class="form-control-label">Name</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="name" placeholder="Enter City Name" value="{{$cities->name}}" class="form-control" data-valueMissing="Please enter a name." required>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                               <div class="col-md-8"><img src="/upload-images/{{$cities->image}}"></div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label class=" form-control-label">Change Image</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                    <div class="row">
                                            <div class="col-md-2"></div>
                                               <div class="col-md-8">
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                                        <label class="custom-file-label" for="customFile">Choose...</label>
                                                    </div>
                                                </div> 
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12 col-md-5">
                                    </div>
                                    <div class="col col-md-4">
                                        @method('PUT')
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Update</button>
                                    </div>
                                    <div class="col-12 col-md-3">
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <div class="col-sm-3"></div>
</div>
</div>

<script>
    var forms = document.querySelectorAll('.example-form_after form')
    forms.forEach(function (form) {
      ValidForm(form, {errorPlacement: 'after'})
    })
</script>
@endsection
