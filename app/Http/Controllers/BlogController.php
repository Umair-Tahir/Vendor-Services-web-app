<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role==1){
            $blogs=Blog::all();
            return view('admin_panel.blogs.blogs',['blogs'=>$blogs]);
        }
        else
            return view('admin_panel.admin.sign-in');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role==1){
            $users=User::all();    //->except(Auth::id());
            $categories=Category::all();
            return view('admin_panel.blogs.addblog',['users'=>$users,'categories'=>$categories]);
        }
        else
            return view('admin_panel.admin.sign-in');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $error_msg =[
            'image:max'=> 'cover image size exceeded from limit',
        ];
        $this->validate($request,[
            'username'=>'required',
            'category'=>'required',
            'title'=>'required',
            'description'=>'required|max:3000|min:10',
            'image'=> 'image|mimes:jpeg,png,jpg|required',
        ],$error_msg);

        //Image Upload Handling
        if($request->hasFile('image'))
        {
            //Seperating extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //To prevent from same filename in DB
            $Imgfile= time().'.'.$extension;

            //Image Upload
            $path =$request->file('image')->move('upload-images/', $Imgfile);
        }


        //Service creation
        $blog=new Blog([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'category_id'=>$request->input('category'),
            'user_id'=>$request->input('username'),
            'image'=>$Imgfile,
        ]);
//        dd($blog);
        $blog->save();
        return redirect('admin/blog')->with('success','Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->role==1){
            $blog=Blog::find($id);
            return view('admin_panel.blogs.viewblog',['blog'=>$blog]);
        }
        else
            return view('admin_panel.admin.sign-in');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->role==1){
            $blog=Blog::find($id);
            $users=User::all();
            $categories=Category::all();
            return view('admin_panel.blogs.editblog',['blog'=>$blog,'users'=>$users,'categories'=>$categories]);
        }
        else
            return view('admin_panel.admin.sign-in');
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

        $error_msg =[
            'image:max'=> 'cover image size exceeded from limit',
        ];
        $this->validate($request,[
            'user'=>'required',
            'category'=>'required',
            'title'=>'required',
            'description'=>'required|max:3000|min:10',
            'image'=> 'image|mimes:jpeg,png,jpg',
        ],$error_msg);

        $blog=Blog::find($id);
        $blog->title=$request->input('title');
        $blog->description=$request->input('description');
        $blog->category_id=$request->input('category');
        $blog->user_id=$request->input('user');

        //Image Upload Handling
        if($request->hasFile('image'))
        {
            //Seperating extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //To prevent from same filename in DB
            $Imgfile= time().'.'.$extension;
            //For deleting old image on update
            $oldimg= "images/upload-images/blog_images".$blog->img;

            //Image Upload
            $path =$request->file('image')->move('upload-images/', $Imgfile);
            // $path =$request->file('image')->storeAs('upload-images/cover_img', $Imgfile);

            //saving image to city image field
            $blog->image=$Imgfile;
            //deleting old image on uploading new image
            File::delete($oldimg);
        }

        $blog->save();
        return redirect('admin/blog')->with('success','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role==1){
            $blog=Blog::find($id)->get();
            dd($blog);
            return redirect('admin/blogs');
        }
        else
            return view('admin_panel.admin.sign-in');

    }
}
