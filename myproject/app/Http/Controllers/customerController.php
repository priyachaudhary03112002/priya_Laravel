<?php

namespace App\Http\Controllers; 
use App\Models\customer;
use App\Mail\welcomemail;
use Mail;
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

    function loginpage()
	{
		return view('frontend.login1');
	}

    function registrationpage()
	{
		return view('frontend.registration');
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|alpha',
            'username' => 'required|unique:customers',
            'password' => 'required|min:3',
            'email'=>'required|email'
            // 'file' => 'required|mimes:jpeg,png,jpg,gif,svg'
            ]);

 
        $data=new customer;
		$data->name=$request->name;
		$data->username=$request->username;
		$data->password=Hash::make($request->password);
        $email=$data->email=$request->email;
        // $data->mobile=$request->mobile;
        // $data->address=$request->address;
		// $data->gender=$request->gender;
		// $data->lag=implode(",",$request->lag);
		// $data->birthdate =$request->birthdate ;
		
		
		// // img upload
		// $img=$request->file('img');		
		// $imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
		// $img->move('frontend/images/upload/',$imgname);  // use move for move image in public/images
		// $data->img=$imgname; // name store in db
		$res=$data->save();
        $data=['msg'=>"Register Success", 'sub'=>"Welcome To Cosmetic"];

        Mail::to($email)->send(new welcomemail($data));

		if($res)
        {
        Alert::success('success', 'Register Success');
		return redirect('/login1');
        }
        else
        {
            echo "Not suucess";
        }
    }


    function login(Request $request)
	{
        $validated = $request->validate([
           
            'password' => 'required',
            'email'=>'required|email'
           
            ]);

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
    public function show()
    {
        $customer=customer::all();
        return view('backend.view_customer_report',['fetch'=>$customer]);
    }

    public function profile_show() 
    {
       $data=customer::where("id",'=',session('cust_id'))->first();  		
		return view('frontend.profile1',['fetch'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=customer::where("id",'=',$id)->first();
            return view('frontend.editprofile1',['fetch'=>$data]);
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
        $data=customer::find($id);
		$data->name=$request->name;
		$data->username=$request->username;
        $data->email=$request->email;
        $data->mobile=$request->mobile;
        $data->address=$request->address;
		$data->gender=$request->gender;
		$data->lag=implode(",",$request->lag);
		$data->birthdate=$request->birthdate ;	
		
		
		// img upload
		$old_file=$data->img;
		if($request->hasFile('img'))
		{
			$img=$request->file('img');		
			$imgname=time().'_img.'.$request->file('img')->getClientOriginalExtension();
			$img->move('frontend/images/upload/',$imgname);  
			$data->img=$imgname; 
			unlink('frontend/images/upload/'.$old_file);
		}
		$data->update();
		Alert::success('success', 'Update Success');
		return redirect('/profile1');
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
