<?php
if(isset($_SESSION['Adv_ID']))
{
	echo "<script>
		window.location='add_advertisement';
		</script>";
}
include_once('header.php');
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Add Advertisement</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Add Advertisement</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Add Advertisement</h1>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form action="" method="post" enctype="multipart/form-data" >
                            <div class="row">
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Car Name" name="Title" required="required">
                                </div>
                                <div class="col-12 form-group">
                                    <select class="form-control"  name="Location_ID" required="required">
                                        <option value="">Select Location Area</option>
                                        <?php
                                        foreach($location_area as $w)
                                        {
                                        ?> 
                                        <option value="<?php echo $w->Location_ID?>">
                                            <?php echo $w->Location_Name?>
                                        </option>
                                        <?php
                                        }
                                        ?>    
                                    </select>    
                                </div>
                                <div class="col-12 form-group">
                                    <select class="form-control"  name="Category_ID" required="required">
                                        <option value="">Select Car Categories</option>
                                        <?php
                                        foreach($category as $w)
                                        {
                                        ?> 
                                        <option value="<?php echo $w->Category_ID?>">
                                            <?php echo $w->Category_Name?>
                                        </option>
                                        <?php
                                        }
                                        ?>    
                                    </select>    
                                </div>
                                <div class="col-12 form-group">
                                    <select class="form-control"  name="Rent_Time" required="required">
                                        <option value="">Select Rent Time</option>
                                        <option value="Day">Day</option>   
                                    </select>    
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Amount" name="Amount" required="required">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Add RC Number"  name="RC_Number" required="required">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Add Car Plate No"  name="Car_No" required="required">
                                </div>
                                <div class="col-12 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Add Your Contact"  name="Contact" required="required">
                                </div>
                                
                                <label>&nbsp; &nbsp; &nbsp; Add Car Image</label>
				                <div class="col-12 form-group">
                                    <input type="file" class="form-control p-4"  name="Images" required="required">
                                </div>
                                
				
				
				                 <div class="col-12 form-group">
                                    <input type="text" class="form-control p-4" placeholder="Add Car Description"  name="Description" required="required">
                                </div>
				
                                <!-- <div class="col-12 form-group">
                                    <input type="file" class="form-control p-4"  name="Image" required="required">
                                </div> -->
				


				 <div class="col-6">
					<button class="btn btn-primary py-3 px-5" name="submit" type="submit">submit</button>
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


