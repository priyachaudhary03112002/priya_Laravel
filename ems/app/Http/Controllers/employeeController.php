<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Hash;
use Alert;

use Illuminate\Http\Request;

class employeeController extends Controller
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
    public function add_employee(Request $request)
    {
        $data=new employee;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->gender=$request->gender;
        $data->birthdate=$request->birthdate;
        $data->lag=implode(",",$request->lag);
        $data->address=$request->address;
		$data->mobile=$request->mobile;
		$data->city =$request->city;
		$data->country =$request->country ;
		
		// img upload
		$img=$request->file('img');		
		$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		$img->move('backend/assets/images/upload/',$imgname);  
		$data->img=$imgname; 

		$data->save();
		Alert::success('success', 'Register Success');
		return back();
    }

    function manage_employee()
	{
		$employee=employee::all();
        $employee=employee::paginate(2);
        return view('backend.manage_employee',['fetch'=>$employee]);
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
    public function edit_employee($id)
    {
        $data=employee::where("id",'=',$id)->first();
        return view('backend.edit_employee',['fetch'=>$data]);
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
        $data=employee::find($id);
         $data->name=$request->name;
		$data->email=$request->email;
		$data->gender=$request->gender;
        $data->birthdate=$request->birthdate;
        $data->lag=implode(",",$request->lag);
        $data->address=$request->address;
		$data->mobile=$request->mobile;
		$data->city=$request->city;
		$data->country=$request->country ;
		
		
		
		// img upload
		$old_file=$data->img;
		if($request->hasFile('img'))
		{
			$img=$request->file('img');		
			$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
			$img->move('backend/assets/images/upload/',$imgname);  
			$data->img=$imgname; 
			unlink('backend/assets/images/upload/'.$old_file);
		}
		$data->update();
		Alert::success('success', 'Update Success');
		return redirect('/manage_employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=employee::find($id);
        $old_file=$data->img;
       	$data->delete();
        unlink('backend/assets/images/upload/'.$old_file);
		Alert::success('success', 'Delete Success');
		return back();
    }
}
