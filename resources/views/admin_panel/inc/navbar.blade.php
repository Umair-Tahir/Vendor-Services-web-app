@yield('navbar')


<div class="mynav">
<div class="light bg-dark">

<ul class="nav justify-content-end" style="height: 60;padding-top: 5;padding-right: 50;">
  <ul class="nav nav-tabs" style="border-bottom: 0px;">

    <li class="nav-item">
      <div style="padding-right: 30;">
        <ul class="nav nav-pills card-header-pills">
          <li class="nav-item">
            <a class="btn btn-primary nav-link active" href="{{action('Front_End\FeHomeController@index')}}"">Home</a>
          </li>
        </ul>
      </div>
    </li>

  <li class="nav-item">
    <div class="user-area dropdown float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="user-avatar rounded-circle" src="{{asset('images/admin 2.jpg')}}" alt="User Avatar">
        </a>

        <div class="user-menu dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 0px, 0px);">
            <a class="nav-link" href="/admin/profile"><i class="fa fa-user"></i> My Profile</a>

            <form action="{{action('AdminController@destroy')}}" method="post" >
            @method('POST')
            @csrf
            <button type="submit" class="btn btn-dark">Logout</button>
            </form>
        </div>
    </div>
  </li>
</ul>
</ul>
</div>
</div>
