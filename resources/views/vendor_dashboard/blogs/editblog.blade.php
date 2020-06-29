@extends('vendor_dashboard.vd_master')

@section('title')
    - Dashboard
@endsection

@section('styles')
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

<script>
    var forms = document.querySelectorAll('.example-form_after form')
    forms.forEach(function (form) {
        ValidForm(form, {errorPlacement: 'after'})
    })
</script>

<div class="dashboard-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">Edit Blog</h3>
                            <p>You can update your blog from here.</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color: #F1F2F7;">

                    <div class="example-form example-form_after">
                        <form action="{{action('Vendor_Dashboard\VdBlogController@update',$blog->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('Put')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Edit Blog</h3>
                                        <hr>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title">Title</label>
                                            <input id="title" name="title" value="{{$blog->title}}" type="text" placeholder="Title" class="form-control" data-valuemissing="Please enter a title." required>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label">Select Category</label>
                                            <select class="wide" name="category" id="category" style="display: none;" data-valueMissing="Please select a category." required>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label mb-1">Change Image</label>
                                            <div class="row">
                                                <div class="col-sm-3"></div>
                                                <div class="col-sm-6">
                                                <img src="/upload-images/{{$blog->image}}">
                                                <input id="filebutton" name="image" class="btn btn-primary btn-block" type="file" data-valuemissing="Please select a Image.">
                                                <div class="col-sm-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            <textarea rows="12" id="description" name="description" placeholder="Enter Description" class="form-control" data-valuemissing="Please enter your description." required="" spellcheck="false">{{$blog->description}}</textarea>
                                        </div>
                                    </div>







                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button type="submit" name="singlebutton" class="btn btn-default">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>
</div>
    <br><br><br>
@endsection
