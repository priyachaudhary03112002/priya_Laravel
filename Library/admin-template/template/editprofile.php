<?php
include_once('header.php')
?>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-8 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              
              <h6 class="font-weight-light">change information about your self</h6>
              <form class="pt-3" method="post" action="" enctype="multipart/form-data">
                <div class="form-group">
                    Name:
                  <input type="text" class="form-control form-control-lg" name="name" value="<?php echo $fetch->name?>" >
                </div>
                <div class="form-group">
                    email:
                  <input type="email" class="form-control form-control-lg" name="email" value="<?php echo $fetch->email?>"  readonly>
                </div>    
                             
                
                <div class="form-group">
                    mobile:
                  <input type="text" class="form-control form-control-lg" name="mobile" value="<?php echo $fetch->mobile?>" >
                </div> 
                <div class="col-6 form-group">
                    <h6>Choose Lag</h6>
                   <input type="checkbox" name="lag[]" value="Hindi" <?php 
                                    $lag=$fetch->lag;
                                    $lag_arr=explode(",",$lag);
                                    if(in_array("Hindi",$lag_arr))
                                    {
                                        echo "checked";
                                    }
                                    ?>> Hindi 
                    <input type="checkbox" name="lag[]" value="English" <?php 
                                    $lag=$fetch->lag;
                                    $lag_arr=explode(",",$lag);
                                    if(in_array("English",$lag_arr))
                                    {
                                        echo "checked";
                                    }
                                    ?>>English
                    <input type="checkbox" name="lag[]" value="Gujarati" <?php 
                                    $lag=$fetch->lag;
                                    $lag_arr=explode(",",$lag);
                                    if(in_array("Gujarati",$lag_arr))
                                    {
                                        echo "checked";
                                    }
                                    ?>>Gujarati 
                    </div>
                    <div class="control-group">
                            <input type="file" name="img" class="form-control" name="img">
                            <img src="upload/<?php echo $fetch->img?>" style="width:50px;height:50px" alt="">
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
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  
   
<?php
include_once('footer.php')
?>
</div>