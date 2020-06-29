@extends('admin_panel.inc.master')

<head>
@section('title')
    Services
@endsection

</head>
@section('breadcrumb-nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Services</li>
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
					<a href="services/create"><button class="btn btn-primary">Add Service</button></a>
				</div>
				<div class="card-body">
                @if(count($services)>0)
				<div class="table-responsive">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">Sr.</th>
								<th scope="col">Image</th>
								<th scope="col">Title</th>
								<th scope="col">Vendor</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($services as $service)
							<tr>
								<th style='vertical-align:middle;' scope="row">{{$loop->iteration}}</th>
								<td><img src="/upload-images/{{$service->cover_image}}" style="width:100%;max-width:175px;height:auto;" width="600" height="400"></td>
								<td style='vertical-align:middle;'>{{$service->title}}</td>
								<td style='vertical-align:middle;'>{{$service->vendor->name}}</td>
								<td style='vertical-align:middle;'>
									<div class="btn-group">
                     				<!--View-->
                     				<form action="{{action('ServiceController@show', $service->id)}}" method="post" >
                         			@method('GET')
                         			@csrf
                         			<button class="btn btn-outline-secondary btn-sm"><i style="font-size: 20px;" class="fa fa-eye" aria-hidden="true"></i></button>&nbsp
                     				</form>
                     				<!--Edit-->
                     				<form action="{{action('ServiceController@edit', $service->id)}}" method="post" >
                         			@method('GET')
                         			@csrf
                         			<button class="btn btn-outline-primary btn-sm"><i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i></button>&nbsp
                     				</form>
                     				<!--Delete-->
                     				<form action="{{action('ServiceController@destroy', $service->id)}}" method="post" >
                         			@method('DELETE')
                         			@csrf
                         			<button class="btn btn-outline-danger btn-sm"><i style="font-size: 20px;" class="fa fa-trash" aria-hidden="true"></i></button>
                     				</form>
                 					</div>
								</td>
							</tr>
						</tbody>
						@endforeach
					</table>
                   {{$services->links()}}
                    @else
                        <h2>No Data has been Added</h2>
                    @endif
				</div>
				</div>
			</div>
</div>
<div class="col-sm-1"></div> <!--Change-->
</div>
</div>
@endsection
