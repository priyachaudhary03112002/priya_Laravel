<?php

namespace App\Http\Controllers;
use App\Models\category;
use Hash;
use Alert;

use Illuminate\Http\Request; 

class categoryController extends Controller
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

    public function add_category(Request $request)
    {
        $data=new category;
		$data->cat_name=$request->cat_name;
	
		// img upload
		$cat_img=$request->file('cat_img');		
		$cat_imgname=time().'_img.'.$request->file('cat_img')->getClientOriginalExtension();
		$cat_img->move('backend/assets/img/upload/',$cat_imgname);  
		$data->cat_img=$cat_imgname; 

		$data->save();
		Alert::success('success', 'Register Success');
		return back();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    function manage_category()
	{
		$category=category::all();
        return view('backend.manage_category',['fetch'=>$category]);
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=category::where("id")->first(); // single data fetch
		// $data=customer::join('countries','customers.cid','=','countries.id')
		// ->where("customers.id",'=',session('userId'))->first(['customers.*','countries.cnm']); //(['customers.*','countries.cnm']);
		return view('backend.category',['fetch'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data=category::where("id",'=',$id)->first();
        return view('backend.editcategory',['fetch'=>$data]);
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
        $data=category::find($id);
		$data->cat_name=$request->cat_name;
			
		
		// img upload
		$old_file=$data->cat_img;
		if($request->hasFile('cat_img'))// check file or not
		{
			$cat_img=$request->file('cat_img');		
			$cat_imgname=time().'_img.'.$request->file('cat_img')->getClientOriginalExtension();
			$cat_img->move('backend/assets/img/upload/',$cat_imgname);  // use move for move image in public/images
			$data->cat_img=$cat_imgname; // name store in db
			unlink('backend/assets/img/upload/'.$old_file);
		}
		$data->save();
		Alert::success('success', 'Update Success');
		return redirect('/manage_category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=category::find($id);
        $old_img=$data->cat_img;
		$data->delete();
        unlink('backend/assets/img/upload/'.$old_img);
		Alert::success('success', 'Delete Success');
		return back();
    }
}
