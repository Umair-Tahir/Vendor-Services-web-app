@extends('vendor_dashboard.vd_master')

@section('title')
    - Dashboard
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
                            <h3 class="dashboard-page-title">Add New Blogs</h3>
                            <p>Hi Vendor You can create and publish you blogs from here.</p>
                        </div>
                    </div>
                </div>
                <div class="card" style="background-color: #F1F2F7;">

                    <div class="example-form example-form_after">
                        <form action="{{action('Vendor_Dashboard\VdBlogController@store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
                        @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3>Add Blogs</h3>
                                        <hr>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label" for="title">Title</label>
                                            <input id="title" name="title" type="text" placeholder="Title" class="form-control" data-valuemissing="Please enter a title." required="">
                                        </div>
                                    </div>




                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                                        <hr>
                                    </div>
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label">Select Category</label>
                                            <select class="wide" name="category" id="category" style="display: none;" data-valueMissing="Please select a category." required>
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label">Select Image</label>
                                            <input id="filebutton" name="image" class="btn btn-primary btn-block" type="file" data-valuemissing="Please select a Image." required="">
                                        </div>
                                    </div><div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="form-group">
                                            <label class="control-label">Description</label>
                                            <textarea rows="12" id="description" name="description" placeholder="Enter Description" class="form-control" data-valuemissing="Please enter your description." required="" spellcheck="false"></textarea>
                                        </div>
                                    </div>







                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <button type="submit" name="singlebutton" class="btn btn-default">Publish</button>
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
