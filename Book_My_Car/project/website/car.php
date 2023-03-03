<?php

include_once('header.php');
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">Car Advertisement</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">Car Advertisement</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Find Your Car</h1>
            <div class="row">

            <?php
            foreach($car_advertisement as $data)
            {
            ?>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="mb-4" src="../website/img/upload/customer/<?php echo $data->Images;?>" alt="" width="100%" height="250px">
                        <h4 class="text-uppercase mb-4"><?php echo $data->Title?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <i class="fa fa-car text-primary mr-1"></i>
                                <span><?php echo $data->Rent_Time?></span>
                            </div>
                            <!-- <div class="px-2 border-left border-right">
                                <i class="fa fa-cogs text-primary mr-1"></i>
                             
                            </div> -->
                           
                            <div class="px-2">
                                <i class="fa fa-road text-primary mr-1"></i>
                                <?php echo"₹"?><?php echo $data->Amount?>
                            </div>
                            
                            <div class="px-2" data-toggle="collapse" data-target="#demo">
                                
                                <i  class="fa fa-edit text-primary mr-1">View...</i>
                            </div>
							
                            
                        </div>
						<div id="demo" class="collapse">
							<p><span class="text-primary">Advertisement Id :</span><?php echo $data->Adv_ID?></p>
							<p><span class="text-primary">Car Title :</span><?php echo $data->Title?></p>
							<p><span class="text-primary">Car Amount :</span><?php echo $data->Amount?></p>
							<p><span class="text-primary">Car RC Number :</span><?php echo $data->RC_Number?></p>
							<p><span class="text-primary">Car No :</span><?php echo $data->Car_No?></p>
							<p><span class="text-primary">Contact :</span><?php echo $data->Contact?></p>
							<p><span class="text-primary">Car Description :</span><?php echo $data->Description?></p>
                        </div>
						
						<a  href="view_booking?btn_book=<?php echo $data->Adv_ID?>" class="btn btn-primary px-3"> Book Car  </a>
                        

                    </div>
                </div>
							

             <?php
            }
             ?>   
            </div>
        </div>
    </div>
    <!-- Rent A Car End -->
                         

    <!-- Banner Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0">
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                        <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="img/banner-left.png" alt="">
                        <div class="text-right">
                            <h3 class="text-uppercase text-light mb-3">Want to be driver?</h3>
                            <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                        <div class="text-left">
                            <h3 class="text-uppercase text-light mb-3">Looking for a car?</h3>
                            <p class="mb-4">Lorem justo sit sit ipsum eos lorem kasd, kasd labore</p>
                            <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                        </div>
                        <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="img/banner-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Banner End -->


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