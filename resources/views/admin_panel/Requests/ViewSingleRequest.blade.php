@extends('admin_panel.inc.master')


<head>
    @section('title')
      Admin Home
    @endsection
</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Service</li>
            <li class="breadcrumb-item active" aria-current="page">View-Service</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<div class="card">
   <div class="card-header">
      <strong class="card-title pl-2">Service Details</strong>
   </div>
   <div class="card-header">
      <img class="card-img-top" src="https://qph.fs.quoracdn.net/main-qimg-9b18a9ba220937fd47608fe6593c9e36" style="width: 500;height:270;display: block;margin-left: auto; margin-right: auto;" alt="Card image cap">
   </div>
   <div class="card-body">
    <div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <i class="fa fa-tumblr-square"></i> Title <span class="pull-right">bla bla bla</span>
         </li>
         <li class="list-group-item">
            <i class="fa fa-map-marker"></i> Address <span class="pull-right">bla bla bla</span>
         </li>
        <li class="list-group-item">
            <i class="fa fa-picture-o"></i> City <span class="pull-right">bla bla bla</span>
         </li>
        <li class="list-group-item">
            <i class="fa fa-list"></i> Category <span class="pull-right">bla bla bla</span>
         </li>
         <li class="list-group-item">
            <i class="fa fa-user"></i> Vendor <span class="pull-right">bla bla bla</span>
         </li>
          <!--  <li class="list-group-item">
            <i class="fa fa-user"></i> Postal Code <span class="pull-right">15000</span>
         </li>  -->
         <li class="list-group-item">
            <i class="fa fa-comment"></i> Description <span class="pull-right r-activity"> bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla blabla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla</span>
         </li>
      </ul>
      </div>
      <hr>
      <div class="card-text text-sm-center">
          <h5>Find us on</h5>
         <a href="#"><i class="fa fa-facebook pr-1"></i></a>
         <a href="#"><i class="fa fa-twitter pr-1"></i></a>
         <a href="#"><i class="fa fa-youtube pr-1"></i></a>
      </div>
   </div>
</div>
</div>
<div class="col-sm-2"></div>
</div>
</div>
@endsection