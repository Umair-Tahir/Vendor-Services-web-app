<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Front_End;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FeUserController extends Controller
{
    public function index()
    {
//        Auth::logout();
        //logging in
        if(Auth::check())
        {
            return redirect('User/home');
        }
        else
            return view('user_dashboard.user.user_signin')->with('Status', 'Your session expired ');

    }

    public function register(Request $request)
    {

        //Condition because of 2 forms are combined in single page ==> vendor register
        if ($request->has('login')) {
            //$this->login($request);
            $error = [
                'username.min' => 'username must be greater than 2 words'
            ];
            $this->validate($request, [
                'username' => 'required|min:3|max:10',
                'password' => 'required|min:5',
            ]);
            if(Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
            {
                return redirect('User/home')->with('Status', 'Log in Successful');
                // return view('vendor_dashboard.vd_home');
                // return redirect('Vendor/Dashboard');
            }
            else
               return redirect('User/register');
            // return view('vendor_dashboard.vendor.vendor_signin');

        } else {

            //image error message for size
            $errormsg = ['username.max' => ' :attribute size has exceeded from limit',
            ];

            //vendor validation
            $this->validate($request, array(
                'username' => 'required|min:3|max:10',
                'last_name' => 'required|min:3|max:10',
                'first_name' => 'required|min:3|max:10',
                'email'=>'required|email',
                'password' => 'required|min:5'
            ), $errormsg);

            $Imgfile = 'no.jpg';
            //putting password in a variable to convert it into hash for DB
            $password = $request->input('password');
            $hash = bcrypt($password);

            $user = new User([
                'username' => $request->input('username'),
                'first_name'=>$request->input('first_name'),
                'last_name'=>$request->input('last_name'),
                'email'=>$request->input('email'),
                'role'=>3,
                'image' => $Imgfile,
                'password' => $hash,
            ]);
//            dd($user);
            $user->save();
            Auth::loginUsingId($user->id);
//            dd($user);
            return redirect('User/home')->with('success', 'Account Created Successfully');
        }
    }

    public function home()
    {
        return view('user_dashboard.home');
    }

    public function destroy(Request $request)
    {
            Auth::logout();
            return redirect('/');

    }
}
