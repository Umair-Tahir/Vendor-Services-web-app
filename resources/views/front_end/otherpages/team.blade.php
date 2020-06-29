@extends('front_end.master')

@section('title')
    Home
@endsection

@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">Meet The Team</h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
        <!-- page caption -->
        <div class="page-breadcrumb">
            <div class="container">
                <div class="row">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Pages</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Team</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- page breadcrumb -->
    </div>
    <!-- /.page-header -->
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="mb30 mt60">
                        <h2>Our Team</h2>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card-group">
                        <div class="card rounded-0 card-shadow-none">
                             
                            <img src="./images/team-member-small-1.jpg" alt="" class="img-fluid">
                            <div class="card-body border">
                                <h4 class="mb-1">Tabish</h4>
                                <small>Web Developer</small>
                            </div>
                        </div> 
                        <div class="card rounded-0 card-shadow-none">
                             
                            <img src="./images/team-member-small-2.jpg" alt="" class="img-fluid">
                            <div class="card-body border">
                                <h4 class="mb-1">Umair</h4>
                                <small>Web Developer</small>
                            </div>
                        </div>
                        <div class="card rounded-0 card-shadow-none">
                             
                            <img src="./images/team-member-small-3.jpg" alt="" class="img-fluid">
                            <div class="card-body border">
                                <h4 class="mb-1">Third Member</h4>
                                <small>Developer</small>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
