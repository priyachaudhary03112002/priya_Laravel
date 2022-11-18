<?php
    include_once('header.php');
?>

    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <span class="breadcrumb-item active">Edit profile</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Contact Start -->
    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Edit profile</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30">
                    <div id="success"></div>
                     <form action="#" method="post" enctype="multipart/form-data">
                        <div class="control-group">
                            <input type="text" class="form-control" value="<?php echo $fetch->name?>" name="name" placeholder=" Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                         <div class="control-group">
                            <input type="text" class="form-control" value="<?php echo $fetch->username?>" name="username" placeholder="username" readonly
                                required="required" data-validation-required-message="Please enter your User Name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        
                                              
                        <div class="control-group">
                            <input type="email" class="form-control" value="<?php echo $fetch->email?>" name="email" placeholder="Your Email" readonly
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                         <div class="control-group">
                            <input type=" number" class="form-control" value="<?php echo $fetch->mobile?>" name="mobile" placeholder="mobile number"
                                required="required" data-validation-required-message="Please enter your mobile number" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                    <label for="address" class="form-lable"></label>
                    <textarea rows="5" cols="15" class="form-control form-control-lg"  name="address" placeholder="address"><?php echo $fetch->address?></textarea>
                  </div>
                    
                     <div class="control-group">
                            <input type="file" name="img" class="form-control" name="img">
                            <img src="upload/<?php echo $fetch->img?>" style="width:50px;height:50px" alt="">
                        </div>
                        <br>
                        <div class="form-groups">
                        <label>Gender</label><br>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" <?php 
                                    $gender=$fetch->gender;
                                    if($gender=="male")
                                    {
                                        echo "checked";
                                    }
                                    ?>>Male 
                        </label>
                        </div>
                        <div class="form-check-inline">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female" <?php 
                                    $gender=$fetch->gender;
                                    if($gender=="female")
                                    {
                                        echo "checked";
                                    }
                                    ?>>Female
                        </label>
                     </div>
                 </div>

                    <div class="col-6 form-group">
                    <h6>Choose Lag</h6>
                    Hindi: <input type="checkbox" name="lag[]" value="Hindi" <?php 
                                    $lag=$fetch->lag;
                                    $lag_arr=explode(",",$lag);
                                    if(in_array("Hindi",$lag_arr))
                                    {
                                        echo "checked";
                                    }
                                    ?>> 
                    English: <input type="checkbox" name="lag[]" value="English" <?php 
                                    $lag=$fetch->lag;
                                    $lag_arr=explode(",",$lag);
                                    if(in_array("English",$lag_arr))
                                    {
                                        echo "checked";
                                    }
                                    ?>>
                    Gujarati: <input type="checkbox" name="lag[]" value="Gujarati" <?php 
                                    $lag=$fetch->lag;
                                    $lag_arr=explode(",",$lag);
                                    if(in_array("Gujarati",$lag_arr))
                                    {
                                        echo "checked";
                                    }
                                    ?>>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit"  name="submit">Save</button>
                     </div>
                     <div class="col-6 form-group">
                                    <br>
                                    <a href="profile">Back</a>
                                </div>
                    <div class="col-6 form-group">
                                    
                    <a href="Signin">CLICK HERE FOR SIGNIN</a>
                    </div>
                                        
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30">
                    <iframe style="width: 100%; height: 250px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="bg-light p-30 mb-3">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<?php
    include_once('footer.php');
?>


 
                 
                    
                  


                  