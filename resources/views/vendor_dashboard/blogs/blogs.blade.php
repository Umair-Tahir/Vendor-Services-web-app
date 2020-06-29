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
                                    <h3 class="dashboard-page-title">Your Created Blogs</h3>
                                    <p>Below is the listing of all your blogs.</p>
                                </div>
                            </div>
                        </div>
                    @if(count($blogs)>0)
                        <div class="dashboard-filter-row mb20">
                            <div class="row">
                                <div class="col-xl-3">
                                    <a href="{{action('Vendor_Dashboard\VdBlogController@create')}}" class="btn btn-default btn-sm">Add New Blog</a>
                                </div>
                            </div>
                        </div>

                   
                        <div class="card request-list-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>no</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Created On</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td class="requester-name">{{$blog->title}}</td>
                                        <td class="wedding-date">{{$blog->category->name}}</td>
                                        <td class="requester-id">{{$blog->created_at->format('d-M-Y') }}</td>
                                        <td class="requester-action">
                                     <form action="{{action('Vendor_Dashboard\VdBlogController@show', $blog->id)}}" method="post" >
                                                @method('GET')
                                                @csrf
                                            <button style="height: 50%;" class="btn btn-outline-secondary btn-xs mr10"><i style="font-size: 20px;" class="fa fa-eye fa-2x" aria-hidden="true"></i></button>
                                            </form>
                                            <form action="{{action('Vendor_Dashboard\VdBlogController@edit', $blog->id)}}" method="post" >
                                                @method('GET')
                                                @csrf
                                                <button style="height: 50%;" class="btn btn-outline-violate btn-xs mr10"><i style="font-size: 20px;" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i></button>
                                            </form>
                                            <form action="{{action('Vendor_Dashboard\VdBlogController@destroy', $blog->id)}}" method="post" >
                                                 @method('DELETE')
                                                    @csrf
                                                <button style="height: 50%;" class="btn btn-outline-pink btn-xs "><i style="font-size: 20px;" class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                                            </form>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                         @else
                            <a href="{{action('Vendor_Dashboard\VdBlogController@create')}}"><button class="btn btn-primary">Add Blog</button></a><!--if no Blog is created-->
                       @endif
                    </div>
                </div>
            </div>
        </div>


@endsection
