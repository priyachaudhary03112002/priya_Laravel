<?php

include_once('model.php');
    class control extends model
    {
        function __construct()
        {
             session_start();
             model::__construct();   
            $path=$_SERVER['PATH_INFO'];//http://localhost/students/2Sep_PHP_GLS_2022/project/website/control.php
            
            
            switch($path)
            {

                case '/dashboard':
                        include_once('dashboard.php');
                         break;  


                // case '/index':
                //         include_once('index.php');
                //         break;
               
                case '/manage_car_advertisement':
                        $car_advertisement_arr=$this->select('car_advertisement');
                        include_once('manage_car_advertisement.php');
                        break;
               
                // case '/reply_Contact':
                //         if(isset($_REQUEST['submit']))
                //         {
                //                 $Name=$_REQUEST['Name'];
				// $Email=$_REQUEST['Email'];
				// $Comment=$_REQUEST['Comment'];
				

                //           $data=array("Name"=>$Name,"Email"=>$Email,"Comment"=>$Comment);
                    
                //                 $res=$this->insert('contact',$data);
				// if($res)
				// {
				// 	echo "<script>
				// 		alert('Register Success');
				// 		window.location='reply_Contact';
				// 	</script>";
				// }
				// else
				// {
				// 	echo "<script>
				// 		alert('Not Success');
				// 	</script>";
				// }


                //         }

                //         include_once('reply_Contact.php');
                //         break;

                case '/manage_Contact':
                        $contact_report_arr=$this->select('contact');
                        include_once('manage_Contact.php');
                        break;
                 
                case '/manage_Customer':
                        $customer_arr=$this->select('customer');
                        include_once('manage_Customer.php');
                        break;
                
                case '/manage_Carbooking':
                        $car_booking_arr=$this->select('booking');
                        include_once('manage_Carbooking.php');
                        break;
                        
                        
                case '/manage_car_booking':
                        $car_booking_arr=$this->select('booking');
                        include_once('manage_car_booking.php');
                        break;         

                case '/add_categories':

                        if(isset($_REQUEST['submit']))
                        {
                                $Category_Name=$_REQUEST['Category_Name'];
				
                              //img
				$file=$_FILES['Category_Image']['name']; // name store db
				$path='img/upload/customer/'.$file; // create path for upload
				$dupl_file=$_FILES['Category_Image']['tmp_name']; // get dup file
				move_uploaded_file($dupl_file,$path);// move dupl file in pat



                          $data=array("Category_Name"=>$Category_Name,"Category_Image"=>$file);
                    
                                $res=$this->insert('category',$data);
				if($res)
				{
					echo "<script>
						alert('Register Success');
						window.location='add_categories';
					</script>";
				}
				else
				{
					echo "<script>
						alert('Not Success');
					</script>";
				}


                        }

                        include_once('add_categories.php');
                        break;
                   
                case '/manage_categories':
                        $category_arr=$this->select('category');
                        include_once('manage_categories.php');
                        break;          

                case '/add_location':

                        if(isset($_REQUEST['submit']))
                        {
                                $Location_Name=$_REQUEST['Location_Name'];
				
				

                          $data=array("Location_Name"=>$Location_Name);
                    
                                $res=$this->insert('location_area',$data);
				if($res)
				{
					echo "<script>
						alert('Register Success');
						window.location='add_location';
					</script>";
				}
				else
				{
					echo "<script>
						alert('Not Success');
					</script>";
				}


                        }

                        include_once('add_location.php');
                        break;
                        
                case '/manage_location':
                        $location_arr=$this->select('location_area');
                        include_once('manage_location.php');
                        break;

                case '/add_blog':
                       
                        if(isset($_REQUEST['submit']))
                        {
                                $Title=$_REQUEST['Title'];
                               

				
                                  //img
								$file=$_FILES['Image']['name']; // name store db
								$path='../Employee/img/upload/customer/'.$file; // create path for upload
								$dupl_file=$_FILES['Image']['tmp_name']; // get dup file
								move_uploaded_file($dupl_file,$path);// move dupl file in pat
                             
								$Description=$_REQUEST['Description'];

                               // $Image=$_REQUEST['Image'];
				

                               
                          $data=array("Title"=>$Title,"Image"=>$file,"Description"=>$Description);
                    
                                $res=$this->insert('blog',$data);
							if($res)
							{
								echo "<script>
									alert('Register Success');
									window.location='add_blog';
								</script>";
							}
							else
							{
								echo "<script>
									alert('Not Success');
								</script>";
							}


                        }

                        include_once('add_blog.php');
                        break;
                            
               
                case '/manage_blog':
                        $blog_arr=$this->select('blog');
                        include_once('manage_blog.php');
                        break;         
                        
                  
                         
                case '/index':

                        if(isset($_REQUEST['login']))
                        {
                               
                                $Username=$_REQUEST['Username'];
			        $password=($_REQUEST['Password']);
                                

								
                         		 $where=array("Username"=>$Username,"Password"=>$password);
                			 $res=$this->select_where('admin',$where);
                                         $chk=$res->num_rows;

								 $fetch=$res->fetch_object();
								 $_SESSION['Admin_ID']=$fetch->Admin_ID;
								 $_SESSION['Name']=$fetch->Name;

								 if($chk==1) //true
								 {
									
									
										echo "<script>
										alert('Login Success');
										window.location='manage_categories';
										</script>";
								}
								else
								{
										echo "<script>
											alert('Login Failed due to Wrong Credentials');
																	window.location='login';
										</script>";
								}


                        }
                        
                        

                        include_once('index.php');
                         break;


                         
 case '/add_employee':
                     
        if(isset($_REQUEST['submit']))
        {
                $email=$_REQUEST['Email'];
                $emp_name=$_REQUEST['Emp_Name'];
                $emp_username=$_REQUEST['Emp_Username'];
                $Password=$_REQUEST['Password'];

        


                $data=array("Email"=>$email,"Emp_Name"=>$emp_name,"Emp_Username"=>$emp_username,"Password"=>$Password);
    
                $res=$this->insert('employee',$data);
                if($res)
                {
                        echo "<script>
                                alert('Employee Added Successfully');
                                window.location='manage_employee';
                        </script>";
                }
                else
                {
                        echo "<script>
                                alert('Not Success');
                        </script>";
                }


        }   

        include_once('add_employee.php');
        break;

        case '/manage_employee':
                $employee_arr=$this->select('employee');
                include_once('manage_employee.php');
                break;    
                    
                         case '/Status':
			
                                if(isset($_REQUEST['btn_cust_id']))
                                {
                                        $Customer_ID=$_REQUEST['btn_cust_id'];
                                        
                                        $where=array("Customer_ID"=>$Customer_ID);
                                        
                                        //img get for del
                                        $data=$this->select_where('customer',$where);
                                        $fetch=$data->fetch_object();
                                        $Status=$fetch->Status;
                                        if($Status=="BLOCK")
                                        {
                                                $data=array("Status"=>"UNBLOCK");
                                                $res=$this->update('customer',$data,$where);
                                                if($res)
                                                {
                                                        
                                                        echo "<script>
                                                        alert('Unblock Success');
                                                        window.location='manage_Customer';
                                                        </script>";
                                                }
                                        }
                                        else
                                        {
                                                $data=array("Status"=>"BLOCK");
                                                $res=$this->update('customer',$data,$where);
                                                if($res)
                                                {
                                                        echo "<script>
                                                        alert('Block Success');
                                                        window.location='manage_Customer';
                                                        </script>";
                                                }
                                        }
                                }     
                          break;

                    case '/delete':
			
			if(isset($_REQUEST['btn_cust_id']))
			{
				$Customer_ID=$_REQUEST['btn_cust_id'];
				
				$where=array("Customer_ID"=>$Customer_ID);
				
				//img get for del
				$data=$this->select_where('customer',$where);
				$fetch=$data->fetch_object();
				$del_img=$fetch->Image;
				
				$res=$this->delete_where('customer',$where);
				if($res)
				{
					unlink('../website/img/upload/customer/'.$del_img);// delete img from path
					echo "<script>
					alert('Delete Success');
					window.location='manage_Customer';
					</script>";
				}
			}

             if(isset($_REQUEST['btn_cate_id']))
			{
				$Category_ID=$_REQUEST['btn_cate_id'];
				
				$where=array("Category_ID"=>$Category_ID);
				
				//img get for del
				$data=$this->select_where('category',$where);
				$fetch=$data->fetch_object();
				$del_img=$fetch->Category_Image;
				
				$res=$this->delete_where('category',$where);
				if($res)
				{
					unlink('../Employee/img/upload/customer/'.$del_img);// delete img from path 
					echo "<script>
					alert('Delete Success');
					window.location='manage_categories';
					</script>";
				}
			}


             if(isset($_REQUEST['btn_loc_id']))
			{
				$Location_ID=$_REQUEST['btn_loc_id'];
				
				$where=array("Location_ID"=>$Location_ID);
				
				$res=$this->delete_where('location_area',$where);
				if($res)
				{
					echo "<script>
					alert('Delete Success');
					window.location='manage_location';
					</script>";
				}
			}

                        if(isset($_REQUEST['btn_car_adv_id']))
			{
				$Adv_ID=$_REQUEST['btn_car_adv_id'];
				
				$where=array("Adv_ID"=>$Adv_ID);
				
				//img get for del
				$data=$this->select_where('car_advertisement',$where);
				$fetch=$data->fetch_object();
				$del_img=$fetch->Images;
				
				$res=$this->delete_where('car_advertisement',$where);
				if($res)
				{
					unlink('../website/img/upload/customer/'.$del_img);// delete img from path 
					echo "<script>
					alert('Delete Success');
					window.location='manage_car_advertisement';
					</script>";
				}
			}
                     
                        if(isset($_REQUEST['btn_blog_id']))
			{
				$Blog_ID=$_REQUEST['btn_blog_id'];
				
				$where=array("Blog_ID"=>$Blog_ID);
				
				//img get for del
				$data=$this->select_where('blog',$where);
				$fetch=$data->fetch_object();
				$del_img=$fetch->Image;
				
				$res=$this->delete_where('blog',$where);
				if($res)
				{
					unlink('../Employee/img/upload/customer/'.$del_img);// delete img from path Employee/img/upload/customer
					echo "<script>
					alert('Delete Success');
					window.location='manage_blog';
					</script>";
				}
				
			}

                        if(isset($_REQUEST['btn_contact_id']))
			{
				$Contact_ID=$_REQUEST['btn_contact_id'];
				
				$where=array("Contact_ID"=>$Contact_ID);
				
				$res=$this->delete_where('contact',$where);
				if($res)
				{
					echo "<script>
					alert('Delete Success');
					window.location='manage_Contact';
					</script>";
				}
			}
				if(isset($_REQUEST['btn_employee_id']))
				{
					$Emp_ID=$_REQUEST['btn_employee_id'];
					
					$where=array("Emp_ID"=>$Emp_ID);
					
					$res=$this->delete_where('employee',$where);
					if($res)
					{
						echo "<script>
						alert('Employee Deleted Successfully');
						window.location='manage_employee';
						</script>";
					}
				

			}
            break;
             
			case '/logout':
				unset($_SESSION['Admin_ID']);
				unset($_SESSION['Name']);
				echo "<script>
						alert('Logout Success');
						window.location='index';
						</script>";
				
                        break;


                      
                        
            }
            
        }
    }
    
    $obj=new control;
    
    



?>