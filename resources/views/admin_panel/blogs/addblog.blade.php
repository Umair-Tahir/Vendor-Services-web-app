@extends('admin_panel.inc.master')

<head>
    @section('title')
        Add Blog
    @endsection
</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
            <li class="breadcrumb-item active" aria-current="page">Add-Blog</li>
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
        <div class="col-sm-2"></div>
        <div class="col-sm-7"><br>
            <div class="example-form example-form_after">
            <form action="{{action('BlogController@store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
                @csrf
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Add New Blog</strong>
                </div>
                <div class="card-body">

                    <div>
                        <div class="card-body">
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Users</label>
                                    <select name="username" id="vendor" data-valueMissing="Please select a Vendor." class="form-control" required>
                                        <option value="">Please Select</option>
                                          @foreach($users as $user)
                                            <option value="{{$user->id}}">{{$user->username}}</option>
                                              @endforeach
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Title</label>
                                    <input name="title" id="title" data-valueMissing="Enter Blog Title" placeholder="Enter Blog Title" type="text" class="form-control cc-name valid" required>
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
                                <div style="margin-bottom: 0rem;" class="form-group has-success">
                                    <label style="padding-bottom: 40;" class="control-label mb-1">Select Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile" data-valueMissing="Image is required." required>
                                            <label style="margin-top: -40;" class="custom-file-label" for="customFile">Choose Image</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Description</label>
                                    <textarea rows="9" name="description" id="description" data-valueMissing="Please provide a description." placeholder="Enter Description" class="form-control" required></textarea>
                                </div>
                                </br>
                                <div class="row">
                                    <div class="col-sm-9"></div>
                                    <div class="col-sm-3">
                                    <span class="pull-right">
                                        <button style="border-radius: 5%;" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-upload fa-lg"></i>&nbsp;
                                        <span>Publish</span>
                                        </button>
                                    </span>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>
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
