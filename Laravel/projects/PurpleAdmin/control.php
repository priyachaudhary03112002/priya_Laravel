<?php

include_once('../onlineshop/model.php');  // step 1  load mopdel 

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

				
			case '/add_category':
				if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				$cate_img=$_REQUEST['cate_img'];

				$cate_img=$_FILES['cate_img']['name'];  
				$path='upload/'.$cate_img;   // PATH
				$tmp_file=$_FILES['cate_img']['tmp_name']; 
				move_uploaded_file($tmp_file,$path); 
				
				$data=array("cate_name"=>$cate_name,"cate_img"=>$cate_img);
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
			 
			 if(isset($_REQUEST['editcate']))
		 {
				$category_id=$_REQUEST['editcate'];
				$where=array('category_id'=>$category_id);
			 	$run=$this->select_where('category',$where);
			 	$fetch=$run->fetch_object();
				
								
			 	if(isset($_REQUEST['submit']))
				{
			 		$cate_name=$_REQUEST['cate_name'];
			 	
					$cate_img=$_FILES['cate_img']['name'];  
					$path='upload/'.$cate_img;   
					$tmp_file=$_FILES['cate_img']['tmp_name']; 
					move_uploaded_file($tmp_file,$path); 
					$category_id=$_REQUEST['category_id'];

				$data=array("cate_name"=>$cate_name,"cate_img"=>$cate_img);

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
							<script> alert('Update Success');
							window.location='cate_edit';
							</script>";
						}
				}
			}						

				include_once('cate_edit.php');
				break;

			case '/add_product':
				include_once ('add_product.php');
				break;
			case '/manage_product':
			$product_arr=$this->select('product');
				//print_r($product_arr);

				include_once ('manage_product.php');
				break;
			case '/add_blog':
				include_once ('add_blog.php');
				break;

			case '/manage_blog':
			$blog_arr=$this->select('blog');
				//print_r($blog_arr);

				include_once ('manage_blog.php');
				break;

			case '/View_contact_report':
			$contact_arr=$this->select('contact');
				//print_r($contact_arr);
				include_once ('View_contact_report.php');
				break;

			case '/manage_customer_report':
			$customer_arr=$this->select('customer');
				//print_r($customer_arr);

				include_once ('manage_customer_report.php');
				break;

			case '/view_cart_report':
			$cart_arr=$this->select('cart');
				//print_r($cart_arr);

				include_once ('view_cart_report.php');
				break;

			case '/view_order_report':
			$order_tbl_arr=$this->select('order_tbl');
				//print_r($order_tbl_arr);

				include_once ('view_order_report.php');
				break;

				case '/login':
				if(isset($_REQUEST['adminlogin']))
			{
				$admin_username=$_REQUEST['admin_username'];
				$admin_password=$_REQUEST['admin_password'];
				$enc_password=md5($admin_password);
				
				$where=array("admin_username"=>$admin_username,"admin_password"=>$enc_password);
				
				$run=$this->select_where('admin',$where);
				$chk=$run->num_rows; // all cond true or false by rows
				if($chk==1) // 1 means true
				{
					$fetch=$run->fetch_object(); //
					$admin_id=$fetch->admin_id;						
					$admin_username=$fetch->admin_username;	
					
					
					$_SESSION['admin_id']=$admin_id;
					$_SESSION['admin_username']=$admin_username;
					
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
				unset($_SESSION['admin_username']);
				unset($_SESSION['admin_id']);

				echo "<script> alert('Logout Success'); 
				window.location='login';
				</script>";
					
			break;	

			case '/cate_delete':
			
			if(isset($_REQUEST['delcategory']))
			{
				$category_id=$_REQUEST['delcategory'];
				$where=array("category_id"=>$category_id);
				$run=$this->select_where('category',$where);

				$fetch=$run->fetch_object();
				$file=$fetch->cate_img;
				
				$run=$this->delete_where('category',$where);
				if($run)
				{
					unlink('upload/'.$file);
					echo "<script> alert('Delete Success'); 
					window.location='manage_category';
					</script>";
				}					
			}
						
			break;

				case '/register':
				if(isset($_REQUEST['submit']))
			{
				$admin_name=$_REQUEST['admin_name'];
				$admin_username=$_REQUEST['admin_username'];
				$admin_password=$_REQUEST['admin_password'];
				$enc_password=md5($password);
				 

							
				$data=array("admin_name"=>$admin_name,"admin_username"=>$admin_username,"admin_password"=>$enc_password);
				
				
				$res=$this->insert('admin',$data);
				if($res)
				{
					echo "<script> alert('register Success')</script>";
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