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
   

    public function viewall()
    {        
	   $product=product::all();	  // select * from
       return view('frontend.shop',['data'=>$product]);
    }

    // public function skin_product()
    // {
    // $product=product::where("id",'=',$id)->first();
    // return view('frontend.skin',['fetch'=>$product]);
    // }

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
    public function manage_product(Request $request)
    {
        $search=$request->search;
        if($search!="")
        {
            $fetch=product::join('categories','products.cate_id','=','categories.id')
            ->where('products.prod_name', 'LIKE' ,'%'.$search.'%')
            ->orWhere('products.short_desc', 'LIKE' ,'%'.$search.'%')
            ->get(['products.*','categories.cat_name']);
        }
        else
        {
            $fetch=product::join('categories','products.cate_id','=','categories.id')
		->get(['products.*','categories.cat_name']);
        }	  
       return view('backend.manage_product',compact('fetch','search'));
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

    public function edit_product($id)
    {
        $product=product::all();
            $data=product::where("id",'=',$id)->first();
            return view('frontend.single_product',['product'=>$product,'fetch'=>$data]);
        
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

             // multiple img upload
             $old_file1=$data->multi_img;
            if($request->hasfile('multi_img'))
              {
                 foreach($request->file('multi_img') as $multi_img)
                 {
                     $name = time().rand(1000,9999).'_img.'.$multi_img->extension();
                     $multi_img->move('backend/assets/img/upload/product/',$name);  
                     $multi_imgarr[]=$name;  
                 }
                  $data->multi_img=implode(',',$multi_imgarr);
                //  unlink('backend/assets/img/upload/product/'.$old_file1);
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
        $old_file=$data->prod_img;
        $old_file1=$data->multi_img;
		$data->delete();
        unlink('backend/assets/img/upload/product/'.$old_file);
        // unlink('backend/assets/img/upload/product/'.$old_file1);
		Alert::success('success', 'Delete Success');
		return back();
    }

    public function product_status($id)
    {
		$data=product::find($id);
		$status=$data->status;
		if($status=="Out of Stock")
		{
			$data->status="Stock";
			$data->update();
			Alert::success( 'In Stock');
			return back();	
			
		}
		else
		{
			$data->status="Out of Stock";
			$data->update();
			Alert::warning('Out Stock');
			return back();	
		}
    }

}
