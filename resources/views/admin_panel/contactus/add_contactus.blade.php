@extends('admin_panel.inc.master')

<head>
    @section('title')
        Add Company Info
    @endsection
</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cities</li>
            <li class="breadcrumb-item active" aria-current="page">Add-City</li>
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
                        <strong class="card-title">Add Company Info</strong>
                    </div>
                    <div class="card-body">

                        <div>
                            <div class="card-body">
                                <div class="example-form example-form_after">
                                    <form action="{{action('ContactusController@store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">Email</label>
                                            <input placeholder="Enter Email" name="email" type="text" class="form-control cc-name valid" data-valueMissing="Please enter a email." required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">Title</label>
                                            <input placeholder="Title" name="title" type="text" class="form-control cc-name valid" data-valueMissing="Please enter a title." required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">City</label>
                                            <input placeholder="The birth city of company" name="city" type="text" class="form-control cc-name valid" data-valueMissing="Please enter a city." required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">Tell users what do you do</label>
                                            <input placeholder="Tell users what do you do" name="description" type="text" class="form-control cc-name valid" data-valueMissing="Please enter Tell users what do you do." required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">Number of Team Members</label>
                                            <input placeholder="10" name="team" type="number" class="form-control cc-name valid" data-valueMissing="Please enter Number of Team Members." required>
                                        </div>
                                        <div class="form-group has-success">
                                            <label class="control-label mb-1">Date</label>
                                            <input placeholder="When your company was fonded" name="founded" type="date" max="2020-01-24" class="form-control cc-name valid" data-valueMissing="Please enter a date." required>
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
