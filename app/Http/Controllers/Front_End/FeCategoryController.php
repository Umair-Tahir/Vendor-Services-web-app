<?php

namespace App\Http\Controllers\Front_End;
use App\Http\Controllers\Controller;
use App\Category;
use App\Service;
use App\City;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::orderBy('name','asc')->paginate(9);
       // dd($categories);
        return view('front_end.category.all_cat')->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // dd('in');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        
        $category =Category::whereName($name)->first();  //Category::find($id); //first() returns only first record
        // $find_service=Service::with('Category')->find($category->id)->id;          //finding services with category id
        // $service=Service::where('category_id',$find_service)->get();
        // return view('front_end.category.all_services',['category'=>$category],['service'=>$service]);
        $service=$category->services;
         return view('front_end.category.all_services',['category'=>$category],['service'=>$service]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $city=City::whereName($name)->first();
        $service=$city->services;
        return view('front_end.category.all_city_services',['city'=>$city],['service'=>$service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
