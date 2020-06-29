@yield('leftpanel')


<style type="text/css">
    .edit-link:hover { color: #000000; }
</style>
<div class="dashboard-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-10 col-lg-10 col-md-8 col-sm-6 col-6">
                <div class="header-logo">
                    <a href="index.html"><img src="" php></a>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 text-right col-md-4 col-sm-6 col-6">
                <div class="user-vendor">
                    <div class="dropdown">
                        <a class=" dropdown-toggle" id="dropdownMenuButton" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="user-icon">  <img src="{{asset('css/fe/fe-images/dashboard-profile-couple.jpg')}}" alt="" class="rounded-circle mb10"></span><span class="user-vendor-name" style="color: #ffffff;">First Name</span>
                    </a>
                        <div class=" dashboard-dropdown-menu dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{action('Front_End\FeUserController@home')}}">Dashboard</a>
                            <a class="dropdown-item" href="couple-dashboard-profile.html">My Profile </a>
                            <a class="dropdown-item" href="{{action('Front_End\FeUserController@destroy')}}">Log Out </a>
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
                <img src="{{asset('css/fe/fe-images/dashboard-profile-couple.jpg')}}" alt="" class="rounded-circle"></div>
            <h3 class="vendor-profile-name" style="color: #ffffff;">First Name</h3>
            <a href="#" class="edit-link">edit profile</a>
        </div>
        <div class="dashboard-nav">
            <ul class="list-unstyled">
                <li class="active"><a href="/user_home"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                <li><a href="/user_profile"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                <li><a href="{{action('Front_End\FeUserController@destroy')}}"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Log Out </a></li>
            </ul>
        </div>
    </div>
</div>
