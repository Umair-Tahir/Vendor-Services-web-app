<!doctype html>
<html lang="en">
<head>

        <title>Admin Sign In</title>

    <link rel="stylesheet" href="{{asset('css/master/bootstrap.min.css')}}" >
    <link rel="stylesheet" href="{{asset("css/style.css")}}" >
    <link rel="stylesheet" href="{{asset("css/animate.min.css")}}" >



</head>
<body>

    <div class="container w-75  p-1 ">
        <div class="login-form">
            <form action="{{action('AdminController@login')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div><img src="{{asset('images/24px.svg')}}"></div>
                <h4 class="modal-title">Admin Portal</h4>

                @include('admin_panel.inc.msg')
                <div class="col-md-4"></div>
                <div class="form-group">
                    <input type="text" name="username" value="{{old('username')}}" class="form-control col-md-4" placeholder="Username" >
                </div>
                <div class="col-md-4"></div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control col-md-4" placeholder="Password" >
                </div>
                <div class="col-sm-5"></div>
                <input type="submit" class="btn btn-primary btn-block btn-lg col-md-2" value="Login">
{{--                <div class="form-group">--}}
{{--                    <div class="col-sm-5"></div>--}}
{{--                        <a href="#" class="forgot-link">Forgot Password?</a>--}}
{{--                </div>--}}
        </form>
</div>
</div>

</body>
</html>
