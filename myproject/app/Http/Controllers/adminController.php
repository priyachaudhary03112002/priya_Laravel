<?php

namespace App\Http\Controllers;
use App\Models\admin;

use Hash;
use Alert;
use session;

use Illuminate\Http\Request;

class adminController extends Controller
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
    public function store(Request $request)
    {
        $data=new admin;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->password=Hash::make($request->password);
		
		
		$data->save();
		Alert::success('success', 'Register Success');
        return redirect('/login');
        
    }

    function login(Request $request)
	{
		$email=$request->email;
		$data=admin::where('email','=',$email)->first();
		if($data)   // if(! $data || Hash::check($request->password,$data->password))
		{
			$chk=Hash::check($request->password,$data->password);
			if($chk)
			{
				
				
					session()->put('admin_id',$data->id);
					session()->put('name',$data->name);
					session()->put('email',$data->email);
					Alert::success('Congrats', 'You\'ve Successfully Login');
					
					return redirect('/dashboard');
				
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
		session()->pull('admin_id');
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
    public function show()
    {
       $data=admin::where("id",'=',session('admin_id'))->first();  		
		return view('backend.profile',['fetch'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $data=admin::where("id",'=',$id)->first();
            return view('backend.editprofile',['fetch'=>$data]);
       
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
       
        $data=admin::find($id);
		$data->name=$request->name;
		$data->email=$request->email;
		// $data->mobile=$request->mobile;
				
		
		// img upload
		$old_file=$data->img;
		if($request->hasFile('img'))
		{
			$img=$request->file('img');		
			$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
			$img->move('backend/assets/img/upload/admin',$imgname);  
			$data->img=$imgname; 
		// 	unlink('backend/assets/img/upload/admin/'.$old_file);
		 }
		$data->update();
		Alert::success('success', 'Update Success');
		return redirect('/profile');
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
