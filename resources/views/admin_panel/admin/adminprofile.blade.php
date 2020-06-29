@extends('admin_panel.inc.master')

<head>
    @section('title')
        Profile
    @endsection
</head>
@section('content')


<!--
<br><br>
    <div class="container-fluid ">
        <div class="col-sm-1"></div>
        <img src="//placehold.it/150" class="m-x-auto img-fluid" alt="...">

        <form action="#" >
            <br>
        <div class="float">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="1" placeholder="Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-7">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
                </div>
        </form>
    </div>
    -->

<div class="container py-4 my-2">
    <div class="row">
        <div class="col-md-4 pr-md-5">
            <img class="w-100 rounded border" src="images/admin 2.jpg" />
            <div class="pt-4 mt-2">
                <section class="mb-4 pb-1">
                    <h3 class="h3 font-weight-bold text-secondary text-uppercase">Bash Events</h3>
                            <strong class="h6 d-block text-danger mb-1">Admin 1</strong>
                </section>
            </div>
        </div>

        <div class="col-md-8">
            <section class="mt-4">

                <div class="tab-content py-4" id="myTabContent">
                    <div class="tab-pane py-3 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h6 class="h5 text-primary mt-2 d-block font-weight-light">
                            Contact Information
                        </h6>
                        <dl class="row mt-4 mb-4 pb-3">
                            <dt class="col-sm-3">Phone</dt>
                            <dd class="col-sm-9">+92 300 1234567</dd>
                            </dd>

                            <dt class="col-sm-3">Email address</dt>
                            <dd class="col-sm-9">
                                <a href="mailto:aang.is.kefy@gmail.com">demo@gmail.com</a>
                            </dd>
                        </dl>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



    @endsection