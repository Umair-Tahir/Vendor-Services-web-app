<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role==1){
            $cities= City::orderBy('name', 'asc')->paginate(5);
            return view('admin_panel.city.cities',['cities'=>$cities]);
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
            return view('admin_panel.city.addcity');
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
            'max'=>':attribute size exceeded from limit'
        ];

        $this->validate($request ,[
        'name'=> 'required|max:20|unique:cities,name',
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
                $path =$request->file('image')->move('upload-images/', $Imgfile);
            }


        // Create New City
        $city= new City([
            'name'=>$request->input('name'),
            'image'=>$Imgfile,
        ]);
        $city->save();
        //dd($city);
        return redirect('admin/cities')->with('success', 'City Created Successfully');
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
            $cities = City::find($id);
            return view('admin_panel.city.editcity',['cities'=>$cities]);
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
            //city update validation
        $this->validate($request ,[
            'name'=> "required|max:20|unique:cities,name, $id",//will skip its ownn value if not changed
            'image'=> 'image|mimes:jpeg,png,jpg|max:1999',
        ], $error_msg);

        $city= City::find($id);
        $city->name = $request->input('name');


        //Updated Image Upload Handling
        if($request->hasFile('image'))
        {
            //Seperating extension
            $extension = $request->file('image')->getClientOriginalExtension();

            //To prevent from same filename in DB
            $Imgfile= time().'.'.$extension;

           //For deleting old image on update
             $oldimg= "images/upload-images/".$city->image;


            //Image Upload
            $path =$request->file('image')->move('upload-images/', $Imgfile);

            //saving image to city image field
            $city->image=$Imgfile;

            //deleting old image on uploading new image
            File::delete($oldimg);
        }
            //update city
        $city->save();
        return redirect('admin/cities')->with('success', 'City Updated Successfully');


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

            $city= City::find($id);

            //To delete image from folder
            $img="upload-images/".$city->image;
            File::delete($img);

            //deleting city
            $city->services()->delete();
            $city->delete();

            return redirect('admin/cities')->with('success', 'City Deleted Successfully');
        }
        else
            return view('admin_panel.admin.sign-in');

    }
}
