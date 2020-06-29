@extends('admin_panel.inc.master')

<head>
@section('title')
    Vendors
@endsection

</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vendors Requests</li>
        </ol>
    </nav>
@endsection

@section('styles')
    <style type="text/css">
        body{
    background:#FAFAFA;    
}
/*==================================================
  Nearby People CSS
  ==================================================*/

.people-nearby .google-maps{
  background: #f8f8f8;
  border-radius: 4px;
  border: 1px solid #f1f2f2;
  padding: 20px;
  margin-bottom: 20px;
}

.people-nearby .google-maps .map{
  height: 300px;
  width: 100%;
  border: none;
}

.people-nearby .nearby-user{
  padding: 20px 0;
  border-top: 1px solid #f1f2f2;
  border-bottom: 1px solid #f1f2f2;
  margin-bottom: 20px;
}

img.profile-photo-lg{
  height: 85px;
  width: 85px;
  border-radius: 8%;
}

    </style>
    <style type="text/css">
        @media only screen and (max-width: 780px) {
    #panel-6-1-1-0 > .panel-widget-style,
    #panel-6-2-1-0 > .panel-widget-style,
    #panel-6-3-1-0 > .panel-widget-style {
        padding: 0 !important;
    }

    #pgc-6-4-0,
    #pgc-6-4-1,
    #pgc-6-4-2 {
        margin-bottom: 0 !important;
    }
}
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="card">
                        <div class="card-header">
                            <strong class="card-title pl-2">Service Creation Requests</strong>
                        </div>
                        <div class="card-body">
                        <div class="people-nearby">
                        
                        <div class="nearby-user">
                            <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWaY8BlSTbu_OvNANRY-v4VVH-rVckM4Ms-UY7Amwn3Bb8QIZ6&s" alt="user" class="profile-photo-lg">
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <h5><a href="/single_request" class="profile-link">Service Title</a></h5>
                                <p>Vendor</p>
                                <p class="text-muted">Category</p>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <button style="margin-bottom: 8px;" class="btn btn-primary btn-sm">Accept</button>
                                <button style="margin-bottom: 8px;" class="btn btn-danger btn-sm">Reject</button>
                            </div>
                            </div>
                        </div>
                        <div class="nearby-user">
                            <div class="row">
                            <div class="col-md-2 col-sm-2">
                                <img src="https://wedid.in/wp-content/uploads/2018/03/corporate-events-.jpg" alt="user" class="profile-photo-lg">
                            </div>
                            <div class="col-md-7 col-sm-7">
                                <h5><a href="/single_request" class="profile-link">Service Title</a></h5>
                                <p>Vendor</p>
                                <p class="text-muted">Category</p>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <button style="margin-bottom: 8px;" class="btn btn-primary btn-sm">Accept</button>
                                <button style="margin-bottom: 8px;" class="btn btn-danger btn-sm">Reject</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    </div>
                </div>
</div>
</div>
</div>
</div>
@endsection