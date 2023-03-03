<?php

include_once('header.php');
?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header">
        <h1 class="display-3 text-uppercase text-white mb-3">blog listing</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">blog Listing</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Rent A Car Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">blog</h1>
            <div class="row">

            <?php
            foreach($blog as $data)
            {
            ?>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="rent-item mb-4">
                        <img class="mb-4" src="../Employee/img/upload/customer/<?php echo $data->Image;?>" alt="" width="100%" height="250px">
                        <h4 class="text-uppercase mb-4"><?php echo $data->Title?></h4>
                        <div class="d-flex justify-content-center mb-4">
                            <div class="px-2">
                                <!-- <i class="fa fa-car text-primary mr-1"></i> -->
                                <label style="color:red;"><b>BLOG DESCRIPTION</b></label><br>
                                <span><?php ?><?php echo $data->Description?></span>
                            </div>
                            
                        </div>   
                   </div>        
                </div>            
                            <?php
            }
             ?>  
          </div>
    </div> 
</div>
<?php
include_once('footer.php');
?>