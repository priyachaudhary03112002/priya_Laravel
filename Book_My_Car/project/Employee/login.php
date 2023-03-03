<?php
if(isset($_SESSION['Emp_ID']))
{
	echo "<script>
    window.location='dashboard';
    </script>";
}
// else{
//     echo "<script>
// 		window.location='login';
// 		</script>";
// }

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
                      

                <h1 style="color:purple"> <b> Employee Panel </b></h1>
                     

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
        </div>
    </div>

    

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Login Us</h1>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                
                                <div class="col-12 form-group">
                                    <input type="email" name="Email" class="form-control p-4" placeholder="Your Email" required="required">
                                </div>
				<div class="col-12 form-group">
                                    <input type="password" name="Password" class="form-control p-4" placeholder="Your password" required="required">
                                </div>
				 <div class="right-div">
					<input class="btn btn-primary py-3 px-5" type="submit" name="login" value="login">
                                </div>
			        <div class="col-6">
					<!--<a href="signup.php">Click For Registration</a>-->
                                </div>
                            </div>
                            
                           
                        </form>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.png" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Vendor End -->
<br>
<br><br><br><br><br><br><br><br>

<?php
include_once('footer.php');
?>