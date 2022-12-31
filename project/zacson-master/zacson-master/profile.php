<?php
    include_once('header.php');
?>
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9 col-md-10">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay="0.1s">Hi This is  Zacson</span>
                                <h1 data-animation="fadeInLeft" data-delay="0.4s">Gym Trainer</h1>
                                <a href="courses" class="border-btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">My Courses</a>
                            </div>
                        </div>
                    </div>
                 </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Traning categories Start -->
    
    <section class="team-area fix">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle text-center mb-55 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">
                        <h2>profile</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-3">
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-cat text-center mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <div class="cat-icon">
                            <img src="upload/<?php echo $fetch->img?>" alt="image" style="height: 300px; width: 300px;">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services">Meet your self</a></h5>
                            <p><div class="d-flex mb-3">
                        <p class="text-light mr-3">Name: <?php echo $fetch->name ?> </p>       
                    </div>

                    <div class="d-flex mb-3">
                        <p class="text-light mr-3">User Name:<?php echo $fetch->username ?>  </p>       
                    </div>

                    <div class="d-flex mb-3">
                        <p class="text-light mr-3">Email: <?php echo $fetch->email ?></p>
                    </div>

                    <div class="d-flex mb-3">
                        <p class=" mr-3">Mobile: <?php echo $fetch->mobile ?></p>
                    </div>

                    <div class="d-flex mb-3">
                        <p class="text-light mr-3">Gender: <?php echo $fetch->gender ?></p>
                    </div>

                    <div class="d-flex mb-3">
                        <p class="text-light mr-3">Language: <?php echo $fetch->lag ?></p>
                    </div>
                    <button type="edit" class="btn btn-success mt-2"> Edit</button>
                </div></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Services End -->
    
</main>
<?php
    include_once('footer.php');
?>
