<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\models\User;
use Hash;
use Auth;
use Illuminate\Support\Facades\Validator;  // for validation add this 


class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    public function allstudent()
    {
        $data = user::all();
        return response()->json(["status"=>"success", "result"=>$data]);
    }

    public function single_student($id)
    {
         $data=user::find($id);
		 return response()->json([
		 'status'=>"success",
		 'result'=>$data
		 ]);
    }

    function search($key) 	
    {
         $data=user::where('name','LIKE',"%$key%")->orWhere('email','LIKE','%'.$key.'%')->get();
		 return response()->json([
		 'status'=>"success",
		 'result'=>$data
		 ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
     {

            $validate=Validator::make($request->all(),[
                'name'=>'Required',
                'email'=>'Required|email',
                'password'=>'Required',
            ]);
            
            if($validate->fails())
            {
                return [
                    'success' => 0, 
                    'message' => $validate->messages(),
                ];
            }
        $data=new user;
			$data->name=$request->name;
			$data->email=$request->email;
			$data->password=Hash::make($request->password);	
			
			//create tocken 
			// $token=$data->createToken($data->email.'_Token')->plainTextToken;
			// $token=$data->token=Hash::make($request->email);
			
			$data->save();
			return response()->json([
			'status'=>"Insert success",
			
			'result'=>$data
			]);
			
		}
    
        public function student_login(Request $request)
        {
            $input = $request->all();
            $vallidation = Validator::make($input,[
                'email' => 'required|email',
                'password' => 'required'
            ]);
    
            if($vallidation->fails()){
                return response()->json(['error' => $vallidation->errors()],422);
            }
    
    
            if (Auth::attempt(['email' => $input['email'],'password' => $input['password']])) {
                $user  = Auth::user();
                // dd($user);
    
                $token = $user->createToken('MyApp')->accessToken;
    
                return response()->json(['token' => $token]);
            }
         }
         
         public function profile()
         {
             $user = Auth::guard('api')->user();
     
             return response()->json(['status'=>"Login Details",'data' => $user]);
         }    
        
        


    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $validate=Validator::make($request->all(),[
            'name'=>'Required',
            'email'=>'Required|email',
           
        ]);
		
		if($validate->fails())
		{
			return [
				'success' => 0, 
				'message' => $validate->messages(),
			];
		}
		else
		{
			$data=user::find($id);
			$data->name=$request->name;
			$data->email=$request->email;
			$data->update();
			return response()->json([
            'status'=>"Update success",        
            'result'=>$data
			]);
		}
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        user::find($id)->delete();
		return response()->json([
		'status'=>"Delete Success"
		]);
    }
}
