@extends('admin_panel.inc.master')


<head>
@section('title')
    Cities
@endsection


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Admin Portal">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">

</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Cities</li>
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
                    <a href="{{action('CityController@create')}}"><button class="btn btn-primary">Add Cities</button></a>
                </div>
                <div class="card-body">
                @if(count($cities)>0)
                <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-dark">
                    <tr>
                        <th scope="col">Sr</th> <!--Change-->
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                        <tbody>
                            @foreach($cities as $city)
                            <tr>
                                <th style='vertical-align:middle;' scope="row">{{$loop->iteration}}</th>
                                <td style='vertical-align:middle;'>{{$city->name}}</td>
                                <td style='vertical-align:middle;'><img src="/upload-images/{{$city->image}}" style="width:100%;max-width:175px;height:auto;" width="600" height="400"></td>
                                <td style='vertical-align:middle;'>
                                    <div class="btn-group">
                                    <!--Edit-->
                                    <form action="{{action('CityController@edit', $city->id)}}" method="post" >
                                    @method('GET')
                                    @csrf
                                    <button class="btn btn-outline-primary btn-sm"><i style="font-size: 20px;" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>&nbsp
                                    </form>
                                    <!--Delete-->
                                    <form action="{{action('CityController@destroy', $city->id)}}" method="post" >
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
                    {{$cities->links()}}
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




