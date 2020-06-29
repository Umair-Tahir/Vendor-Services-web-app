<?php

namespace App\Http\Controllers\Front_End;
use App\Http\Controllers\Controller;
use App\Service;
use App\Vendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FeVendorController extends Controller
{
    public function index()
    {
        //return view('front_end.vendor.vendor-form');
    }

    public function show_vendor($id)
    {
        $vendor= Vendor::find($id);
        $services=$vendor->services;
        return view('front_end.vendor.single_vendor',['vendor'=>$vendor,'services'=>$services]);
       // dd($vendor);
    }

     public function show($id)
    {
        // $vendor= Vendor::find($id);
        // return view('front_end.vendor.single_vendor',['vendor'=>$vendor]);
       // dd($vendor);
    }

    public function search(Request $request)
    {
    dd($request);
    }
}
