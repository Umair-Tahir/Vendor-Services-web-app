<?php

namespace App\Http\Controllers\Front_End;
use App\Blog;
use App\Http\Controllers\Controller;

use App\Category;
use App\City;
use App\Service;
use Illuminate\Http\Request;

class FeHomeController extends Controller
{
        public function index()
        {
            $categories=Category::all();
            $cities=City::all()->take(6);
            $services=Service::all()->take(6);;
           $blogs=Blog::all()->take(6);

            return view('front_end.home',compact('services','cities','categories','blogs'));
        }

        public function contactus()
        {
            return view('front_end.contact_us');
        }
}
//['categories'=>$categories],['cities'=>$cities],['services'=>$services]
