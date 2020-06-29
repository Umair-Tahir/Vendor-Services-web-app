@extends('admin_panel.inc.master')

<head>
@section('title')
    Blogs
@endsection

</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vendors</li>
            <li class="breadcrumb-item active" aria-current="page">Blogs</li>
        </ol>
    </nav>
@endsection

@section('content')
        <!-- Content -->
        <div class="container">
        <div class="row">
        <div class="col-sm-1"></div> <!--Change-->
        <div class="col-sm-10"><br><br> <!--Change-->
        <div class="card">
                <div class="card-header">
                    <a href="{{action('BlogController@create')}}"><button class="btn btn-primary">Add Blog</button></a>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                   @if(count($blogs)>0)
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Title</th>
                                <th scope="col">Auther</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <th style='vertical-align:middle;' scope="row">{{$loop->iteration}}</th>
                                <td style='vertical-align:middle;'>{{$blog->title}}</td>
                                <td style='vertical-align:middle;'>{{$blog->user->username}}</td>
                                <td style='vertical-align:middle;'>
                                    <div class="btn-group">
                                    <!--View-->
                                    <form action="{{action('BlogController@show',[$blog->id])}}" method="post" >
                                    @method('GET')
                                    @csrf
                                    <button class="btn btn-outline-secondary btn-sm"><i style="font-size: 20px;" class="fa fa-eye" aria-hidden="true"></i></button>&nbsp
                                    </form>
                                    <!--Edit-->
                                    <form action="{{action('BlogController@edit',[$blog->id])}}" method="post" >
                                    @method('Get')
                                    @csrf
                                    <button class="btn btn-outline-primary btn-sm"><i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></button>&nbsp
                                    </form>
                                    <!--Delete-->
                                    <form action="{{action('BlogController@destroy',[$blog->id])}}" method="post" >
                                    @method('Get')
                                    @csrf
                                    <button class="btn btn-outline-danger btn-sm"><i style="font-size: 20px;" class="fa fa-trash" aria-hidden="true"></i></button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <h2>No Blogs Added</h2>
                    @endif
                </div>
                </div>
            </div>
</div>
<div class="col-sm-1"></div> <!--Change-->
</div>
</div>
@endsection
