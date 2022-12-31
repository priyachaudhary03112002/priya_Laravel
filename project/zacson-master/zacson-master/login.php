<?php
if(isset($_SESSION['name']))
{
    echo "<script>window.location='index';</script>";
}
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
                            <h2>Login</h2>
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
                    <h2 class="contact-title">Login Form</h2>
                </div>
                <div class="col-lg-4">
                    <form class="form-contact contact_form" action="" method="post" >
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                   <input class="form-control valid" name="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control valid" name="password"  type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder="Enter your password">
                                </div>
                            </div>
                                                
                       
                      <div class="col-12 form-group">
                        <button class="btn btn-primary py-4 px-4" type="submit"  name="submit">Login</button>
                       <h4><a href="#">Forgot Password?</a></h4>
                     </div>
                     <div class="col-8 form-group">
                                    
                    <a href="register"><h3>CLICK HERE FOR REGISTER</h3></a>
                    </div>
                    </form>
                </div>
                <
               
            </div>
        </div>
    </section>
   
    
</main>
<?php
include_once('footer.php');
?>
