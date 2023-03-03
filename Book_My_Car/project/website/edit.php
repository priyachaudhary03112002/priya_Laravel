<?php
if(isset($_SESSION['cust_id']))
{
	
}
else
{
	echo "<script>
		window.location='index';
		</script>";
}	
include_once('header.php');
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Edit Profile</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Edit Profile</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Edit Profile</h1>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form action="" method="post" enctype="multipart/form-data">
    
						  <div class="p-3 p-lg-5 border">
							<div class="form-group row">
							  <div class="col-md-6">
								<label for="name" class="text-black">Name <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_fname" name="name" value="<?php echo $fetch->Name;?>">
							  </div>
			
							</div>
							<div class="form-group row">
							  <div class="col-md-12">
								<label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
								<input type="email" class="form-control" id="c_fname" name="email" value="<?php echo $fetch->Email;?>" readonly>
							  </div>
							 
							</div>
							
							<div class="col-md-6">
								<label for="Mobile" class="text-black">Mobile <span class="text-danger">*</span></label>
								<input type="number" class="form-control" id="c_lname" name="mobile" value="<?php echo $fetch->Mobile;?>">
							  </div>   

						
							  
							  
							  <div class="col-md-6">
								<label for="password" class="text-black">Upload profile <span class="text-danger">*</span></label>
								<input type="file" class="form-control" id="c_lname" name="Image">
								<img src="img/upload/customer/<?php echo $fetch->Image?>" style="width:40px;height:40px">
							  </div>
								
							</div>
						  
							<div class="form-group row">
							  <div class="col-lg-12">
								<input type="submit" name="save" class="btn btn-primary btn-lg btn-block" value="Save">
							  </div>
							 
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