<?php

namespace App\Http\Controllers;
use App\Models\customer;
use Hash;
use Alert;

use Illuminate\Http\Request;

class customerController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $data=new customer;
		$data->name=$request->name;
		$data->username=$request->username;
		$data->password=Hash::make($request->password);
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->address=$request->address;
		$data->gender=$request->gender;
		$data->lag=implode(",",$request->lag);
		$data->birthdate =$request->birthdate ;
		
		
		// img upload
		$img=$request->file('img');		
		$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		$img->move('frontend/images/upload/',$imgname);  // use move for move image in public/images
		$data->img=$imgname; // name store in db

		$data->save();
		Alert::success('success', 'Register Success');
		return back();
    }


    function login(Request $request)
	{
		$email=$request->email;
		$data=customer::where('email','=',$email)->first();
		if($data)   // if(! $data || Hash::check($request->password,$data->password))
		{
			$chk=Hash::check($request->password,$data->password);
			if($chk)
			{
				
				
					session()->put('cust_id',$data->id);
					session()->put('name',$data->name);
					session()->put('email',$data->email);
					Alert::success('Congrats', 'You\'ve Successfully Login');
					
					return redirect('/index');
				
			}
			else
			{
				Alert::error('Login Failed', 'Wrong Password');
				return redirect()->back();
			}
		}
		else
		{
			Alert::error('Login Failed', 'Wrong Email');
			return redirect()->back();
		}	
		
	}

    function logout()
	{
		session()->pull('cust_id');
		session()->pull('email');
		Alert::success('Congrats', 'You\'ve Successfully Logout');
		return redirect('/index');
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
