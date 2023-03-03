<?php
if(isset($_SESSION['Customer_ID']))
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
        <h1 class="display-3 text-uppercase text-white mb-3">My Booking</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="text-body m-0 px-3">/</h6>
            <h6 class="text-uppercase text-body m-0">My Booking</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">My Booking</h1>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;" align="center">
                       <?php
                       if(!empty($fetch))
                       {
                            foreach($fetch as $d)
                            {
                            ?>
                                <div class="card" style="width:400px">
                                    <div align="center">
                                    <!-- <img class="card-img-top"  src="../website/img/upload/customer/<?php //echo $d->Image?>" alt="Card image" style="width:75%;height:200px" > -->
                                    </div>
                                    <div class="card-body">
                                    <h4 class="card-title">Bookdate_From :  <?php echo $d->Bookdate_From?> </h4>
                                    <h4 class="card-title">Days :  <?php echo $d->Days?></h4>
                                    <h4 class="card-title">Amount :  <?php echo $d->Amount?></h4>
                                    
                                    
                                    </div>
                            
                                </div>
                                <br>     
                                <?php
                            }
                        }
                                ?>   
                       
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