<?php
  include_once ('header1.php');
  
?>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="assets/images/logo.svg">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3" method="post" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="admin_name" placeholder="name">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" name="admin_username" placeholder="username">
                  </div>
                  <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="admin_email" placeholder="email">
                </div> 
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="admin_password" placeholder="password">
                  </div>
                    <div class="control-group">
                            <input type="file" name="img" class="form-control" name="img">
                        </div>   
                                              
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input"> I agree to all Terms & Conditions </label>
                    </div>
                  </div>
                   <div>
                        <button class="btn btn-primary py-2 px-4" type="submit"  name="submit">Sign Up</button>
                     </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>