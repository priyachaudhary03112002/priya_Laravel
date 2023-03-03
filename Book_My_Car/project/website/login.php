<?php
if(isset($_SESSION['Customer_ID']))
{
	echo "<script>
		window.location='index';
		</script>";
}
include_once('header.php');
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Login</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Login</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Login Us</h1>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form action="" method="post" >
                            <div class="row">
                                
                                <div class="col-12 form-group">
                                    <input type="email"  name="Email" class="form-control p-4" placeholder="Your Email" required="required">
                                </div>
				<div class="col-12 form-group">
                                    <input type="password" name="Password" class="form-control p-4" placeholder="Your password" required="required" >
                                </div>
				 <div class="col-6">
					<input class="btn btn-primary py-3 px-5" type="submit" name="login" value="login">
                                </div>
			        <div class="col-6">
					<a href="signup.php">Click For Registration</a>
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
    <div class="container-fluid py-5">
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
    </div>
    <!-- Vendor End -->


<?php
include_once('footer.php');
?>