<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\customer;
use App\Models\wishlist;
use Alert;
 
class wishlistController extends Controller
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
    public function add_wishlist(Request $request)
    {
        $data=new wishlist;
		$data->product_id=$request->product_id ;
        $data->cust_id=$request->cust_id;
              
	        
		$data->save();
		Alert::success('success', 'Product added to wishlist');
		return redirect('/shop');
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

    function manage_wishlist()
	{
		$wishlist = wishlist::join('products', 'wishlists.product_id', '=', 'products.id')
                ->join('customers', 'wishlists.cust_id', '=', 'customers.id')
                ->where('customers.id','=',session('cust_id'))
                ->get(['products.*','customers.*','wishlists.*']);
        return view('frontend.wishlist',['fetch'=>$wishlist]);      
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
        $data=wishlist::find($id);
        $data->delete();
        Alert::success('success', 'Delete Success');
		return back();
    }
}
