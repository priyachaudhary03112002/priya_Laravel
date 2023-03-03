<?php

include_once('header.php');
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Book Now</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Book Now</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">BOOK NOW </h1>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form action="" method="post" enctype="multipart/form-data">
    
						  <div class="p-3 p-lg-5 border">
							<div class="form-group row">
							  <div class="col-md-6">

								<label for="name" class="text-black">Title <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_fname" name="title" value="<?php echo $fetch->Title;?>" readonly>
                <input type="hidden" class="form-control" id="" name="Customer_ID" value="<?php echo $_SESSION['Customer_ID'];?>">
                <input type="hidden" class="form-control" id="" name="Adv_ID" value="<?php echo $fetch->Adv_ID;?>">
							  </div>
			
							</div>
							<div class="form-group row">
							  <div class="col-md-12">
								<label for="Email" class="text-black">Amount <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_fname" name="Amount" value="<?php echo $fetch->Amount;?>" readonly>
							  </div>
							</div>
							
							<div class="col-md-6">
								<label for="Mobile" class="text-black">RC_Number <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_lname" name="rcnumber" value="<?php echo $fetch->RC_Number;?>"readonly>
							  </div>   

                <div class="col-md-6">
								<label for="Mobile" class="text-black">Car_No <span class="text-danger">*</span></label>
								<input type="text" class="form-control" id="c_lname" name="carno" value="<?php echo $fetch->Car_No;?>"readonly>
							  </div>  

                <div class="col-md-6">
								<label for="Mobile" class="text-black">Contact <span class="text-danger">*</span></label>
								<input type="number" class="form-control" id="c_lname" name="Contact" value="<?php echo $fetch->Contact;?>"readonly>
							  </div>  
							  <br>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="birthday">Date:</label>
                
                <input type="date" id="date" name="Bookdate_From">
                <label for="cars">select no Days:</label>
                <select id="cars" name="Days">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                </select>
								
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