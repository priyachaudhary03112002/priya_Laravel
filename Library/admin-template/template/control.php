<?php

include_once('model.php');  // step 1  load mopdel 

class control extends model // step 2 extends model

{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3 call model __construct();

		$path=$_SERVER['PATH_INFO'];

		switch ($path) 
		{
			
			
			case '/index':
				
				include_once ('index.php');
				break;

				case '/profile':
				$where=array('admin_id'=>$_SESSION['admin_id']);
				$run=$this->select_where('admin',$where);
				$fetch=$run->fetch_object();
				
				include_once('profile.php');
				break;

				case '/editprofile':
			if(isset($_REQUEST['btnadmin_id']))
			{
				$admin_id=$_REQUEST['btnadmin_id'];
				$where=array('admin_id'=>$admin_id);
				$run=$this->select_where('admin',$where);
				$fetch=$run->fetch_object();
				
				$old_img=$fetch->img;
			if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$mobile=$_REQUEST['mobile'];
				$email=$_REQUEST['email'];					
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);

				$file=$_FILES['img']['name'];  // get only input type="file"
				$path='upload/'.$file;   // PATH
				$tmp_file=$_FILES['img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
				
				if($_FILES['img']['size']>0)
				{
				$data=array("name"=>$name, "mobile"=>$mobile, "email"=>$email,"lag"=>$lag,"img"=>$file);
				//print_r($data);
				
				$res=$this->update_where('admin',$data,$where);
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
					$data=array("name"=>$name, "mobile"=>$mobile,"email"=>$email,"lag"=>$lag);

						$res=$this->update_where('admin',$data,$where);
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
				
			case '/add_category':
			
				if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				
				
				$data=array("cate_name"=>$cate_name);
				//print_r($data);
				
				$res=$this->insert('category',$data);
				if($res)
				{
					echo "<script> alert('Add category Success')</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}
				include_once ('add_category.php');
				break;
			case '/manage_category':
				$category_arr=$this->select('category');
				//print_r($category_arr);

				include_once ('manage_category.php');
				break;

			case '/cate_edit':
			  if(isset($_REQUEST['editbtn']))
		    {
				$cate_id=$_REQUEST['editbtn'];
				$where=array('cate_id'=>$cate_id);
			 	$run=$this->select_where('category',$where);
			 	$fetch=$run->fetch_object();
				
								
			 	if(isset($_REQUEST['submit']))
				{
			 		$cate_name=$_REQUEST['cate_name'];
			 		
				   $data=array("cate_name"=>$cate_name);

				 $res=$this->update_where('category',$data,$where);
			 	if($res)
				 {
					echo "
							<script> alert('Update Success');
							window.location='manage_category';
			 				</script>";
				   }
			 
			         else
				       {
							echo "
							<script> alert('Update Failed');
							window.location='cate_edit';
							</script>";
						}
				}
			}						
			    include_once('cate_edit.php');
				break;

			case '/cate_delete':
			if(isset($_REQUEST['deletebtn']))
				{
				$cate_id=$_REQUEST['deletebtn'];
				$where=array("cate_id"=>$cate_id);
				$run=$this->delete_where('category',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_category';
					</script>";
				}
			}
				break;
			
			case '/add_book':
			$category=$this->select('category');
			
			if(isset($_REQUEST['submit']))
			{
				$book_name=$_REQUEST['book_name'];
				$author=$_REQUEST['author'];
				$quantity=$_REQUEST['quantity'];
				$price=$_REQUEST['price'];
				$rack_no=$_REQUEST['rack_no'];			
				
							
				$cate_id=$_REQUEST['cate_id'];
				
				$data=array("book_name"=>$book_name,"author"=>$author,"quantity"=>$quantity,"price"=>$price,"rack_no"=>$rack_no,"cate_id"=>$cate_id);
				
				$res=$this->insert('book',$data);
				if($res)
				{
					echo "<script> alert('register Success')</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}
				include_once ('add_book.php');
				break;

			case '/manage_book':
			$book_arr=$this->select('book');
				//print_r($blog_arr);

				include_once('manage_book.php');
				break;

			
		case '/book_edit':
			 $category=$this->select('category');
			 if(isset($_REQUEST['editbook']))
		 {
				$book_id=$_REQUEST['editbook'];
				$where=array('book_id'=>$book_id);
			 	$run=$this->select_where('book',$where);
			 	$fetch=$run->fetch_object();
				
								
			 	if(isset($_REQUEST['submit']))
				{
			 		$book_name=$_REQUEST['book_name'];
			 		$author=$_REQUEST['author'];
					$quantity=$_REQUEST['quantity'];
					$price=$_REQUEST['price'];
					$rack_no=$_REQUEST['rack_no'];

					$cate_id=$_REQUEST['cate_id'];

				$data=array("book_name"=>$book_name,"author"=>$author,"quantity"=>$quantity,"price"=>$price,"rack_no"=>$rack_no,"cate_id"=>$cate_id);

				$res=$this->update_where('book',$data,$where);
			 	if($res)
				{
					echo "
							<script> alert('Update Success');
							window.location='manage_book';
			 				</script>";
				}
			 
			 else
				{
							echo "
							<script> alert('Update Success');
							window.location='book_edit';
							</script>";
						}
				}
			}						

				include_once('book_edit.php');
				break;

			
			case'/book_delete':			
			if(isset($_REQUEST['delbook']))
			{
				$book_id=$_REQUEST['delbook'];
				$where=array("book_id"=>$book_id);			
				$run=$this->delete_where('book',$where);	
				if($run)
				{
					
					echo "<script> alert('Delete Success'); 
					window.location='manage_book';
					</script>";
				}					
			}
			break;	

			case '/book_report':
				$book_arr=$this->select('book');
				include_once ('book_report.php');
				break;

				case '/login':
				if(isset($_REQUEST['login']))
			{
				$name=$_REQUEST['name'];
				$password=$_REQUEST['password'];
 				$enc_password=md5($password);
				
				$where=array("name"=>$name,"password"=>$enc_password);
				
				$run=$this->select_where('admin',$where);
				$chk=$run->num_rows; 
				if($chk==1) 
				{
					$fetch=$run->fetch_object(); //
					$admin_id=$fetch->admin_id;						
					$name=$fetch->name;	
					
					
					$_SESSION['admin_id']=$admin_id;
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
				unset($_SESSION['admin_id']);

				echo "<script> alert('Logout Success'); 
				window.location='login';
				</script>";
					
			break;

				


			case '/register':
				if(isset($_REQUEST['submit']))
			{
				$name=$_REQUEST['name'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				$mobile=$_REQUEST['mobile'];
				$lag_arr=$_REQUEST['lag'];
				$lag=implode(",",$lag_arr);
						
				$data=array("name"=>$name,"email"=>$email,"password"=>$enc_password,"mobile"=>$mobile,"lag"=>$lag);
			// 	//print_r($data);
				
				$res=$this->insert('admin',$data);
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
$obj=new control;
?>