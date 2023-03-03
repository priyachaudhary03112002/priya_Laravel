<?php

include_once('../admin/model.php');
    class control extends model
    {
        function __construct()
        {
	    session_start(); 
            model::__construct();
            $path=$_SERVER['PATH_INFO'];//http://localhost/students/2Sep_PHP_GLS_2022/project/website/control.php
            
            
            switch($path)
            {
                case '/index':
                        include_once('index.php');
                        break;
               
                case '/about':
                        include_once('about.php');
                        break;
               
                case '/service':
                        include_once('service.php');
                        break;

                case '/car':
				
                        $car_advertisement=$this->select('car_advertisement');
                        include_once('car.php');
                        break;

                case '/blog':
                                $blog=$this->select('blog');
                                include_once('bloglist.php');
                                break;        
                
                case '/detail':
                        include_once('detail.php');
                        break;
                
                        
                case '/team':
                        include_once('team.php');
                        break;         

                case '/testimonial':
                        include_once('testimonial.php');
                        break;
                   
                case '/contact':
                        if(isset($_REQUEST['submit']))
                        {
                                $name=$_REQUEST['Name'];
                                $email=$_REQUEST['Email'];
                                $comment=$_REQUEST['Comment'];
				


                          $data=array("Name"=>$name,"Email"=>$email,"Comment"=>$comment);
                    
                                $res=$this->insert('contact',$data);
				if($res)
				{
					echo "<script>
						alert('Register Success');
						window.location='login';
					</script>";
				}
				else
				{
					echo "<script>
						alert('Not Success');
					</script>";
				}


                        }

                        include_once('contact.php');
                        break;  
                        
                        
               case '/signup':
                        if(isset($_REQUEST['submit']))
                               {
                                        $name=$_REQUEST['Name'];
                                        $username=$_REQUEST['Username'];
                                        $password=md5($_REQUEST['Password']);
                                        $email=$_REQUEST['Email'];
                                        $mobile=$_REQUEST['Mobile'];
                                        $Address=$_REQUEST['Address'];
                                        $Id_Proof_No=$_REQUEST['Id_Proof_No'];
                                        
                                         //img
                                        $file=$_FILES['Image']['name']; // name store db
                                        $path='img/upload/customer/'.$file; // create path for upload
                                        $dupl_file=$_FILES['Image']['tmp_name']; // get dup file
                                        move_uploaded_file($dupl_file,$path);// move dupl file in pat
                                     

        
        
                                $data=array("Name"=>$name,"Username"=>$username,"Password"=>$password,"email"=>$email
                                        ,"mobile"=>$mobile,"Address"=>$Address,"Id_Proof_No"=>$Id_Proof_No,"Image"=>$file);
                            
                                        $res=$this->insert('customer',$data);
                                        if($res)
                                        {
                                                echo "<script>
                                                        alert('Register Success');
                                                        window.location='login';
                                                </script>";
                                        }
                                        else
                                        {
                                                echo "<script>
                                                        alert('Not Success');
                                                </script>";
                                        }
        
        
                                }
        
                                include_once('signup.php');
                                break;



                case '/login':

                        if(isset($_REQUEST['login']))
                        {
                               
                                $email=$_REQUEST['Email'];
				$password=md5($_REQUEST['Password']);
                                


                          $where=array("Email"=>$email,"Password"=>$password);
                          $res=$this->select_where('customer',$where);
                          $chk=$res->num_rows;
				if($chk==1) //true
				{ 
                                        $fetch=$res->fetch_object();
                                        if($fetch->Status=="UNBLOCK")
				        {

                                           $_SESSION['Customer_ID']=$fetch->Customer_ID;
					   $_SESSION['Email']=$fetch->Email;
					   $_SESSION['Name']=$fetch->Name;
                                       
                                         echo "<script>
                                                alert('Login Success');
                                                window.location='profile';
                                         </script>";
                                      }
                                      else
                                      {
                                              echo "<script>
                                              alert('Login Failed due to user Blocked');
                                              window.location='login';
                                              </script>";
                                      }
				}
				else
				{
					echo "<script>
						alert('Login Failed due to Wrong Credentials');
                                                window.location='login';
					</script>";
				        
                                }


                        }


                        include_once('login.php');
                        break;

                

                        case '/profile':
			
			$where=array("Customer_ID"=>$_SESSION['Customer_ID']);
			$res=$this->select_where('customer',$where);
			$fetch=$res->fetch_object();
			
			include_once('profile.php');
			break;

                        case '/editprofile':
			
                                if(isset($_REQUEST['btn_edit']))
                                {
                                        $Customer_ID=$_REQUEST['btn_edit'];
                                        
                                        $where=array("Customer_ID"=>$Customer_ID);
                                        $res=$this->select_where('customer',$where);
                                        $fetch=$res->fetch_object();
                                        
                                        
                                        
                                        if(isset($_REQUEST['save']))
                                        {
                                                $Name=$_REQUEST['name'];
                                                $Email=$_REQUEST['email'];
                                                $Mobile=$_REQUEST['mobile'];
                                                
                                                //img
                                                if($_FILES['Image']['size']>0)
                                                {
                                                        $Image=$_FILES['Image']['name']; // name store db
                                                        $path='img/upload/customer/'.$Image; // create path for upload
                                                        $dupl_file=$_FILES['Image']['tmp_name']; // get dup file
                                                        move_uploaded_file($dupl_file,$path);// move dupl file in path
                                                        
                                                        $data=array("name"=>$Name,"email"=>$Email,"mobile"=>$Mobile,
                                                        "Customer_ID"=>$Customer_ID,"Image"=>$Image);
                                                
                                                        $res=$this->update('customer',$data,$where);
                                                        if($res)
                                                        { 
                                                                $del_img=$fetch->Image;
                                                                unlink('img/upload/customer/'.$del_img);// delete img from path
                                                                echo "<script>
                                                                        alert('Update Success');
                                                                        window.location='profile';
                                                                </script>";
                                                        }
                                                        else
                                                        {
                                                                echo "<script>
                                                                        alert('Not Success');
                                                                </script>";
                                                        }
                                                }
                                                else
                                                {
                                                        $data=array("name"=>$Name,"email"=>$Email,"mobile"=>$Mobile,
                                                        "Customer_ID"=>$Customer_ID);
                                                
                                                        $res=$this->update('customer',$data,$where);
                                                        if($res)
                                                        {
                                                                echo "<script>
                                                                        alert('Update Success');
                                                                        window.location='profile';
                                                                </script>";
                                                        }
                                                        else
                                                        {
                                                                echo "<script>
                                                                        alert('Not Success');
                                                                </script>";
                                                        }
                                                }
                                        }
                                }
                                include_once('edit.php');
                                break;


                         
                                


                                        case '/my_booking':
			
                                               
                                        $where=array("Customer_ID"=>$_SESSION['Customer_ID']);
                                        $fetch=$this->select_wherefetch('booking',$where);
                                       
                                        include_once('my_booking.php');
                                        break;        
                                        

                                        case '/my_adv':
			
                                               
                                                $where=array("Customer_ID"=>$_SESSION['Customer_ID']);
                                                $fetch=$this->select_wherefetch('car_advertisement',$where);
                                        
                                        include_once('my_adv.php');
                                        break; 


                                        case '/view_booking':
                                        if(isset($_SESSION['Customer_ID']))
										{
											if(isset($_REQUEST['btn_book']))
											{
													$Adv_ID=$_REQUEST['btn_book'];
													
													$where=array("Adv_ID"=>$Adv_ID);
													$res=$this->select_where('car_advertisement',$where);
													$fetch=$res->fetch_object();
													
													if(isset($_REQUEST['save']))
													{
															$Customer_ID=$_REQUEST['Customer_ID']; 
															$Adv_ID=$_REQUEST['Adv_ID'];
															$Bookdate_From=$_REQUEST['Bookdate_From'];
															$days=$_REQUEST['Days'];
															$Amount=$_REQUEST['Amount'];
															$total_ammout=$Amount*$days;        
														   
															$data=array("Customer_ID"=>$Customer_ID,"Adv_ID"=>$Adv_ID,"Bookdate_From"=>$Bookdate_From,"Days"=>$days,"Amount"=>$total_ammout);
												 
															 $res=$this->insert('booking',$data);
															 if($res)
															 {
                                                                                                                                      
																	 echo "<script>
																			 alert('Register Success');
																			 window.location='car';
																	 </script>";
															 }
															 else
															 {
																	 echo "<script>
																			 alert('Not Success');
																	 </script>";
															 }
							 
													 }

											}
										}
										else
										{
											echo "<script>
											alert('Please Log In First');
                                                                                        window.location='login';
											</script>";
										}
                                        include_once('book.php');
                                        break;         










                        

                                case '/add_advertisement':
                                        $location_area=$this->select('location_area');
                                        $category=$this->select('category');

                                        if(isset($_REQUEST['submit']))
                                               {
                                                       $location=$_REQUEST['Location_ID'];
                                                       $category=$_REQUEST['Category_ID'];
                                                       $customer=$_REQUEST['Customer_ID'];
                                                        $car=$_REQUEST['Title'];
                                                        $amount=$_REQUEST['Amount'];
                                                        $rc_number=$_REQUEST['RC_Number'];
                                                        $carno=$_REQUEST['Car_No'];
                                                        $contact=$_REQUEST['Contact'];
                                                        $rent_time=$_REQUEST['Rent_Time'];
                                                        $car_description=$_REQUEST['Description'];
                                                        
                                                         //img
                                                        $file=$_FILES['Images']['name']; // name store db
                                                        $path='img/upload/customer/'.$file; // create path for upload
                                                        $dupl_file=$_FILES['Images']['tmp_name']; // get dup file
                                                        move_uploaded_file($dupl_file,$path);// move dupl file in pat
                                                     
                
                        
                        
                                                $data=array("Location_ID"=>$location,"Category_ID"=>$category,"Customer_ID"=>($_SESSION['Customer_ID']),"Title"=>$car,"Amount"=>$amount,"RC_Number"=>$rc_number,"Car_No"=>$carno
                                                        ,"Contact"=>$contact,"Rent_Time"=>$rent_time,"Images"=>$file,"Description"=>$car_description);
                                            
                                                        $res=$this->insert('car_advertisement',$data);
                                                        if($res)
                                                        {
                                                                echo "<script>
                                                                        alert('Register Success');
                                                                        window.location='login';
                                                                </script>";
                                                        }
                                                        else
                                                        {
                                                                echo "<script>
                                                                        alert('Not Success');
                                                                </script>";
                                                        }
                        
                        
                                                }
                        
                                                include_once('add_advertisement.php');
                                                break;

                                                case '/delete':
			
                                                        if(isset($_REQUEST['btn_delete_adv']))
                                                        {
                                                                $Adv_ID=$_REQUEST['btn_delete_adv'];
                                                                
                                                                $where=array("Adv_ID"=>$Adv_ID);
                                                                
                                                                //img get for del
                                                                $data=$this->select_where('car_advertisement',$where);
                                                                $fetch=$data->fetch_object();
                                                                $del_img=$fetch->Images;
                                                                
                                                                $res=$this->delete_where('car_advertisement',$where);
                                                                if($res)
                                                                {
                                                                        unlink('img/upload/customer/'.$del_img);// delete img from path
                                                                        echo "<script>
                                                                        alert('Car Advertisment Deleted Successfully');
                                                                        window.location='profile';
                                                                        </script>";
                                                                }
                                                        }
                                                break;
                                                
                   
                   default:
                   echo "Page Not Found";
                   break;


                
                  case '/logout':
			unset($_SESSION['Customer_ID']);
			unset($_SESSION['Email']);
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
