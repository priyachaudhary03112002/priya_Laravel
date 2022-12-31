<?php
include_once('header.php');
?>

    

    <!-- Start Banner Area -->
    <section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Blog Page</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="profile">Profile</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner Area -->

   
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                </div>
                <div class="col-lg-6">
                    <div class="blog_right_sidebar">
                     
                        <aside class="single_sidebar_widget author_widget">
                            <img src="upload/<?php echo $fetch->img?>" alt="image" style="height: 200px; width: 200px;">
                                                       
            <div class="col-lg-12 h-auto mb-30">
                <div class="h-30 bg-light p-40">
                    <h3>Meet Your Self</h3>

                    <div class=" mb-3">
                        <strong class="text-dark mr-3">Name: <?php echo $fetch->name ?> </strong>       
                    </div>

                    <div class=" mb-3">
                        <strong class="text-dark mr-3">User Name:<?php echo $fetch->username ?>  </strong>       
                    </div>

                    <div class=" mb-3">
                        <strong class="text-dark mr-3">Email: <?php echo $fetch->email ?></strong>
                    </div>

                    <div class=" mb-3">
                        <strong class="text-dark mr-3">Mobile: <?php echo $fetch->mobile ?></strong>
                    </div>

                    <div class=" mb-3">
                        <strong class="text-dark mr-3">Language: <?php echo $fetch->lag ?></strong>
                    </div>
                    <button type="edit" class="btn btn-success mt-2"> Edit</button>
                </div>
            </div>
                            <div class="br"></div>
                        </aside>
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

   <?php
include_once('footer.php');
?>