<?php

namespace App\Http\Controllers;
use App\Models\category;
use App\Models\product;


use Hash;
use Alert;

use Illuminate\Http\Request;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
	   $category=category::all();	  // select * from
       return view('backend.add_product',['category'=>$category]);
    }
    // show all in frontend
    public function viewall()
    {        
	   $product=product::all();	  // select * from
       return view('frontend.shop',['data'=>$product]);
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

    public function add_product(Request $request)
    {
        $data=new product;
		$data->cate_id =$request->cate_id;
        $data->prod_name=$request->prod_name;
        $data->short_desc=$request->short_desc;
        $data->long_desc=$request->long_desc;
        $data->main_price=$request->main_price;
        $data->dis_price=$request->dis_price;
	
		// img upload
		$prod_img=$request->file('prod_img');		
		$prod_imgname=time().'_img.'.$request->file('prod_img')->getClientOriginalExtension();
		$prod_img->move('backend/assets/img/upload/product/',$prod_imgname);  
		$data->prod_img=$prod_imgname; 

        $multi_imgarr=[];
        if($request->hasfile('multi_img'))
         {
            foreach($request->file('multi_img') as $multi_img)
            {
                $name = time().rand(1000,9999).'_img.'.$multi_img->extension();
                $multi_img->move('backend/assets/img/upload/product/',$name);  
                $multi_imgarr[]=$name;  
            }
             $data->multi_img=implode(',',$multi_imgarr);
         }
         
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function manage_product()
    {
        $data=product::join('categories','products.cate_id','=','categories.id')
		->get(['products.*','categories.cat_name']);	  
       return view('backend.manage_product',['fetch'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=category::all();
            $data=product::where("id",'=',$id)->first();
            return view('backend.editproduct',['category'=>$category,'fetch'=>$data]);
        
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
        // $validated = $request->validate([
        //     'name' => 'required|alpha',
        //     'mobile'=>'required|numeric|digits:10',
        //     'cid'=>'required',
        //     'file' => 'mimes:jpeg,png,jpg,gif,svg'
        //     ]);
            
            $data=product::find($id);
            $data->cate_id=$request->cate_id;
            $data->prod_name=$request->prod_name;
            $data->short_desc=$request->short_desc;
            $data->long_desc=$request->long_desc;
            $data->main_price=$request->main_price;
            $data->dis_price=$request->dis_price;                        
              
            
            // img upload
            $old_file=$data->prod_img;
            if($request->hasFile('prod_img'))
            {
                $prod_img=$request->file('prod_img');		
                $prod_imgname=time().'_img.'.$request->file('prod_img')->getClientOriginalExtension();
                $prod_img->move('backend/assets/img/upload/product//',$prod_imgname);  
                $data->prod_img=$prod_imgname; 
                unlink('backend/assets/img/upload/product/'.$old_file);
            }

            $data->update();
            Alert::success('success', 'Update Success');
            return redirect('/manage_product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=product::find($id);
		$data->delete();
		Alert::success('success', 'Delete Success');
		return back();
    }
}
