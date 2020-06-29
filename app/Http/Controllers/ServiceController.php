<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Support\Facades\Auth;
use App\City;
use App\Service;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $category_id= category('id');
       // $category= Category::find($category_id);    $attendance = Attendance::with('student')->get();
        //$vendor=Service::with('vendor')->get(); ,['vendor'=>$vendor]
        //$services=Service::with('vendor')->get(); //Service::orderBy('title', 'asc')->paginate(5);
       // dd($services);

        if(Auth::user()->role==1){
            $services=Service::orderBy('title', 'asc')->paginate(5);
            return view('admin_panel.services.services',compact('services'));   //->with('services',$category->services);
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
       $categories= Category::all();
        $vendor= Vendor::all();
        $cities= City::all();
        return view('admin_panel.services.addservice', compact('categories','cities','vendor'));
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

        $error_msg =[
            'image:max'=> 'cover image size exceeded from limit',
            'gallery_image:max'=> 'gallery image size exceeded from limit'
        ];
        $this->validate($request,[
            'title'=>'required|max:30|min:2',
            'description'=>'required|max:2500|min:10',
            'latitude'=>'required',
            'longitude'=>'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg',
            'gallery_image.*'=> 'required|image|mimes:jpeg,png,jpg',
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

            //Gallery Image Upload Handling
        if($request->hasFile('gallery_image'))
        { $i=0;
            foreach ($request->file('gallery_image') as $file)
            {
                //Seperating extension
                $extension = $file->getClientOriginalExtension();

                //To prevent from same filename in DB
                $gImgfile= $i.time().'.'.$extension;

                //Image Upload
                $path =$file->move('upload-images/', $gImgfile);
                $files[]=$gImgfile;
                $i++;
           }
        }


        //Service creation
        $service=new Service([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'latitude'=>$request->input('latitude'),
            'longitude'=>$request->input('longitude'),
            'category_id'=>$request->input('category'),
            'city_id'=>$request->input('city'),
            'vendor_id'=>$request->input('vendor'),
            'cover_image'=>$Imgfile,
            'gallery_image'=>json_encode($files),
            'publish'=>1,
        ]);
        $service->save();
        return redirect('admin/services')->with('success','Service Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service= Service::find($id);
        $categories= Category::all();
        $cities=City::all();
       //edit
        return view('admin_panel.services.viewservice',['service'=>$service,'categories'=>$categories,'cities'=>$cities]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service= Service::find($id);

        //passing models for  dropdown
        $categories= Category::all();
        $cities=City::all();
        return view('admin_panel.services.editservice',['service'=>$service,'categories'=>$categories,'cities'=>$cities]);
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
        $error_msg=['gallery_image'=>'gallery images are required'];
        $this->validate($request,[
            'title'=>'required|max:30',
            'description'=>'required|max:2500',
            'image'=> 'required|image|mimes:jpeg,png,jpg',
            'gallery_image.*'=> 'required|image|mimes:jpeg,png,jpg',
        ],$error_msg);
        $service=Service::find($id);
        $service->title=$request->input('title');
        $service->description=$request->input('description');
        $service->category_id=$request->input('category');
        $service->city_id=$request->input('city');
        $service->publish=1;

//Image Upload Handling
        if($request->hasFile('image'))
        {
             //Seperating extension
            $extension = $request->file('image')->getClientOriginalExtension();

           //To prevent from same filename in DB
            $Imgfile= time().'.'.$extension;

            //For deleting old image on update
            $oldimg= "upload-images/".$service->cover_image;

            //Image Upload
            $path =$request->file('image')->move('upload-images', $Imgfile);

            //saving image to city image field
            $service->cover_image=$Imgfile;

            //deleting old image on uploading new image
            File::delete($oldimg);

        }



            //Gallery Image Upload Handling
        if($request->hasFile('gallery_image'))
        { $i=0;
            foreach ($request->file('gallery_image') as $file)
            {
                //Seperating extension
                $extension = $file->getClientOriginalExtension();

                //To prevent from same filename in DB
                $gImgfile= $i.time().'.'.$extension;
                     //for deleting servive old gallery images
                $gallery_img=json_decode($service->gallery_image);
                 //For deleting old image on update
                 $oldimg= "upload-images/".$service->img;

                //Image Upload
                $path =$file->move('upload-images', $gImgfile);
                $files[]=$gImgfile;
                $i++;
           }
           $service->gallery_image=json_encode($files);

                //for deleting servive old gallery images
                    foreach ($gallery_img as $image) {
                    $coldimg= "upload-images/".$image;
                      File::delete($coldimg);
                        }
        }


        $service->save();
        return redirect('admin/services')->with('success','Service Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service= Service::find($id);

        //To delete image from folder
        $img="upload-images/".$service->cover_image;
        File::delete($img);

        //for deleting servive old gallery images
        $gallery_images=json_decode($service->gallery_image);
        //for deleting servive old gallery images
            foreach ($gallery_images as $image) {
                 File::delete("upload-images/".$image);
                }

        //deleting city
        $service->delete();

        return redirect('admin/services')->with('success', 'Service Deleted Successfully');
    }
}
