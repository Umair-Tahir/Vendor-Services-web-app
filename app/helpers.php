<?php
use App\Category;
use App\Service;
use App\City;
use App\Blog;
use App\Vendor;
function categories()
{
    $nav_categories=Category::orderBy('name','asc')->take(5)->get();           //showing Categories on navbar all()->take(5)
    return($nav_categories);

}

function cities()
{
    $nav_cities=City::orderBy('name','asc')->take(5)->get();
    return($nav_cities);
}


function blogs()
{
    $nav_blogs=Blog::orderBy('created_at','asc')->take(5)->get();
    return($nav_blogs);
}
function bl_categories()
{
    $blog_categories=Category::get()->take(5);           //showing Categories on navbar all()->take(5)
    return($blog_categories);

}



function services()
{
    $nav_services=Service::orderBy('title','asc')->take(5)->get();
    return($nav_services);
}

function vd_cities()
{
    $nav_cities=City::orderBy('name','asc')->get();
    return($nav_cities);
}
function count_ser()
{
    $services=Service::all();
    $count = count($services);
  return $count;

}
function count_ven()
{
    $vendors=Vendor::all();
    $count2 = count($vendors);
    return $count2;

}
function count_cat()
{
    $categories=Category::all();
    $count3 = count($categories);
    return $count3;

}

