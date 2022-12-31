<?php
include_once('header1.php')
?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-5 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form id="form1" class="form" data-validator-option="{timely:2, focusCleanup:true}" method="post" action="">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="name" placeholder="name" data-rule="required; name;"
            data-rule-username="[/[\w\d]{4,30}/, 'Please enter 3-12 digits, letters, underscores']"
            data-tip="You can use letters, numbers and periods">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" placeholder="email" data-rule="required;email"  data-tip="ex:example@abc.com">
                </div>    
                              
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="password" data-rule="Password: required; length(4~16)"
            data-tip="Please fill in at least four characters">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="mobile" placeholder="mobile number" data-rule="required;phone number"  data-tip="ex:1234567890">
                </div> 
                <div class="col-7 form-group">
                    <h5>Choose Lag</h5>
                   <input type="checkbox" name="lag[]" value="Hindi" data-rule="checked"> Hindi 
                    <input type="checkbox" name="lag[]" value="English">English
                    <input type="checkbox" name="lag[]" value="Gujarati">Gujarati 
                    </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3">
                  <button class="btn btn-primary " type="submit"  name="submit">SIGN UP
                </div><br>
                <div class="col-7 form-group">
                 <h5> Already have an account? <a href="login"> Login</a></h5>
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
  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
