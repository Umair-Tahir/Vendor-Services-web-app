<?php

namespace App\Http\Controllers\Vendor_Dashboard;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Amenitie;

class VdAmenitieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role==2){
            $user=Auth::user()->id;          //getting id of current signed in user
            $user=User::find($user);
            $services=$user->vendor->services;
            return view('vendor_dashboard.service.add_amenities',['services'=>$services]);
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


 if(Auth::user()->role==2){
           
        $this->validate($request,[
            'service'=>'required',
            'price'=>'required',
        ]);

        //Image Upload Handling
        if($request->has('event_planners'))
            $epevent=1;
        else
            $epevent=0;
         if($request->has('wifi'))
            $wevent=1;
        else
            $wevent=0;
         if($request->has('pet_friendly'))
            $pfevent=1;
        else
            $pfevent=0;
         if($request->has('catering_service'))
            $csevent=1;
        else
            $csevent=0;
         if($request->has('car_rentals'))
            $crevent=1;
        else
            $crevent=0;
        if($request->has('accommodations'))
            $acevent=1;
        else
            $acevent=0;


    
        //Service creation
        $amenities=new Amenitie([
            'service_id'=>$request->input('service'),
            'price'=>$request->input('price'),
            'facebook'=>$request->input('facebook'),
            'twitter'=>$request->input('twitter'),
            'instagram'=>$request->input('instagram'),
            'event_planners'=>$epevent,
            'wifi'=>$wevent,
            'pet_friendly'=>$pfevent,
            'catering_service'=>$csevent,
            'car_rentals'=>$crevent,
            'accommodations'=>$acevent,
        ]);
        $amenities->save();
        return redirect('Vendor/Dashboard')->with('success','Amenities Added Successfully');

        }
        else
            return view('vendor_dashboard.vendor.vendor_signin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd('in');
//        $user=Auth::user()->id;
//        $user=User::find($user);
//        $vendor=$user->vendor->services;
//        dd($vendor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
