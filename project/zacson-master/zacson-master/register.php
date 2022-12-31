<?php
include_once('header.php');
?>

<main>
    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 pt-70">
                            <h2>Register </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End --> 
    <!--?  Contact Area start  -->
    <section class="contact-section">
        
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Register Form</h2>
                </div>
                <div class="col-lg-6">
                    <form class="form-contact contact_form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                   <input class="form-control valid" name="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="username"  type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your username'" placeholder="Enter your username">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="password"  type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder="Enter your password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email"  type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="mobile"  type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter number'" placeholder="mobile number">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="control-group">
                            <input type="file" name="img" class="form-control" name="img">
                        </div>
                    </div>
                        <div class="col-md-6 form-groups">
                        <label><h4> Gender</h4></label><br>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>Male
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female
                        </label>
                     </div>
                 </div>

                    <div class="col-6 form-group">
                    <h4>Choose Lag</h4>
                   <h5> Hindi: <input type="checkbox" name="lag[]" value="Hindi" ></h5>
                   <h5> English: <input type="checkbox" name="lag[]" value="English"></h5>
                   <h5> Gujarati: <input type="checkbox" name="lag[]" value="Gujarati"></h5>
                    </div> 
                    <div class="col-12 form-group">
                        <button class="btn btn-primary py-4 px-4" type="submit"  name="submit">Sign Up</button>
                     </div>
                     <div class="col-8 form-group">
                                    
                    <a href="login"><h2> CLICK HERE FOR LOGIN</h2></a>
                    </div>
                    </form>
               
                </div>
               </div>
          </section>
       
   
    
</main>
<?php
include_once('footer.php');
?>
