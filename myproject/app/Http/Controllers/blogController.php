<?php

namespace App\Http\Controllers;
use App\Models\blog;
use Illuminate\Support\Str; 

use Hash;
use Alert;

use Illuminate\Http\Request;

class blogController extends Controller
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

    public function viewall() 
    {        
	   $blog=blog::all();
       return view('frontend.blog',['data'=>$blog]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_blog(Request $request)
    {
        $data=new blog;
	    $data->title=$request->title;
        $data->description=$request->description;
       
		// img upload
		$img=$request->file('img');		
		$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		$img->move('backend/assets/img/upload/blog/',$imgname);  
		$data->img=$imgname; 

                
		$data->save();
		Alert::success('success', 'Register Success');
		return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     
    function manage_blog()
	{
		$blog=blog::all();
        return view('backend.manage_blog',['fetch'=>$blog]);
	}

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
    public function edit_blog($id)
    {
        $data=blog::where("id",'=',$id)->first();
        return view('backend.edit_blog',['fetch'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function blog_update(Request $request, $id)
    {
       
        $data=blog::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
                          
        // img upload
        $old_file=$data->img;
        if($request->hasFile('img'))
        {
            $img=$request->file('img');		
            $imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
            $img->move('backend/assets/img/upload/blog/',$imgname);  
            $data->img=$imgname; 
            unlink('backend/assets/img/upload/blog/'.$old_file);
        }        
       
        $data->update();
        Alert::success('success', 'Update Success');
        return redirect('/manage_blog');
    }

    public function singleblog_edit($id)
    {
            $data=blog::where("id",'=',$id)->first();
            $fetch=blog::inRandomOrder()->limit(3)->get();
            return view('frontend.blog-single',['fetch'=>$data,'data'=>$fetch]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response 
     */
    public function destroy($id)
    {
        $data=blog::find($id);
        $old_file=$data->img;       
		$data->delete();
        unlink('backend/assets/img/upload/blog/'.$old_file);
       
		Alert::success('success', 'Delete Success');
		return back();
    }
}
