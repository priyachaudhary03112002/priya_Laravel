<?php
  include_once ('header.php');
  
?>

     <div class="main-panel">
          <div class="content-wrapper">
           
            <div class="row">
              <div class="col-sm-6">
               <h3 class="section-title">Hi,<?php echo $fetch->admin_name?></h3>
             </div>
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Meet Your Self </h4>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-lg-6">
                            <div id="circleProgress6" class="progressbar-js-circle rounded p-3">
                                <img src="upload/admin/<?php echo $fetch->img?>" style="width:190px;height:195px; border-radius: 7px;" alt="image">
                            </div>
                          </div>
                         <div class="col-lg-6">
                            <ul class="session-by-channel-legend">
                              <li>
                                <div><strong class="text-dark mr-3">Name: <?php echo $fetch->admin_name ?> </strong>   </div>
                              </li>
                              <li>
                                <div><strong class="text-dark mr-3">username: <?php echo $fetch->admin_username ?></strong></div>
                              </li>
                              <li>
                                <div><strong class="text-dark mr-3">Email: <?php echo $fetch->admin_email ?></strong></div>
                              </li>
                                                            
                              <button class="btn btn-success mt-2"><a href="editprofile?btnadmin_id=<?php echo $fetch->admin_id?>"> Edit</a></button>
                               <div class="col-12 form-group">
                             <a href="change_password" style="color:MediumSeaGreen;"> change password</a>
                           </div>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
            
           
            
          </div>
          
         
         <?php
  include_once ('footer.php');
?>