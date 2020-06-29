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
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
            <li class="breadcrumb-item active" aria-current="page">View-Blog</li>
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
      <strong class="card-title pl-2">View Blog</strong>
   </div>
   <div class="card-header">
      <img class="card-img-top" src="/upload-images/{{$blog->image}}" style="width: 500;height:270;display: block;margin-left: auto;margin-right: auto;" alt="Card image cap">
   </div>
   <div class="card-body">
    <div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">
            <i class="fa fa-tumblr-square"></i> Title <span class="pull-right">{{$blog->title}}</span>
         </li>
         <li class="list-group-item">
            <i class="fa fa-user"></i> User <span class="pull-right">{{$blog->user->username}}</span>
         </li>
        <li class="list-group-item">
            <i class="fa fa-list"></i> Category <span class="pull-right">{{$blog->category->name}}</span>
         </li>
         <li class="list-group-item">
            <i class="fa fa-comment"></i> Description <span class="pull-right r-activity">{{$blog->description}}</span>
         </li>
      </ul>
      </div>
   </div>
</div>
</div>
<div class="col-sm-2"></div>
</div>
</div>
@endsection
