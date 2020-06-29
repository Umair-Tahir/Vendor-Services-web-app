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
            <li class="breadcrumb-item active" aria-current="page">Vendors</li>
            <li class="breadcrumb-item active" aria-current="page">View-Vendor</li>
        </ol>
    </nav>
@endsection

@section('content')
<div class="col-sm-3"></div>
<div class="col-sm-6">
<aside class="profile-nav alt">
   <section class="card">

      <div class="card-header user-header alt bg-dark">
         <div class="media">
            <a href="">
            <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="/upload-images/{{$vendor->user->image}}">
            </a>
            <div class="media-body">
               <h2 class="text-light display-6">{{$vendor->user->username}}</h2>
            </div>
         </div>
      </div>
      <ul class="list-group list-group-flush">
         <li class="list-group-item">
            <i class="fa fa-user"></i> Name <span class="pull-right">{{$vendor->name}}</span>
         </li>
         <li class="list-group-item">
            <i class="fa fa-phone"></i> Mobile <span class="pull-right">{{$vendor->country_code}}-{{$vendor->company_code}}-{{$vendor->phone_number}}</span>
         </li>
         <li class="list-group-item">
            <i class="fa fa-envelope"></i> Email <span class="pull-right">{{$vendor->user->email}}</span>
         </li>
         <li class="list-group-item">
            <i class="fa fa-comment"></i> Description <span class="pull-right r-activity">{{$vendor->description}}</span>
         </li>
      </ul>
   </section>
</aside>
</div>
<div class="col-sm-3"></div>
@endsection
