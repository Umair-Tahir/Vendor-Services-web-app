@yield('navbar')


<!--/.header-top -->
<!-- header -->
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-12">
                <!-- header-logo -->
                <div class="header-logo" style="padding-top: 0px;">
                    <a href="/"><img src="{{asset('css/fe/fe-images/logo-new.png')}}" style="height: 50px;width: 128px;"></a>
                </div>
                <!-- /.header-logo -->
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
                <!-- navigations -->
                <div id="navigation">
                    <ul>
                        <li><a href="/" title="">Homepage</a>
                        </li>

                        <li><a>Vendors</a>
                            <ul>
                             <!--   {{$category= categories()}} nav() function is helper function-->

                             <!--    $loop->last-->
                                @foreach($category as $category)
                                     <li>
                                         <a href="{{action('Front_End\FeCategoryController@show',[$category->name])}}">{{$category->name}}</a>
                                     </li>
                                     @if($loop->last)  <!--Lopp to print see all at end-->
                                     <li>    <a href="{{action('Front_End\FeCategoryController@index')}}">See all ></a></li>
                                     @endif

                                @endforeach
                            </ul>
                        </li>
                        <li><a>Top Services</a>
                            <ul>
                            <!--   {{$service= services()}} nav() function is helper function-->

                                <!--    $loop->last-->
                                @foreach($service as $service)
                                    <li>
                                        <a href="{{action('Front_End\FeServiceController@show',[$service->title])}}">{{$service->title}}</a>
                                    </li>
                                    @if($loop->last)  <!--Lopp to print see all at end-->
                                    <li>    <a href="{{action('Front_End\FeServiceController@index')}}">See all ></a></li>
                                    @endif

                                @endforeach


                            </ul>
                        </li>

                        <li><a >Blog</a>
                            <ul>
                                <li><a href="#" title="">Blog Categories</a>
                                    <ul>
                                    <!--   {{$blcategory= bl_categories()}} nav() function is helper function-->

                                        <!--    $loop->last-->
                                        @foreach($blcategory as $category)
                                            <li>
                                                <a href="{{action('Front_End\FeBlogController@edit',[$category->name])}}">{{$category->name}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            <!--    {{$blogs= blogs()}} -->
                                <li><a title="">Latest Blogs</a>
                                    <ul>
                                    @foreach($blogs as $blog)

                                        <li><a href="{{action('Front_End\FeBlogController@show',[$blog->id])}}" title="">{{$blog->title}}</a></li>

                                    @endforeach
                                    </ul>
                                </li>

                                <li>    <a href="{{action('Front_End\FeBlogController@index')}}">See all </a></li>
                            </ul>
                        </li>


                    <!-- About us page to show company information-->
                        <li><a href="{{action('Front_End\FeHomeController@contactus')}}" title="">About Us</a>
                        </li>

                    <!- Contact us page to add form to contact vendor--->
                        <li><a href="#" title="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navigations -->
            </div>
            <div class="col-xl-2 col-lg-2 text-right col-md-2 col-sm-12 col-12 d-none d-xl-block d-lg-block">
                <!-- header-btn -->
                <div class="header-btn">
                    <a href="{{action('Front_End\FeUserController@index')}}" class="btn btn-primary btn-sm">Register</a>
                </div>
                <!-- /.header-btn -->
            </div>
        </div>
    </div>
</div>


<!-- /.header -->
<!-- hero-section -->
