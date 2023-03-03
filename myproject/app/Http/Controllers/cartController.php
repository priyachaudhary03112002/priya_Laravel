<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\customer;
use App\Models\cart;
use Alert;

class cartController extends Controller
{
    /**
     * Display a listing of the resource. 
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=product::all();
        $customer=customer::all();
        return view('frontend.cart',['product'=>$product, 'customer'=>$customer]);
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
    public function add_cart(Request $request)
    {
        $data=new cart; 
		$product_id=$request->product_id;
        $cust_id=$request->cust_id;
        $cart_data=cart::where("cust_id","=",$cust_id)
        ->where("product_id","=",$product_id)->first();
        if($cart_data)
        {
            $qty=$cart_data->qty;
            $updated_qty=$qty+1;
            $id=$cart_data->id;
            $cart=cart::find($id);
            $cart->qty=$updated_qty;
            $cart->save();
            Alert::success('success', 'Product added to cart');
            return redirect('/shop'); 
        }
        else
        {
            $data->product_id=$product_id;
            $data->cust_id=$cust_id;
            $data->qty=$request->qty;
            $data->save();
            Alert::success('success', 'Product added to cart');
            return redirect('/shop');    
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $cart=cart::all();
        $cart=cart::join('products','carts.product_id','=', 'products.id')
         ->join('customers', 'carts.cust_id', '=', 'customers.id')->get(['products.*', 'customers.*', 'carts.*']);
        return view('backend.view_cart_report',['fetch'=>$cart]);
    } 

    function manage_cart()
	{
		// $cart=cart::join('products','carts.product_id','=', 'products.id')
        //         ->join('customers', 'carts.cust_id', '=', 'customers.id')->get(['products.*', 'customers.*', 'carts.*']);
                
                $cart = cart::join('products', 'carts.product_id', '=', 'products.id')
                ->join('customers', 'carts.cust_id', '=', 'customers.id')
                ->where('customers.id','=',session('cust_id'))
                ->get(['products.*','customers.*','carts.*']);
        return view('frontend.cart',['fetch'=>$cart]);
        


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
    public function delete_cart($id)
    {        
        $data=cart::find($id);
        $data->delete();
        Alert::success('success', 'Delete Success');
		return back();
    }
}
