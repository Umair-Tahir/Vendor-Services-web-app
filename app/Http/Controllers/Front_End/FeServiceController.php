<?php

namespace App\Http\Controllers\Front_End;
use App\Http\Controllers\Controller;

use App\Service;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FeServiceController extends Controller
{
    public function index()
    {
        $services=Service::paginate(5);
        return view('front_end.vendor.vendor_listing',['services'=>$services]);
    }

    //showing a specific service from Front End navbar
    public function show($name)
    {
        $service =Service::where('title',$name)->first(); //DB::table('services')->where('title', $name)->first();
      // dd($service);
//        return view('front_end.category.fecategory',['service'=>$service]);
        $s_services=Service::where('category_id',$service->category_id)->get()->take(4);
        return view('front_end.vendor.single_service',['service'=>$service,'s_services'=>$s_services]);
    }

}
