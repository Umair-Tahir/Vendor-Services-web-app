<!doctype html>
<html lang="en">

@include('front_end.inc.vendor_nav')
@include('front_end.inc.navbar')


<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Events Bash @yield('title')</title>


    <link rel="stylesheet" href="{{asset('css/master/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/fontawesome-all.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/fontello.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/fonts.googleapis.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/owl.carousel.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/owl.theme.default.css")}}" >
    <link rel="stylesheet" href="{{asset("css/fe/style.css")}}" >
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('ccs/fe/fe-images/favicon.ico')}}">
    @yield('styles')
</head>
<body>
<div>



@yield('content')
<br><br><br>        <!-- content and footer joins if this is not added  -->
@include('front_end.inc.footer')
<!-- /.tiny-footer-section -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
</div>
<script src="{{asset('js/master/jquery.min.js')}}"></script>
<script src="{{asset('js/master/bootstrap.min.js')}}"></script>
<script src="{{asset('js/fe/menumaker.min.js')}}"></script>
<script src="{{asset('js/fe/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/fe/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('js/fe/fastclick.js')}}"></script>
<script src="{{asset('js/fe/custom-script.js')}}"></script>
<script src="{{asset('js/fe/return-to-top.js')}}"></script>
@yield('scripts')

</body>
</html>
