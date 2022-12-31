n<?php
include_once('model.php');  // step 1  load mopdel 

class control extends model // step 2 extends model

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
				include_once ('contact.php');
				break;
			case '/cart':
				include_once ('cart.php');
				break;
			case '/checkout':
				include_once ('checkout.php');
				break;
			case '/blog':
				include_once ('blog.php');
				break;
			case '/category':
				include_once ('category.php');
				break;
			case '/tracking':
				include_once ('tracking.php');
				break;
			case '/elements':
				include_once ('elements.php');
				break;

			case '/profile':
				$where=array('user_id'=>$_SESSION['user_id']);
				$run=$this->select_where('user_master',$where);
				$fetch=$run->fetch_object();
				
				include_once('profile.php');
				break;

			case '/login':
				if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$password=$_REQUEST['password'];
 				$enc_password=md5($password);
				
				$where=array("name"=>$name,"password"=>$enc_password);
				
				$run=$this->select_where('user_master',$where);
				$nm=$run->num_rows; 
				
				if($nm==1) 
				{
					$fetch=$run->fetch_object(); //
					$user_id=$fetch->user_id;						
					$name=$fetch->name;	
					
					
					$_SESSION['user_id']=$user_id;
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
				include_once ('login.php');
				break;	

				case '/logout':
				unset($_SESSION['name']);
				unset($_SESSION['user_id']);

				echo "<script> alert('Logout Success'); 
				window.location='index';
			 	</script>";
					
			 break;
				                       
			case '/registration':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				$email=$_REQUEST['email'];
				$mobile=$_REQUEST['mobile'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);

				$file=$_FILES['img']['name'];  
				$path='upload/'.$file;   
				$tmp_file=$_FILES['img']['tmp_name']; 
				move_uploaded_file($tmp_file,$path);
											

				$data=array("name"=>$name,"username"=>$username,"password"=>$enc_password,"email"=>$email, "mobile"=>$mobile,"lag"=>$lag,"img"=>$file);
				
				
				$res=$this->insert('user_master',$data);
				if($res)
				{
					echo "<script> alert('register Success')
					window.location='login';
					</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}
				include_once ('registration.php');
				break;
}
	}

}

$obj= new control;
?>