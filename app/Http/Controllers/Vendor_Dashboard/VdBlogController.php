<?php


namespace App\Http\Controllers\Vendor_Dashboard;
use App\Category;
use App\City;
use App\Service;
use App\Http\Controllers\Controller;
use App\Vendor;
use App\User;
use App\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class VdBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role==2){
            $user=$user_id=Auth::user();
            $blogs=$user->blogs;            //getting signed in vendor all blogs
            return view('vendor_dashboard.blogs.blogs',['blogs'=>$blogs]);
        }
        else
            return view('vendor_dashboard.vendor.vendor_signin');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role==2){
            $categories=Category::all();
            return view('vendor_dashboard.blogs.addblog',['categories'=>$categories]);
        }
        else
            return view('vendor_dashboard.vendor.vendor_signin');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request);
        $error_msg =[
            'image:max'=> 'cover image size exceeded from limit',
        ];
        $this->validate($request,[
            'category'=>'required',
            'title'=>'required',
            'description'=>'required|max:2500|min:10',
            'image'=> 'image|mimes:jpeg,png,jpg|required',
        ],$error_msg);

        $user_id=Auth::user()->id;      //getting signed in vendor id to store in user_id

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
            'user_id'=>$user_id,
            'image'=>$Imgfile,
        ]);

        $blog->save();
        return redirect('Vendor/Blog')->with('success','Blog Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->role==2){
            $blog=Blog::find($id);
            //return view('vendor_dashboard.blogs.editblog',['blog'=>$blog]);
            dd('view blog');
        }
        else
            return view('vendor_dashboard.vendor.vendor_signin');




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(Auth::user()->role==2){
        $blog=Blog::find($id);
        $categories=Category::all();
        return view('vendor_dashboard.blogs.editblog',['blog'=>$blog,'categories'=>$categories]);
    }
    else
        return view('vendor_dashboard.vendor.vendor_signin');



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
            'category'=>'required',
            'title'=>'required',
            'description'=>'required|max:500|min:10',
            'image'=> 'image|mimes:jpeg,png,jpg',
        ],$error_msg);

        $blog=Blog::find($id);
        $blog->title=$request->input('title');
        $blog->description=$request->input('description');
        $blog->category_id=$request->input('category');

        //Image Upload Handling
        if($request->hasFile('image'))
        {
            //Seperating extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //To prevent from same filename in DB
            $Imgfile= time().'.'.$extension;
            //For deleting old image on update
            $oldimg= "upload-images/".$blog->img;

            //Image Upload
            $path =$request->file('image')->move('upload-images/', $Imgfile);
            // $path =$request->file('image')->storeAs('upload-images/cover_img', $Imgfile);

            //saving image to city image field
            $blog->image=$Imgfile;
            //deleting old image on uploading new image
            File::delete($oldimg);
        }
        $blog->save();
        return redirect('Vendor/Blog')->with('success','Blog Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role==2){
            $blog=Blog::find($id);
            $img="upload-images/".$blog->image;
            File::delete($img);
            $blog->delete();

            return redirect('Vendor/Blog');
        }
        else
            return view('vendor_dashboard.vendor.vendor_signin');

    }
}
