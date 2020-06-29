<?php

namespace App\Http\Controllers;


use App\Category;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role==1){
            //$categories=Category::all();
            $categories= Category::orderBy('name', 'asc')->paginate(5);
            return view('admin_panel.category.categories',['categories'=>$categories]);
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
            return view('admin_panel.category.addcategory');
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
        //custom error message for image size
        $error_msg =[
            'max'=> ':attribute size exceeded from limit'
        ];

        $this->validate($request, [
            'name' => 'required|max:20|unique:categories,name',
            'image'=> 'image|mimes:jpeg,png,jpg|required|max:4048',
        ], $error_msg);

        //Image Upload Handling
        if($request->hasFile('image'))
        {
            //getting image with extension
            $ImgWithExt =$request->file('image')->getClientOriginalName();

            //Seperating extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //To prevent from same filename in DB
            $Imgfile= time().'.'.$extension;


            //Image Upload
            $path =$request->file('image')->move('upload-images', $Imgfile);//storeAs('upload-images/gallery_img', $Imgfile);
        }
        //Create New category
        $category= new Category ([
            'name'=>$request->input('name'),
            'image'=>$Imgfile,
        ]);
        $category->save();

        return redirect('admin/categories')->with('success', 'Category Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            $categories= Category::find($id);
            return view('admin_panel.category.editcategories',['categories'=>$categories]);
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
        //custom error message for image size
        $error_msg =[
            'max'=>':attribute size exceeded from limit'
        ];

        $this->validate($request, [
            'name' => "required|max:20|unique:categories,name, $id",
            'image'=> 'image|mimes:jpeg,png,jpg|max:4048',
        ],$error_msg);

        $category= Category::find($id);
        $category->name = $request->input('name');

        //Updated Image Upload Handling
        if($request->hasFile('image'))
        {
            //Seperating extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //To prevent from same filename in DB
            $Imgfile= time().'.'.$extension;

            //For deleting old image on update
            $oldimg= "upload-images/".$category->image;

            //Image Upload
            $path =$request->file('image')->move('upload-images/', $Imgfile);

            //saving image to city image field
            $category->image=$Imgfile;

            //deleting old image on uploading new image
            File::delete($oldimg);
        }

        //update category
        $category->save();

        return redirect('admin/categories')->with('success', 'Category Updated Successfully');
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

            $category= Category::find($id);
            $category->services()->delete();
            $img="upload-images/".$category->image;
            File::delete($img);
            $category->delete();
            return redirect('admin/categories')->with('success', 'Category Deleted Successfully');
        }
        else
            return view('admin_panel.admin.sign-in');

    }
}
