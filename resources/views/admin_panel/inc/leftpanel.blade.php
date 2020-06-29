@yield('leftpanel')


<!-- Left Panel -->
<aside id="left-panel" style="overflow-x: visible;overflow-y: visible;" class="left-panel" style="padding-top: 15;position: relative;">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#"><img src="{{asset('images/logo.png')}}" alt="Logo"></a>
            <a class="navbar-brand hidden" href="#"><img style="opacity: 60%;" src="{{asset('images/admin-logo.png')}}" alt="Logo"></a>
        </div>


        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="{{action('AdminController@home')}}"> <i class="menu-icon fa fa-home"></i>Home</a>
                </li>

                <h3 class="menu-title">Admin Pages</h3><!-- /.menu-title -->

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Vendors</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus-square-o"></i><a href="{{action('VendorController@create')}}">Add Vendor</a></li>
                        <li><i class="fa fa-list"></i><a href="{{action('VendorController@index')}}">List Vendors</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Services</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus-square-o"></i><a href="{{action('ServiceController@create')}}">Add Service</a></li>
                        <li><i class="fa fa-list"></i><a href="{{action('ServiceController@index')}}">List Services</a></li>
                    </ul>
                </li>



                <li>
                    <a href="{{action('CityController@index')}}"> <i class="menu-icon fa fa-picture-o"></i>Cities </a>
                </li>

                <li>
                    <a href="{{action('CategoryController@index')}}"> <i class="menu-icon fa fa-th-large"></i>Categories </a>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Promotions</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus-square-o"></i><a href="{{action('VendorController@create')}}">Add Promotion</a></li>
                        <li><i class="fa fa-list"></i><a href="{{action('VendorController@index')}}">View Promotion</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bold"></i>Blogs</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus-square-o"></i><a href="{{action('BlogController@create')}}">Create Blogs</a></li>
                        <li><i class="fa fa-list"></i><a href="{{action('BlogController@index')}}">View Blogs</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="{{action('ContactusController@index')}}"  aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fire"></i>Company info</a>
                </li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
