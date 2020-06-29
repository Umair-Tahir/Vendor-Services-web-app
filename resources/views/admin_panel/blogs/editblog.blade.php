@extends('admin_panel.inc.master')

<head>
    @section('title')
        Edit Blog
    @endsection
</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
            <li class="breadcrumb-item active" aria-current="page">Edit-Blog</li>
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
            <form action="{{action('BlogController@update',$blog->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                @method('Put')
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Edit Blog</strong>
                </div>
                <div class="card-body">

                    <div>
                        <div class="card-body">
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">User</label>
                                    <select name="user" id="vendor" data-valueMissing="Please select a Vendor." class="form-control" required>
                                        <option value="">Please Select</option>
                                        @foreach($users as $user)
                                            @if($blog->user->username==$user->username)
                                                <option value="{{$blog->user->id}}" selected>{{$blog->user->username}}</option>
                                            @else
                                                <option value="{{$user->id}}">{{$user->username}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Title</label>
                                    <input name="title" id="title" data-valueMissing="Enter Blog Title" value="{{$blog->title}}" type="text" class="form-control cc-name valid" required>
                                </div>
                            <div class="form-group has-success">
                                <label class="control-label mb-1">Select Category</label>
                                <select name="category" id="category" data-valueMissing="Please select a category." class="form-control" required>
                                    <option value="">Please Select</option>
                                    @foreach($categories as $category)
                                        @if($category->name==$blog->category->name)
                                            <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                        @else
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Change Image</label>
                                    <div class="row form-group">
                                        <div class="col-sm-0"></div>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                   <div class="col-md-8"><img src="/upload-images/{{$blog->image}}"></div>
                                                <div class="col-sm-4"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-0"></div>
                                        <div class="col-sm-6">
                                            <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile" data-valueMissing="Image is required.">
                                            <label style="margin-top: -15;" class="custom-file-label" for="customFile">Choose Image</label>
                                        </div>
                                        </div>
                                        <div class="col-sm-6"></div>
                                    </div>
                                </div>
                                <div class="form-group has-success">
                                    <label class="control-label mb-1">Description</label>
                                    <textarea rows="9" name="description" id="description" data-valueMissing="Please provide a description." placeholder="Enter Description" class="form-control" required>{{$blog->description}}</textarea>
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
