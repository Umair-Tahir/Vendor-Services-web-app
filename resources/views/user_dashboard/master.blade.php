<!doctype html>
<html lang="en">

@include('user_dashboard.inc.left_panel')
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>User @yield('title')</title>


    <link rel="stylesheet" href="{{asset('css/master/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset("css/fe/fontawesome-all.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/fontello.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/fonts.googleapis.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/summernote-bs4.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/user-style.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/offcanvas.css")}}" >
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('ccs/fe/fe-images/favicon.ico')}}">
    @yield('styles')
</head>
<body>
<div>


@include('user_dashboard.inc.msg')
    @yield('content')
    <br><br><br>        <!-- content and footer joins if this is not added  -->

<!-- /.tiny-footer-section -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
</div>
<script src="{{asset('js/master/jquery.min.js')}}"></script>
<script src="{{asset('js/fe/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/fe/menumaker.min.js')}}"></script>
<script src="{{asset('js/fe/custom-script.js')}}"></script>
<script src="{{asset('js/fe/offcanvas.js')}}"></script>
<script src="{{asset('js/fe/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/fe/fastclick.js')}}"></script>

@yield('scripts')

</body>
</html>
