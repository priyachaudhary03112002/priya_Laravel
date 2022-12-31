<?php
    include_once('header.php');
?>

    <!-- Breadcrumb Start --> 
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Profile</a>
                    <span class="breadcrumb-item active">Meet Your Self</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Detail Start -->
    <div class="container-fluid pb-5">
        <div class="row px-xl-5">
            <div class="col-lg-4 mb-25">
                <div id="product-carousel" >
                    <div class="carousel-inner bg-light">
                        <div class="carousel-item active">
                        <img src="upload/<?php echo $fetch->img?>" alt="Image" style="height: 400px; width: 400px;">
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3>Meet Your Self</h3>

                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Name: <?php echo $fetch->name ?> </strong>       
                    </div>

                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">User Name: <?php echo $fetch->username ?> </strong>       
                    </div>

                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Email: <?php echo $fetch->email ?></strong>
                    </div>

                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Mobile: <?php echo $fetch->mobile ?></strong>
                    </div>

                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Address: <?php echo $fetch->address ?></strong>
                    </div>

                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Gender: <?php echo $fetch->gender ?></strong>
                    </div>

                    <div class="d-flex mb-3">
                        <strong class="text-dark mr-3">Language: <?php echo $fetch->lag ?></strong>
                    </div>
                    <button class="btn btn-success mt-2"><a href="editprofile?btncust_id=<?php echo $fetch->cust_id?>"> Edit</a></button> &nbsp
                    <a href="change_password" style="color:#f44336;"> change password</a>
                </div>
            </div>
        </div>
      
    </div>
    


<?php
    include_once('footer.php');
?>