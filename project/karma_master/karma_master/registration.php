 <?php
 include_once('header.php');
 ?>
<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Register/Login</h1>
                    <nav class="d-flex align-items-center">
                        <a href="index">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="login">Register/Login</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="login_box_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login_box_img">
                        <img class="img-fluid" src="img/login.jpg" alt="">
                        <div class="hover">
                            <h4>New to our website?</h4>
                            <p>There are advances being made in science and technology everyday, and a good example of this is the</p>
                            <a class="primary-btn" href="login">CLICK HERE FOR LOGIN</a>
                        </div>
                    </div>
                </div>
            

        <div class="col-lg-6">
                    <div class="login_form_inner">
                        <h3>Register in to enter</h3>
                     <form id="form-1" action="#" method="post" enctype="multipart/form-data">
                     <div class="col-md-12 form-group">
                                <input type="text"  class="form-control"  name="name" placeholder="name" required="required" data-validation-required-message="Please enter your name">
                            </div>
                        <div class="col-md-12 form-group">
                                <input type="text" class="form-control"  name="username" placeholder="Username" required="required" data-validation-required-message="Please enter your username">
                            </div>
                        
                                              
                        <div class="col-md-12 form-group">
                                <input type="password" class="form-control"  name="password" placeholder="Password" required="required" data-validation-required-message="Please enter your password">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control"  name="email" placeholder="email" required="required" data-validation-required-message="Please enter your email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control"  name="mobile" placeholder="mobile number" required="required" data-validation-required-message="Please enter your mobile number">
                            </div>
                             <div class="col-12">
                                <div class="control-group">
                            <input type="file" name="img" class="form-control" name="img">
                        </div>
                    </div>           
                        
                       <!-- <div class="col-md-6 form-groups">
                       <h5> <label> Gender</label></h5>
                        <div class="form-check-inline">
                       <h6> <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>Male</h6>
                        </label>
                        </div>
                        <div class="form-check-inline">
                       <h6> <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">Female</h6>
                        </label>
                     </div>
                 </div>
 -->
                    <div class="col-4 form-group">
                    <h5>Choose Lag</h5>
                   <h6> Hindi: <input type="checkbox" name="lag[]" value="Hindi" ></h6>
                   <h6> English: <input type="checkbox" name="lag[]" value="English"></h6>
                   <h6> Gujarati: <input type="checkbox" name="lag[]" value="Gujarati"></h6>
                    </div>  
                    <div class="col-6 form-group">
                        <button class="btn btn-primary py-2 px-4" type="submit"  name="submit">Sign Up</button>
                     </div>
                    <div class="col-6 form-group">
                                    
                    <a href="login">CLICK HERE FOR LOGIN</a>
                    </div>
                                        
                    </form>
                </div>
            </div>
           </div>
        </div>
    </div>
   </section>

    <?php
 include_once('footer.php');
 ?>