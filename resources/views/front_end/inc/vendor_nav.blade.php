@yield('vendor_nav')



<!-- Vendor Navbar -->
<div class="header-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-6 col-6 d-none d-xl-block d-lg-block d-md-block">
                <div class="header-text">
                    <p class="wlecome-text">Welcome to Events Bash</p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-sm-6 col-md-6 col-sm-12 col-12">
                <div class="header-text text-right">
                    <p>Are You Vendor? <a href="{{action('Vendor_Dashboard\VdvendorController@index')}}" class="text-white">List Your Business</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
