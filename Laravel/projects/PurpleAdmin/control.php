<?php

include_once('../onlineshop/model.php');  

class control extends model 

{
	function __construct()
	{
		session_start();
		model::__construct(); 
 
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
				include_once ('profile.php');
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
				$admin_name=$_REQUEST['admin_name'];
				$admin_username=$_REQUEST['admin_username'];
				$admin_email=$_REQUEST['admin_email'];					
				
				$file=$_FILES['img']['name'];  // get only input type="file"
				$path='upload/admin/'.$file;   // PATH
				$tmp_file=$_FILES['img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
				
				if($_FILES['img']['size']>0)
				{
				$data=array("admin_name"=>$admin_name, "admin_username"=>$admin_username, "admin_email"=>$admin_email,"img"=>$file);
				//print_r($data);
				
				$res=$this->update_where('admin',$data,$where);
				if($res)
				{
					unlink('upload/admin/'.$old_img); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
				}
			}
				else
				{
					$data=array("admin_name"=>$admin_name, "admin_username"=>$admin_username,"admin_email"=>$admin_email);

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
				$old_img=$fetch->cate_img;
								
			 	if(isset($_REQUEST['submit']))
				{
			 		$cate_name=$_REQUEST['cate_name'];
			 	
					$cate_img=$_FILES['cate_img']['name'];  
					$path='upload/'.$cate_img;   
					$tmp_file=$_FILES['cate_img']['tmp_name']; 
					move_uploaded_file($tmp_file,$path); 
					// $category_id=$_REQUEST['category_id'];

					if ($_FILES['cate_img']['size']>0)
					 {
						
					$data=array("cate_name"=>$cate_name,"cate_img"=>$cate_img);

				$res=$this->update_where('category',$data,$where);
			 	if($res)
				{
					unlink('upload/'.$old_img);
					echo "
							<script> alert('Update Success');
							window.location='manage_category';
			 				</script>";
				}
			}
			 
			 else
			 {
			 	$data=array("cate_name"=>$cate_name);
			 	$res=$this->update_where('category',$data,$where);
			 	if($res){
							echo "
							<script> alert('Update Success');
							window.location='manage_category';
							</script>";
						}
					}
				}
			}						

				include_once('cate_edit.php');
				break;

			case '/add_product':
			$category=$this->select('category');

			if(isset($_REQUEST['submit']))
			{
				$prod_name=$_REQUEST['prod_name'];
				$prod_mainprice=$_REQUEST['prod_mainprice'];
				$prod_discprice=$_REQUEST['prod_discprice'];
				
				$prod_desc=$_REQUEST['prod_desc'];
				
				$prod_img=$_FILES['prod_img']['name'];  
				$path='upload/product/'.$prod_img;  
				$tmp_file=$_FILES['prod_img']['tmp_name']; 
				move_uploaded_file($tmp_file,$path);			
				
							
				$category_id=$_REQUEST['category_id'];
				
				$data=array("prod_name"=>$prod_name,"prod_mainprice"=>$prod_mainprice,"prod_discprice"=>$prod_discprice,"prod_desc"=>$prod_desc,"prod_img"=>$prod_img,"category_id"=>$category_id);
			
				$res=$this->insert('product',$data);
				
				if($res)
				{
					echo "<script> alert('register Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}

			   include_once ('add_product.php');
				break;

			case '/manage_product':
			$product_arr=$this->select('product');
				//print_r($product_arr);

				include_once ('manage_product.php');
				break;

			case '/prod_edit':
			 $category=$this->select('category');
			 if(isset($_REQUEST['editprod']))
		 {
				$product_id=$_REQUEST['editprod'];
				$where=array('product_id'=>$product_id);
			 	$run=$this->select_where('product',$where);
			 	$fetch=$run->fetch_object();
				$old_img=$fetch->prod_img;
								
			 	if(isset($_REQUEST['submit']))
				{
			 		$prod_name=$_REQUEST['prod_name'];
			 		$prod_mainprice=$_REQUEST['prod_mainprice'];
					$prod_discprice=$_REQUEST['prod_discprice'];
					$prod_desc=$_REQUEST['prod_desc'];

					$prod_img=$_FILES['prod_img']['name'];  
					$path='upload/product/'.$prod_img;  
					$tmp_file=$_FILES['prod_img']['tmp_name']; 
					move_uploaded_file($tmp_file,$path);	

					$category_id=$_REQUEST['category_id'];

					if($_FILES['prod_img']['size']>0)
					{
						$data=array("prod_name"=>$prod_name,"prod_mainprice"=>$prod_mainprice,"prod_discprice"=>$prod_discprice,"prod_desc"=>$prod_desc,"prod_img"=>$prod_img,"category_id"=>$category_id);
				$res=$this->update_where('product',$data,$where);
			 	if($res)
				{
					unlink('upload/product/'.$old_img);
					echo "
							<script> alert('Update Success');
							window.location='manage_product';
			 				</script>";
				}
			 }
			 else
			 {
			 	$data=array("prod_name"=>$prod_name,"prod_mainprice"=>$prod_mainprice,"prod_discprice"=>$prod_discprice,"prod_desc"=>$prod_desc,"category_id"=>$category_id);
				$res=$this->update_where('product',$data,$where);
			 	if($res)	
				{
							echo "
							<script> alert('Update Success');
							window.location='manage_product';
							</script>";
						}
					}
				}
			}						

				include_once('prod_edit.php');
				break;


			case '/add_blog': 
			if(isset($_REQUEST['submit']))
			{
				$title=$_REQUEST['title'];
				$description=$_REQUEST['description'];
				

				$img=$_FILES['img']['name'];  
				$path='upload/blog/'.$img;  
				$tmp_file=$_FILES['img']['tmp_name']; 
				move_uploaded_file($tmp_file,$path);			
											
				$data=array("title"=>$title,"description"=>$description,"img"=>$img);
				
				$res=$this->insert('blog',$data);
				
				if($res)
				{
					echo "<script> alert('register Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}

				include_once ('add_blog.php');
				break;

			case '/manage_blog':
			$blog_arr=$this->select('blog');
			include_once ('manage_blog.php');
				break;

			case '/blog_edit':
			 
			 if(isset($_REQUEST['editblog']))
		 {
				$blog_id=$_REQUEST['editblog'];
				$where=array('blog_id'=>$blog_id);
			 	$run=$this->select_where('blog',$where);
			 	$fetch=$run->fetch_object();
				$old_img=$fetch->img;
								
			 	if(isset($_REQUEST['submit']))
				{
			 		$title=$_REQUEST['title'];
			 		$description=$_REQUEST['description'];

					$img=$_FILES['img']['name'];  
					$path='upload/blog/'.$img;   
					$tmp_file=$_FILES['img']['tmp_name']; 
					move_uploaded_file($tmp_file,$path); 
					

					if($_FILES['img']['size']>0)
					{

				 	$data=array("title"=>$title,"description"=>$description,"img"=>$img);

				$res=$this->update_where('blog',$data,$where);
			 	if($res)
				{
					unlink('upload/blog/'.$old_img);
					echo "
							<script> alert('Update Success');
							window.location='manage_blog';
			 				</script>";
				}
			}
			 
			 else
				{
					$data=array("title"=>$title,"description"=>$description);

				$res=$this->update_where('blog',$data,$where);
			 	if($res)
				{
			         		echo "
							<script> alert('Update Success');
							window.location='manage_blog';
							</script>";
				}			
						
					}
				}
			}						

				include_once('blog_edit.php');
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
				$chk=$run->num_rows; 
				if($chk==1) 
				{
					$fetch=$run->fetch_object(); //
					$admin_id=$fetch->admin_id;						
					$admin_username=$fetch->admin_username;	
					$img=$fetch->img;
					
					$_SESSION['admin_id']=$admin_id;
					$_SESSION['admin_username']=$admin_username;
					$_SESSION['img']=$img;
					
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

			case '/delete':
			
			if(isset($_REQUEST['deletecate']))
			{
				$category_id=$_REQUEST['deletecate'];
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
				if(isset($_REQUEST['deletecate']))
			{
				$category_id=$_REQUEST['deletecate'];
				$where=array("category_id"=>$category_id);
				$run=$this->delete_where('category',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_category';
					</script>";
				}	
			}	

			if(isset($_REQUEST['deleteprod']))
			{
				$product_id=$_REQUEST['deleteprod'];
				$where=array("product_id"=>$product_id);
				$run=$this->select_where('product',$where);

				$fetch=$run->fetch_object();
				$file=$fetch->prod_img;
				
				$run=$this->delete_where('product',$where);
				if($run)
				{
					unlink('upload/product'.$file);
					echo "<script> alert('Delete Success'); 
					window.location='manage_product';
					</script>";
				}					
			}	
				if(isset($_REQUEST['deleteprod']))
			{
				$product_id=$_REQUEST['deleteprod'];
				$where=array("product_id"=>$product_id);
				$run=$this->delete_where('product',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_product';
					</script>";
				}	
			}	

			if(isset($_REQUEST['deleteblog']))
			{
				$blog_id=$_REQUEST['deleteblog'];
				$where=array("blog_id"=>$blog_id);
				$run=$this->select_where('blog',$where);

				$fetch=$run->fetch_object();
				$file=$fetch->img;
				
				$run=$this->delete_where('blog',$where);
				if($run)
				{
					unlink('upload/blog'.$file);
					echo "<script> alert('Delete Success'); 
					window.location='manage_blog';
					</script>";
				}					
			}	
				if(isset($_REQUEST['deleteblog']))
			{
				$blog_id=$_REQUEST['deleteblog'];
				$where=array("blog_id"=>$blog_id);
				$run=$this->delete_where('blog',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_blog';
					</script>";
				}	
			}	

		if(isset($_REQUEST['deletecontact']))
			{
				$contact_id=$_REQUEST['deletecontact'];
				$where=array("contact_id"=>$contact_id);
				$run=$this->delete_where('contact',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='View_contact_report';
					</script>";
				}	
			}	
			
			break;

				case '/register':
				if(isset($_REQUEST['submit']))
			{
				$admin_name=$_REQUEST['admin_name'];
				$admin_username=$_REQUEST['admin_username'];
				$admin_email=$_REQUEST['admin_email'];
				$admin_password=$_REQUEST['admin_password'];
				$enc_password=md5($admin_password);

				$file=$_FILES['img']['name'];  
				$path='upload/admin/'.$file;   
				$tmp_file=$_FILES['img']['tmp_name']; 
				move_uploaded_file($tmp_file,$path); 
										
				$data=array("admin_name"=>$admin_name,"admin_username"=>$admin_username,"admin_email"=>$admin_email,"admin_password"=>$enc_password,"img"=>$file
			);
		
				
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
$obj= new control;
?>