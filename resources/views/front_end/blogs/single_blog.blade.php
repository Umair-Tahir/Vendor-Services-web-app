@extends('front_end.master')

@section('title')
   All Categories
@endsection


@section('content')
<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                    <!-- post-content -->
                    <div class="post-content-single">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="post-img zoomimg">
                                    <a href="#"><img style="height:325px;" src="/upload-images/{{$blog->image}}" alt="" class="img-fluid"></a>
                                </div>
                                <div class="post-content text-left">
                                    <h2>{{$blog->title}}</h2>
                                    <p class="meta">
                                        <span class="meta-posted-by">By <a href="#">{{$blog->user->username}}</a></span>
                                        <span class="meta-date">{{$blog->created_at->format('D M,Y')}}</span>

                                    </p>
                                    <h3>Dolor sitamet consecte</h3>
                                    <p>{{$blog->description}}</p>

                                </div>

                            </div>
                            <!-- /.social-media -->
                            <div class="col-xl-12 mt-2">
                                <div class="card card-body card-shadow-none border mb-0">

                            <h4>Share this </h4>
                            <div class="social-icons">
                                <a href="https://facebook.com" target="_blank" class="icon-square-outline facebook-outline"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com" target="_blank" class="icon-square-outline twitter-outline"><i class="fab fa-twitter"></i> </a>
                                <a href="https://plus.google.com" target="_blank" class="icon-square-outline googleplus-outline"><i class="fab fa-google-plus-g"></i></a>
                                <a href="http://www.linkedin.com" target="_blank" class="icon-square-outline linkedin-outline"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            </div>
                            </div>

                            <!-- comment-section -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <!-- comment-block -->
                                <div class="card comments-block border card-shadow-none">
                                    <div class="comments-area">
                                        <h3 class="card-header bg-white">(4) Comments</h3>
                                        <div class="card-body">
                                            <!-- comment-list -->
                                            <ul class="comment-list listnone">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                                <div class="comment-author"><img src="images/user-pic-1.jpg" alt=" " class="rounded-circle"> </div>
                                                            </div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                                                <div class="comment-info">
                                                                    <div class="comment-header">
                                                                        <h4 class="user-title">Jose Arbogast</h4>
                                                                        <div class="comment-meta"><span class="comment-meta-date">5 may, 2018</span></div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <p>Magna sem ultrices non mollis invul tateolutpat risus lorem aecenas enim lectus molestie sitamet lorem.</p>
                                                                        <div class="reply"><a href="#" class="btn btn-primary btn-xs">Reply</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.comment-list -->
                                        <!-- comment-list -->
                                        <div class="card-body border-top">
                                            <ul class="comment-list listnone">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                                <div class="comment-author"><img src="images/user-pic-2.jpg" alt=" " class="rounded-circle"> </div>
                                                            </div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                                                <div class="comment-info">
                                                                    <div class="comment-header">
                                                                        <h4 class="user-title">Angela Lawton</h4>
                                                                        <div class="comment-meta"><span class="comment-meta-date">4 may, 2018</span></div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <p>Duis imperdiet mauris sitamet lectus aliquetnec convallis risus lorem friestibulum tempor sedmi sed ullamcorper. </p>
                                                                        <div class="reply"><a href="#" class="btn btn-primary  btn-xs">Reply</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- /.comment-list -->
                                                    <!-- comment-childern-list -->
                                                    <ul class="childern listnone">
                                                        <li class="comment">
                                                            <div class="comment-body">
                                                                <div class="row">
                                                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                                        <div class="comment-author"><img src="images/user-pic-3.jpg" alt=" " class="rounded-circle"> </div>
                                                                    </div>
                                                                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                                                        <div class="comment-info">
                                                                            <div class="comment-header">
                                                                                <h4 class="user-title">Dorothy Lilly</h4>
                                                                                <div class="comment-meta">4 may, 2018</div>
                                                                            </div>
                                                                            <div class="comment-content">
                                                                                <p>Magna sem ultrices non mollis invul one lorem netlorem tenimolestie sitamet lorem.</p>
                                                                                <div class="reply"><a href="#" class="btn btn-primary btn-xs">Reply</a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- /.comment-childern-list -->
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- comment-list -->
                                        <div class="card-body border-top">
                                            <ul class="comment-list listnone">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <div class="row">
                                                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                                                                <div class="comment-author"><img src="images/user-pic-4.jpg" alt="" class="rounded-circle"> </div>
                                                            </div>
                                                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12">
                                                                <div class="comment-info">
                                                                    <div class="comment-header">
                                                                        <h4 class="user-title">Evan Parra</h4>
                                                                        <div class="comment-meta"><span class="comment-meta-date">5 may, 2018</span></div>
                                                                    </div>
                                                                    <div class="comment-content">
                                                                        <p>Magna sem ultrices non mollis invul tateolutpat risus lorem aecenlectus molestie sitamet lorem.</p>
                                                                        <div class="reply"><a href="#" class="btn btn-primary btn-xs">Reply</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <!-- /.comment-list -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.comment-section -->
                            <!-- comment-form -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="comments-reply">
                                    <div class="leave-reply ">
                                        <div class="row">
                                            <!-- comment-section -->
                                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                                                <h3>Leave A Comments</h3>
                                            </div>
                                            <!-- /.comment-section -->
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <!-- comment-reply-form -->
                                                <form class="reply-form form-row">
                                                    <!-- Textarea -->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="textarea">Message</label>
                                                            <textarea class="form-control" id="textarea" name="textarea" rows="4" placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="control-label" for="name">Name</label>
                                                            <input id="name" name="name" type="text" placeholder="" class="form-control " required="">
                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="email">E-mail</label>
                                                            <input id="email" name="email" type="text" placeholder="" class="form-control " required="">
                                                        </div>
                                                    </div>
                                                    <!-- Text input-->
                                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <label class="control-label" for="Website">Website</label>
                                                            <input id="Website" name="Website" type="text" placeholder="" class="form-control " required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <!-- Button -->
                                                        <div class="form-group">
                                                            <button id="singlebutton" name="singlebutton" class="btn btn-default">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.comment-form -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="sidebar">
                        <div class="card border card-shadow-none widget-vendor-list ">
                            <div class="card-header bg-white">
                                <div style="margin-bottom: 0px;" class="author-img"><img style="height: 100px;width: 100px;" src="/upload-images/{{$blog->user->image}}" alt="" class="rounded-circle"></div>   <h3 style="margin-top: 20px;" class="mb-0">Author</h3>
                                    <h5 class="vendor-list-title">{{$blog->user->username}}</h5>

                            </div>

<div class="card-body border-top vendor-sidebar-list">
                                <h5 class="vendor-list-title">Email:</h5>
                                <p class="vendor-list-link">{{$blog->user->email}}</p>
                            </div>







                        </div>
                        <!-- /.widget -->


                    @if(count($sblogs)>0)
                        <!-- widget-recent-post -->
                        <div style="margin-top: 60px;" class="widget widget-recent-post">
                            <h3 class="widget-title">Similar Blogs</h3>
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
                        @endif



                        <!-- widget-tags -->

                        <!-- /.widget-tags -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

