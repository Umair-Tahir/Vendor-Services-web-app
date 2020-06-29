<?php

namespace App\Http\Controllers\Front_End;
use App\Blog;
use App\Category;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $blogs=Blog::get(5);
//
//        dd($blogs);
        $blogs= Blog::orderBy('title', 'asc')->paginate(3);
        $sblogs=Blog::orderBy('created_at', 'desc')->get()->take(3);
        return  view('front_end.blogs.all_blogs',["blogs"=>$blogs,"sblogs"=>$sblogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function show($id)
    {
        $blog=Blog::find($id);
        $sblogs=Blog::where('category_id',$blog->category_id)->get()->take(3);
        return view('front_end.blogs.single_blog',['blog'=>$blog,'sblogs'=>$sblogs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($name)
    {
        $category =Category::whereName($name)->first();
        $blogs=$category->blogs;
        return view('front_end.blogs.all_catblogs',['category'=>$category],['blogs'=>$blogs]);
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
