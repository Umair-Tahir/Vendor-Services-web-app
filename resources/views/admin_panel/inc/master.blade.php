<!doctype html>
<html lang="en">
@include('admin_panel.inc.leftpanel')
<a id="menuToggle" style="margin-left: -15;padding-top: 15; margin-top: 5;" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
@include('admin_panel.inc.navbar')
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>@yield('title')</title>
    <link rel="icon" href="{!! asset('css/fe/fe-images/favicon.ico') !!}"/>

    <link rel="stylesheet" href="{{asset('css/master/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset("css/master/cs-skin-elastic.css")}}" >
    <link rel="stylesheet" href="{{asset("css/style.css")}}" >
    <link rel='stylesheet' type='text/css' href="{{asset("fonts/OpenSans.css")}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.css")}}" >
    <link rel="stylesheet" href="{{asset('css/master/navbar-style.css')}}" >
    @yield('styles')
    <script src="{{asset('js/master/jquery.min.js')}}"></script>
    <script src="{{asset('js/master/popper.min.js')}}"></script>
    <script src="{{asset('js/master/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/master/main.js')}}"></script>
    <script src="{{asset('js/master/jquery-3.4.1.min.js')}}"></script>
    @yield('scripts')
</head>
<body>
<div>
    @yield('breadcrumb-nav')
    @include('admin_panel.inc.msg') <!--Change-->
    @yield('content')
</div>
</body>
</html>