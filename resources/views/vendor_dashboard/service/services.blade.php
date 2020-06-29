@extends('vendor_dashboard.vd_master')

@section('title')
    - Dashboard
@endsection

@section('content')
<div class="dashboard-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h3 class="dashboard-page-title">View Services</h3>
                                    <p>Below is the listing of your services.</p>
                                </div>
                            </div>
                        </div>
                        <a href="{{action('Vendor_Dashboard\VdserviceController@create')}}">
                        <button type="submit" class="btn btn-danger">Add service</button>
                            @if(count($services)>0)
                        <div class="dashboard-filter-row mb20">
                            <div class="row">

                            </div>
                        </div>

                        <div class="card request-list-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Title</th>
                                        <th>City</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($services as $service)
                                <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$service->title}}</td>
                                        <td>{{$service->city->name}}</td>
                                        <td>{{$service->category->name}}</td>
                                        <td>
                                            <form action="{{action('Vendor_Dashboard\VdserviceController@show', $service->id)}}" method="post" >
                                                 @method('GET') 
                                                @csrf
                                            <button style="height: 50%;" class="btn btn-outline-secondary btn-xs mr10"><i style="font-size: 20px;" class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                                            </form>
                                            <form action="{{action('Vendor_Dashboard\VdserviceController@edit', $service->id)}}" method="post" >
                                                @method('GET')
                                                @csrf
                                                <button style="height: 50%;" class="btn btn-outline-violate btn-xs mr10"><i style="font-size: 20px;" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                                            </form>
                                            <form action="{{action('Vendor_Dashboard\VdserviceController@destroy', $service->id)}}" method="post" >
                                                @method('Delete')
                                                @csrf
                                                <button style="height: 50%;" class="btn btn-outline-pink btn-xs "><i style="font-size: 20px;" class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                                            </form>

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                                @else
                                <h2>Add Services To Get Listed</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    @endsection
