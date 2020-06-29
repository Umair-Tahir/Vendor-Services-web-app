<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Vendor;
use Illuminate\Support\Facades\File;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendors= Vendor::orderBy('id')->paginate(5);
        return view('admin_panel.vendors.vendors',['vendors'=>$vendors]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_panel.vendors.addvendor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //image error message for size
        $errormsg= ['unique:users,username' =>' Business name has already been taken',
            'unique:users,email'=>'Please enter a unique email'
        ];
        //vendor validation
        $this->validate($request, array(
            'username'=> 'required|max:20|unique:users,username',
            'name'=> 'required|max:20',
            'company_code'=> 'required|size:3|regex:/[3]([0-4][0-7])/',
            'number'=> 'required|size:7',  //phone number  regex:/([0][3][0-4][0-7]([0-9]{7}))/
            'email'=> 'email|required|max:30|unique:users,email',
            'password'=>'required',
            'cover_image'=> 'image|mimes:jpeg,png,jpg|required',
            'description'=> 'required|max:2000',
        ),$errormsg);
       //dd($request);
        //Image Upload Handling
        if($request->hasFile('cover_image'))
        {
            //getting image with extension
            $ImgWithExt =$request->file('cover_image')->getClientOriginalName();

            //Seperating extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //To prevent from same filename in DB
            $Imgfile= time().'.'.$extension;

            //Image Upload
            $path =$request->file('cover_image')->move('upload-images', $Imgfile);
        }
            //putting password in a variable to convert it into hash for DB
                    $password=$request->input('password');
                    $hash= bcrypt($password);

       //adding data in user table
        $userDataset=[
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'password'=>$hash,
            'role'=>2,
            'image'=>$Imgfile,
        ];

        $user=User::create($userDataset);

        $vendor= new Vendor([
            'user_id'=>$user->id,
            'name'=>$request->input('name'),
            'country_code'=>'+92',
            'company_code'=>$request->input('company_code'),
            'phone_number'=>$request->input('number'),
            'description'=>$request->input('description'),
        ]);
        //dd($vendor);
        $vendor->save();

        return redirect('admin/vendors')->with('success', 'Vendor Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vendor = Vendor::find($id);
        return view('admin_panel.vendors.viewvendor',['vendor'=>$vendor]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //send data to edit form
        $vendors = Vendor::find($id);
        return view('admin_panel.vendors.editvendor',['vendors'=>$vendors]);
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
        //image error message for size
        $errormsg= ['unique:users,username' =>' Business name has already been taken',
            'unique:users,email'=>'Please enter a unique email'
        ];
        //vendor validation
        $this->validate($request, array(
            'username'=> "required|max:20,$id",
            'name'=> 'required|max:20',
            'company_code'=> 'required|size:3|regex:/[3]([0-4][0-7])/',
            'number'=> 'required|size:7',  //phone number  regex:/([0][3][0-4][0-7]([0-9]{7}))/
            'email'=> "email|required|max:30,$id",
            'cover_image'=> 'image|mimes:jpeg,png,jpg',
            'description'=> 'required|max:350',

        ));

        $vendor=Vendor::find($id);
        $user=User::find($vendor->user_id);
        $user->username=$request->input('username');
        $vendor->name=$request->input('name');
        $vendor->phone_number=$request->input('number');
        $user->email=$request->input('email');
        $vendor->description=$request->input('description');

        if ($request->has('Password'))
        {
            $password=$request->input('password');
            $this->validate($password, array(
                'password'=> 'min:5',
            ));
                $hash= bcrypt($password);
        }
        //dd($request);

        //Updated Image Upload Handling
        if($request->hasFile('cover_image'))
        {
            //getting image with extension
            $ImgWithExt =$request->file('cover_image')->getClientOriginalName();
            //Seperating extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //To prevent from same filename in DB
            $Imgfile= time().'.'.$extension;
            //For deleting old image on update
            $oldimg= "upload-images/".$vendor->img;
            //Image Upload
            $path =$request->file('cover_image')->move('upload-images', $Imgfile);

            //saving image to city image field
            $user->image=$Imgfile;
            //deleting old image on uploading new image
            File::delete($oldimg);
        }
        //  dd($vendor);
        //update city

        $user->save();
        $vendor->save();
        return redirect('admin/vendors')->with('success', 'Vendor Updated Successfully');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vendors= Vendor::find($id);

        //To delete image from folder
        $img="upload-images/".$vendors->user->image;

        File::delete($img);

        $vendors->user()->delete();
        $vendors->services()->delete();

        $vendors->delete();

        return redirect('admin/vendors')->with('success', 'City Deleted Successfully');
    }
}
