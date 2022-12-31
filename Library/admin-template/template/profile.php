<?php
  include_once('header.php');

?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="section-title">Hi,<?php echo $fetch->name?>!</h3>
              </div>             
             
            </div>
            <div class="row  mt-3">
              <div class="col-xl-7 d-flex grid-margin stretch-card">               
              <div class="card">
                  <div class="card-body">
                    <div class="d-flex flex-wrap justify-content-between">
                      <h4 class="card-title mb-3">Meet Your Self</h4>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-lg-6">
                            <div id="circleProgress6" class="progressbar-js-circle rounded p-3">
                                <img src="upload/<?php echo $fetch->img?>" style="width:220px;height:220px" alt="image">
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <ul class="session-by-channel-legend">
                              <li>
                                <div><strong class="text-dark mr-3">Name: <?php echo $fetch->name ?> </strong>   </div>
                              </li>
                              <li>
                                <div><strong class="text-dark mr-3">Email: <?php echo $fetch->email ?></strong></div>
                              </li>
                              <li>
                                <div><strong class="text-dark mr-3">Mobile: <?php echo $fetch->mobile ?></strong></div>
                              </li>
                              <li>
                                <div><strong class="text-dark mr-3">Language: <?php echo $fetch->lag ?></strong></div>
                                
                              </li>
                              <button class="btn btn-success mt-2"><a href="editprofile?btnadmin_id=<?php echo $fetch->admin_id?>"> Edit</a></button>
                               <!-- <div class="col-12 form-group"> -->
                             <a href="change_password" style="color:gray;"> change password</a>
                           <!-- </div> -->
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
          include_once('footer.php')
         ?>