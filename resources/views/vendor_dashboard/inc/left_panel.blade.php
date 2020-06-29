@yield('leftpanel')



<div class="dashboard-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-8 col-sm-12 col-6">
                <div class="header-logo">
                    <a href="index.html"><img src="{{asset('css/fe/fe-images/logo-new.png')}}" style="height: 40px;weight: 128px;" alt="Weddings | Find A Wedding Venue &amp; Supplier WordPress Theme"></a>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-12 col-6">
                <div class="user-vendor">
                    <div class="dropdown">
                        <a class="dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="user-icon">  <img src="/upload-images/{{Auth::user()->image}}" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name">{{Auth::user()->username}}</span>
                        </a>
                        <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{action('Vendor_Dashboard\VdvendorController@home')}}">Dashboard</a>
                            <a class="dropdown-item" href="{{action('Vendor_Dashboard\VdserviceController@index',$user_id=Auth::user()->id)}}"> My Listed Item </a>
                            <form action="{{action('Vendor_Dashboard\VdvendorController@destroy')}}" method="post" >
                                @method('POST')
                                @csrf
                                <button type="submit" class="btn btn-dark" style="
                                display: block;
                                width: 100%;
                                padding: 4px 66px 4px 20px;
                                clear: both;
                                font-weight: 400;
                                color: #626262;
                                text-align: inherit;
                                white-space: nowrap;
                                background-color: transparent;
                                border: 0;
                                font-size: 14px;
                                background:none;
                                border: none;
                                color: red;">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-expand-lg">
    <button class="navbar-toggler" type="button" data-toggle="offcanvas">
        <span id="icon-toggle" class="fa fa-bars"></span>
    </button>
</div>
<div class="dashboard-wrapper">
    <div class="dashboard-sidebar offcanvas-collapse">
        <div class="vendor-user-profile">
            <div class="vendor-profile-img">
                <img src="/upload-images/{{Auth::user()->image}}" alt="" class="rounded-circle"></div>
            <h3 class="vendor-profile-name">{{Auth::user()->name}}</h3>
            <a href="#" class="edit-link">edit profile</a>
        </div>
        <div class="dashboard-nav">
            <ul class="list-unstyled">
                <li class="active"><a href="{{action('Vendor_Dashboard\VdvendorController@home')}}"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                <li><a href="{{action('Vendor_Dashboard\VdserviceController@create')}}"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Add Service</a></li>
                <li><a href="{{action('Vendor_Dashboard\VdserviceController@index',$user_id=Auth::user()->id)}}"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> View Services </a>
                <li><a href="{{action('Vendor_Dashboard\VdBlogController@create')}}"><span class="dash-nav-icon"><i class="fas fa-list-alt"></i> </span> Add Services </a>
               <li><a href="{{action('Vendor_Dashboard\VdBlogController@index')}}"><span class="dash-nav-icon"><i class="fas fa-calculator"></i></span>View Blogs</a></li>
                <li><a href="{{action('Vendor_Dashboard\VdAmenitieController@create')}}"><span class="dash-nav-icon"><i class="fas fa-edit"></i></span>Add Amenities</a></li>
            </ul>
        </div>
    </div>
</div>
