@extends('front_end.master')

@section('title')
   All Categories
@endsection


@section('content')
<body>
    <!-- page-header -->
    <div class="page-header" style="background-image:url({{url('css/fe/fe-images/blog-cover-img.jpg')}});background-size: cover;">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title" style="color: #ff4d4d;"><b>Blogs</b></h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>

    </div>

    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <div class="row">

                        @foreach($blogs as $blog)
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="post-block">
                                <!-- post vertical block -->
                                <div class="post-img zoomimg">
                                    <a href="#"><img style="height:250px;" src="/upload-images/{{$blog->image}}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="post-content">
                                    <h2><a href="#" class="post-title">{{$blog->title}}</a></h2>
                                    <p class="meta">
                                        <span class="meta-posted-by">By <a href="#">{{$blog->user->username}}</a></span>
                                        <span class="meta-date">{{$blog->created_at->format('d M,Y')}}</span>
                                    </p>
                                    <p style="line-height: 1.5em;height: 3em;overflow: hidden;">{{$blog->description}}</p>
                                </div>
                            </div>
                            <!-- /.post vertical block -->
                        </div>

                        @endforeach


                        {{$blogs->links()}}
                    </div>
                </div>
                <!-- /. blog post -->
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="sidebar">

                        <!-- widget-recent-post -->
                        <div class="widget widget-recent-post">
                            <h3 class="widget-title">Recent Post</h3>
                            <ul class="">
                            @foreach($sblogs as $sblog)
                                <!-- recent-post-block -->
                                    @if($sblog->id != $blog->id)
                                        <li>
                                            <div class="row">
                                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                                    <div class="recent-post-img">
                                                        <a href="{{action('Front_End\FeBlogController@show',[$sblog->id])}}"><img style="height: 80px;width: 90px;" src="/upload-images/{{$sblog->image}}" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8">
                                                    <div class="recent-post-content">
                                                        <h4 class="recent-title"><a href="{{action('Front_End\FeBlogController@show',[$sblog->id])}}">{{$sblog->title}}</a></h4>
                                                        <p class="meta font-italic text-default">{{$sblog->created_at->format('D M,Y')}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>






                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

