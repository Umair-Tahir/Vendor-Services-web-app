@extends('admin_panel.inc.master')

<head>
    @section('title')
        Categories
    @endsection
</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Categories</li>
        </ol>
    </nav>
@endsection

@section('content')
        <!-- Content -->
        <div class="container">
        <div class="row">
        <div class="col-sm-2"></div> <!--Change-->
        <div class="col-sm-8"><br><br> <!--Change-->
        <div class="card">
                <div class="card-header">
                    <a href="categories/create"><button class="btn btn-primary">Add Category</button></a>
                </div>
                <div class="card-body">
                @if(count($categories)>0)
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sr.</th> <!--Change-->
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <th>{{$category->name}}</th>
                                <td>
                                    <div class="btn-group">
                                    <!--Edit-->
                                    <form action="{{action('CategoryController@edit', $category->id)}}" method="post" >
                                    @method('GET')
                                    @csrf
                                    <button class="btn btn-outline-primary btn-sm"><i style="font-size: 20px;" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>&nbsp
                                    </form>
                                    <!--Delete-->
                                    <form action="{{action('CategoryController@destroy', $category->id)}}" method="post" >
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-outline-danger btn-sm"><i style="font-size: 20px;" class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                       </tbody>
                        @endforeach
                    </table>
                    {{$categories->links()}}
                    @else
                        <h2 class="alert alert-danger">No Data has been Added</h2>
                    @endif
                </div>
                </div>
            </div>
</div>
<div class="col-sm-2"></div> <!--Change-->
</div>
</div>
@endsection




