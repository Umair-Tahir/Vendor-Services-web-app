<?php

namespace App\Http\Controllers;

use App\Category;
use App\Service;
use Illuminate\Support\Facades\Auth;
use App\Admin;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    //main first request
    public function index(Request $request)
    {
        //logging in
        if(!Auth::guest())
        {
//            dd(Auth::user());
            if(Auth::user()->role==1) {
                return redirect('admin/admin_home');
            }
            else
                return view('admin_panel.admin.sign-in')->with('error', 'Sorry, Credentials not found');
        }
        else
            return view('admin_panel.admin.sign-in')->with('Status', 'Your session expired ');

    }

    //Redirecting user to after Signing in
    public function login(Request $request)
    {
        //dd($request);
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);
        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
        {
            if(Auth::user()->role==1){
                // $uid=Auth::user()->id;
                // Auth::loginUsingId($uid);
                // return redirect('admin/admin_home')
                return view('admin_panel.adminhome')->with('success', 'Log in Successful');
            }
        }

        return redirect('admin')->with('error', 'Sorry, Credentials not found');
    }

        //after logging in
    public  function home(){
        if(Auth::user()->role==1){
            return view('admin_panel.adminhome');
        }
        else
            return view('admin_panel.admin.sign-in');

    }

    // showing admin profile
    public  function profile(){
        if(Auth::user()->role==1){
            return view('admin_panel.admin.adminprofile');
        }
        else
            return view('admin_panel.admin.sign-in');

    }



        // logging out
    public function destroy(Request $request)
    {
        if(Auth::user()->role==1){
            Auth::logout();
            return redirect('admin');
        }
        else
            return view('admin_panel.admin.sign-in');
//        dd($request);
    }

}
