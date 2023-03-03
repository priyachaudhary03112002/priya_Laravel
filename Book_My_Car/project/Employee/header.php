<?php
if(isset($_SESSION['Emp_ID']))
{

}
else
{
    echo "<script>
    window.location='login';
    </script>";
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
        .marq {
            padding-top: 2px;
            padding-bottom: 2px;
            
        }
      
        
    /*.geek1 {
        text-align:center;
        font-family:"Times New Roman";
       color:#000000;
        font-weight:bold;
    }*/

    .marq {
            padding-top: 2px;
            padding-bottom: 2px;
            width: 130px;
        }
      
        
    .geek1 {
        text-align:center;
        font-family:"Times New Roman";
       color:#FFCC66;
        font-weight:bold;
        width: 1px;
    }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index">
                <!-- <marquee  behavior="scroll" direction="left" scrollamount="5"
                 class="marq"
                     bgcolor="#003366" 
                     direction="left" 
                     loop=""
                     style="color:white" >
                <div class="geek1" >Employee Panel</div> </marquee>
               
                <marquee behavior="scroll" direction="right" scrollamount="5" 
                     bgcolor="#003366" 
                     direction="left" 
                     loop=""
                     style="color:red" >
                      <div  class="geek1" >Employee Panel</div></marquee> -->
                      

                

               <!-- <h2 style="color:red"> <marquee> Employee Panel</marquee></h2>-->
                   <!-- <img src="assets/img/logo.jpg"height="50px"weight="50px" />-->
                </a>

            </div>

            <!-- <div class="right-div">
                <a href="login" class="btn btn-danger pull-right">LOG IN</a>
            </div> -->
            <!-- <div>
            <a href="logout" class="dropdown-item">Logout</a>
            </div> -->
            <h1 style="color:purple"> <b> Employee Panel </b></h1>
                <?php
						if(isset($_SESSION['Emp_ID']))
						{
						?> 
                            <div>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><b>Hi..<?php echo $_SESSION['Emp_Name']?></b> </a>
                                <div class="right-div">

                              <button class="btn btn-danger" >  <a href="logout" class="primary" style="color:white;">Logout</a></button>
								</div>
							</div>
						<?php
						}
                        ?>
						
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard" class="menu-top-active">DASHBOARD</a></li>
                           
                         <!-- <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Categories <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add_categories.php">Add Categories</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_categories.php">Manage Categories</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Location <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add_location.php">Add Location</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_location.php">Manage Location</a></li>
                                </ul>
                            </li>-->

                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">CATEGORIES<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="add_categories">Add Categories</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_categories">Manage Categories</a></li>
                                </ul>
                            </li>
                            
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">LOCATION<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add_location">Add Location</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_location">Manage Location</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Car Adv<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_car_advertisement">Manage Car Advertisement</a></li>
                                </ul>
                            </li>
                        
                           <!-- <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Blog<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add_blog.php">Add Blog</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_blog.php">Manage Blog</a></li>
                                </ul>
                            </li>-->
                            
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">MANAGE Customer<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_Customer">Manage Customer</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Car Booking<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_Carbooking">Manage Car Booking</a></li>
                                </ul>
                            </li>
                           
                            
                           

                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">BLOG<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add_blog">Add Blog</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_blog">Manage Blog</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Contact<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="reply_Contact">Reply Contact</a></li> -->
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_Contact">Manage Contact</a></li>
                                </ul>
                            </li>

                            <!-- <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">Add Features<i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="add_categories">Add Categories</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_categories">Manage Categories</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add_location">Add Location</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_location">Manage Location</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="add_blog">Add Blog</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage_blog">Manage Blog</a></li>
                                </ul>
                            </li> -->
                             

                        </ul>
                       
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->