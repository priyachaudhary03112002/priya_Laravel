<?php
include_once ('model.php'); 

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
			case '/about':
				include_once ('about.php');
				break;
			case '/blog':
				include_once ('blog.php');
				break;
			case '/blog_details':
				include_once ('blog_details.php');
				break;
			case '/contact':
				include_once ('contact.php');
				break;
			case '/contact_prosess':
				include_once ('contact_prosess.php');
				break;
			case '/coueses':
				include_once ('coueses.php');
				break;
			case '/gallery':
				include_once ('gallery.php');
				break;
			case '/main':
				include_once ('main.php');
				break;
			case '/pricing':
				include_once ('pricing.php');
				break;
			case '/elements':
				include_once ('elements.php');
				break;

			case '/profile':
				$where=array('gym_id'=>$_SESSION['gym_id']);
				$run=$this->select_where('gym_user',$where);
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
				
				$run=$this->select_where('gym_user',$where);
				$nm=$run->num_rows; 
				
				if($nm==1) 
				{
					$fetch=$run->fetch_object(); //
					$gym_id=$fetch->gym_id;						
					$name=$fetch->name;	
					
					
					$_SESSION['gym_id']=$gym_id;
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
				unset($_SESSION['gym_id']);

				echo "<script> alert('Logout Success'); 
				window.location='index';
			 	</script>";
					
			 break;
				
			case '/register':
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$username=$_REQUEST['username'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				$email=$_REQUEST['email'];
				$mobile=$_REQUEST['mobile'];
				$gender=$_REQUEST['gender'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);

				$file=$_FILES['img']['name'];  
				$path='upload/'.$file;   
				$tmp_file=$_FILES['img']['tmp_name']; 
				move_uploaded_file($tmp_file,$path);
								
				$data=array("name"=>$name,"username"=>$username,"password"=>$enc_password,"email"=>$email, "mobile"=>$mobile,"gender"=>$gender,"lag"=>$lag,"img"=>$file);
				
				
				$res=$this->insert('gym_user',$data);
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
				include_once ('register.php');
				break;
}
	}

}

$obj= new control;
?>