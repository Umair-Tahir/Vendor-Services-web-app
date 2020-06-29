<?php

namespace App\Http\Controllers\Vendor_Dashboard;
use App\Http\Controllers\Controller;
use App\Service;
use App\User;
use App\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class VdvendorController extends Controller
{

        public function index()
    {

       // return view('vendor_dashboard.vd_home');
        if(Auth::check())
        {
            if(Auth::user()->role==2){
                return redirect('Vendor/Dashboard')->with('Status', 'Logged in');
            }
            else
                 return view('vendor_dashboard.vendor.vendor_signin');
        }
            else
                return view('vendor_dashboard.vendor.vendor_signin');
    }

            //registering new vendor
    public function register(Request $request)
    {

        //Condition because of 2 forms are combined in single page ==> vendor register
        if ($request->has('signin')) {

            $this->validate($request,[
                'username'=>'required',
                'password'=>'required',
            ]);
            if(Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
            {    if(Auth::user()->role==2)
                return redirect('Vendor/Dashboard')->with('Status', 'Logged in');
              else
                return redirect('Vendor');
               // return view('vendor_dashboard.vd_home');
               // return redirect('Vendor/Dashboard');
            }
            else
                return redirect('Vendor/register')->with('error', 'Sorry, Credentials not found');
               // return view('vendor_dashboard.vendor.vendor_signin');

        }

        else{
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
                'password'=>'required|min:5',
                'description'=> 'required|max:350',
                'image'=>'required',
            ),$errormsg);

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
                $path =$request->file('image')->storeAs('upload-images/', $Imgfile);
            }
            //putting password in a variable to convert it into hash for DB
            $password=$request->input('password');
            $hash= bcrypt($password);

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

            $vendor->save();
            Auth::loginUsingId($user->id);
            return redirect('Vendor/Dashboard')->with('success', 'Vendor Created Successfully');

        }


    }

    //after logging in
    public  function home(){
        if(Auth::user()->role==2){
            $userid=Auth::user();
           $count=count($userid->vendor->services);
            $count1 = count($userid->blogs);
            return view('vendor_dashboard.vd_home',['count'=>$count,'count1'=>$count1])->with('Status', 'Logged in');
        }
        else
            return view('vendor_dashboard.vendor.vendor_signin');

    }

    // showing admin profile
    public  function profile()
    {
//        if (Auth::user()->role == 2) {
//            return view('admin_panel.admin.adminprofile')->with('Status', 'Logged in');
//        } else
//            return view('vendor_dashboard.vendor.vendor_signin');

    }



    // logging out
    public function destroy(Request $request)
    {

        if(Auth::user()->role==2){
        Auth::logout();
        return redirect('/');
    }
    else
        return view('vendor_dashboard.vendor.vendor_signin');

    }


}
