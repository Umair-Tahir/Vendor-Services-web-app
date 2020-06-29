<?php


namespace App\Http\Controllers\Vendor_Dashboard;
use App\Category;
use App\City;
use App\Service;
use App\Http\Controllers\Controller;
use App\Vendor;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VdserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role==2){
            $user = Auth::user();
            $services=$user->vendor->services;
            return view('vendor_dashboard.service.services',['services'=>$services]);

            return redirect('Vendor/Blog');
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
            $user = Auth::user()->username;
            $categories= Category::all();
            $cities= City::all();
            return view('vendor_dashboard.service.add_service', compact('user','categories','cities'));
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
//                dd($request);
        $user=Auth::user();          //getting id of current signed in user
        // $vendor=DB::table('vendors')->where('user_id',$user)->first();//Vendor::find($user);
        $vendor=$user->vendor;
        $this->validate($request,[
            'title'=>'required|max:30|min:2',
            'description'=>'required|max:2500|min:10',
            'latitude'=>'required',
            'longitude'=>'required',
            'image'=> 'image|mimes:jpeg,png,jpg|required',
            'gallery_image.*'=> 'image|mimes:jpeg,png,jpg|required',
        ]);

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
            }                                                   //endforeach;
        }

        //Service creation
        $service=new Service([
            'title'=>$request->input('title'),
            'description'=>$request->input('description'),
            'latitude'=>$request->input('latitude'),
            'longitude'=>$request->input('longitude'),
            'category_id'=>$request->input('category'),
            'city_id'=>$request->input('city'),
            'vendor_id'=>$vendor->id,
            'cover_image'=>$Imgfile,
            'gallery_image'=>json_encode($files),
            'publish'=>1,
        ]);
        $service->save();
        return redirect('Vendor/Dashboard')->with('success','Service Created Successfully');
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
            $service=Service::find($id);
            $amenitie=$service->amenitie;
            return view('vendor_dashboard.service.view_service',['service'=>$service,'amenitie'=>$amenitie]);
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
        $service=Service::find($id);
        $categories=Category::all();
        $cities=City::all();
        return view('vendor_dashboard.service.edit_service',['categories'=>$categories],['service'=>$service]);
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
        $user=Auth::user();
        $service->vendor_id=$user->vendor->id;

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
        return redirect('Vendor/Dashboard')->with('success','Service updated Successfully');

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
        $service->delete();
        return redirect('Vendor')->with('success','Service Deleted Successfully');

    }
}
