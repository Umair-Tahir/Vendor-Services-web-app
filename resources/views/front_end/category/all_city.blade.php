@extends('front_end.master')

@section('title')
   All Categories
@endsection


@section('content')
<body>

         <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">Top Vendor Categories</h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>

    </div>
    <!-- /.page-header -->

    <div class="content">
        <div class="container">


            
            <div class="row">
        @foreach($categories as $category)

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="vendor-thumbnail">
                        <!-- Vendor thumbnail -->
                        <div class="vendor-img zoomimg">
                            <!-- Vendor img -->
                            <a href="{{action('Front_End\FeCategoryController@show',$category->name )}}"><img style="width:349px;height:200px;" src="/upload-images/{{$category->image}}" alt="" class="img-fluid"></a>
                        </div>
                        <!-- /.Vendor img -->
                        <div class="vendor-content">
                            <!-- Vendor Content -->
                            <h2 class="vendor-title"><a href="Front_End\FeCategoryController@show',$categorycities->name )}}" class="title">{{$category->name}}</a></h2>
                        </div>

                        <!-- /.Vendor Content -->
                    </div>

                    <!-- /.Vendor thumbnail -->
                </div>

            @endforeach
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="pagination justify-content-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">{{$cities->links()}}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
@endsection

