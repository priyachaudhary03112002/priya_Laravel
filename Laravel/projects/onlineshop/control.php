<?php
include_once('model.php');  

class control extends model 

{
	function __construct()
	{ 
		session_start();
		model::__construct();
		$path=$_SERVER['PATH_INFO'];

		switch ($path) 
		{
			case '/':
				include_once ('index.php');
				break;
			case '/index':
				include_once ('index.php');
				break;

			case '/contact':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$subject=$_REQUEST['subject'];
				$message=$_REQUEST['message'];				
											
				$data=array("name"=>$name,"email"=>$email,"subject"=>$subject, "message"=>$message);
				
				
				$res=$this->insert('contact',$data);
				if($res)
				{
					echo "<script> alert('Send Msg Success')
					window.location='index';
					</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}
				include_once ('contact.php');
				break;

				
			case '/cart':
				include_once ('cart.php');
				break;
			case '/checkout':
				include_once ('checkout.php');
				break;

			case '/profile':
				$where=array('cust_id'=>$_SESSION['cust_id']);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				include_once('profile.php');
				break;

			case '/editprofile':
			if(isset($_REQUEST['btncust_id']))
			{
				$cust_id=$_REQUEST['btncust_id'];
				$where=array('cust_id'=>$cust_id);
				$run=$this->select_where('customer',$where);
				$fetch=$run->fetch_object();
				
				$old_img=$fetch->img;
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$mobile=$_REQUEST['mobile'];
				$address=$_REQUEST['address'];				
				$gender=$_REQUEST['gender'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);

				$file=$_FILES['img']['name'];  // get only input type="file"
				$path='upload/'.$file;   // PATH
				$tmp_file=$_FILES['img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
				
				if($_FILES['img']['size']>0)
				{
				$data=array("name"=>$name,"username"=>$username,"address"=>$address, "mobile"=>$mobile,"gender"=>$gender,"lag"=>$lag,"img"=>$file);
				//print_r($data);
				
				$res=$this->update_where('customer',$data,$where);
				if($res)
				{
					unlink('upload/'.$old_img); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
				}
			}
				else
				{
					$data=array("name"=>$name,"username"=>$username,"address"=>$address, "mobile"=>$mobile,"gender"=>$gender,"lag"=>$lag);

						$res=$this->update_where('customer',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
				}
			}
				include_once ('editprofile.php');
				break;

			case '/detail':
				$detail_arr=$this->select('order_tbl');
				include_once ('detail.php');
				break;
			case '/shop':
				$product_arr=$this->select('product');
				include_once ('shop.php');
				break;
			
			case '/Signin':
			if(isset($_REQUEST['Signin']))
			{
				$username=$_REQUEST['username'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				
				$where=array("username"=>$username,"email"=>$email,"password"=>$enc_password);
				
				$run=$this->select_where('customer',$where);
				$chk=$run->num_rows; // all cond true or false by rows
				if($chk==1) // 1 means true
				{
					if(isset($_REQUEST['rem']))
					{
						setcookie('username',$username,time()+15);
						setcookie('email',$email,time()+15);
						setcookie('password',$password,time()+15);
					}
					$fetch=$run->fetch_object(); //
					$cust_id=$fetch->cust_id;						
					$username=$fetch->username;	
					$name=$fetch->name;	
					
					$_SESSION['cust_id']=$cust_id;
					$_SESSION['username']=$username;
					$_SESSION['name']=$name;
					echo "<script> alert('Login Success'); 
					window.location='index';
					</script>";
										
				}
				else
				{
					echo "<script> alert('Login Failed'); 
					</script>";
				}
				
			}
				include_once ('signin.php');
				break;

				case '/logout':
				unset($_SESSION['name']);
				unset($_SESSION['username']);
				unset($_SESSION['cust_id']);

				echo "<script> alert('Logout Success'); 
				window.location='index';
				</script>";
					
			break;

			case '/SignUp':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				$email=$_REQUEST['email'];
				$mobile=$_REQUEST['mobile'];
				$address=$_REQUEST['address'];				
				$gender=$_REQUEST['gender'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);

				$file=$_FILES['img']['name'];  
				$path='upload/'.$file;   
				$tmp_file=$_FILES['img']['tmp_name']; 
				move_uploaded_file($tmp_file,$path); 
				
				$data=array("name"=>$name,"username"=>$username,"password"=>$enc_password,"email"=>$email,"address"=>$address, "mobile"=>$mobile,"gender"=>$gender,"lag"=>$lag,"img"=>$file);
				//print_r($data);
				
				$res=$this->insert('customer',$data);
				if($res)
				{
					echo "<script> alert('register Success')
					window.location='Signin';
					</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}
				include_once ('SignUp.php');
				break;
		}
	}
}
$obj= new control;
?>