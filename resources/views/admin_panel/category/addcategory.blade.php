@extends('admin_panel.inc.master')


<head>
    @section('title')
        Add Category
@endsection
</head>

@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
            <li class="breadcrumb-item active" aria-current="page">Add-Category</li>
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
                    <strong class="card-title">Add New Category</strong>
                </div>
                <div class="card-body">
        
                    <div>
                        <div class="card-body">
                            <div class="example-form example-form_after">
                            <form action="{{action('CategoryController@store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
                            @csrf
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Name</label>
                                    <input placeholder="Enter category name" name="name" type="text" class="form-control cc-name valid" data-valueMissing="Please enter a name." required>
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose Image</label>
                                    </div>
                                </div>
                                </br>
                                <div>
                                    <button type="submit" class="btn btn-info btn-block">
                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                        <span>Save</span>
                                    </button>
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
