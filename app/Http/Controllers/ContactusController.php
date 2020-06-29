<?php

namespace App\Http\Controllers;

use App\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role==1){
            return view('admin_panel.contactus.add_contactus');
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //vendor validation
        $this->validate($request, array(
            'email'=> 'email|required|max:30',
            'title'=> 'required|max:50',
            'team'=>'required',
            'city'=>'required|max:20',
            'description'=> 'required|max:2000',
            'founded'=> 'required',
        ));
        $contact=new Contactus([
            'email'=>$request->input('email'),
            'title'=>$request->input('title'),
            'team'=>$request->input('team'),
            'city'=>$request->input('city'),
            'founded'=>$request->input('founded'),
            'description'=>$request->input('description'),
        ]);

        $contact->save();
        return redirect('admin')->with('success', 'Company Info Successfully');
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
