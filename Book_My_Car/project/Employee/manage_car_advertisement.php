<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Car Advertisement</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Manage Car Advertisement
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Advertisement ID</th>
                                            <th> Location ID</th>
                                            <th>Category ID</th>
                                            <th>Title </th>
                                            <th>Amount </th>
                                            <th>RC_Number</th>
                                            <th>Car_No</th>
                                            <th>Contact</th>
                                            <th>Rent Time</th>
                                            <!-- <th>Images</th> -->
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Delete</th>
                                            <!-- <th>Edit</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($car_advertisement_arr))
									{
										foreach($car_advertisement_arr as $data)
										{
									?>
                                        <tr class="odd gradeX">
                                        <th><?php echo $data->Adv_ID?></th>
                                            <th><?php echo $data->Location_ID?></th>
											<th><?php echo $data->Category_ID?></th>
											<th><?php echo $data->Title?></th>
											<th><?php echo $data->Amount?></th>
											<th><?php echo $data->RC_Number?></th>
											<th><?php echo $data->Car_No?></th>
											<th><?php echo $data->Contact?></th>
											<th><?php echo $data->Rent_Time?></th>
                                            <!-- <th><?php echo $data->Images?></th> -->
                                            <th><img src="../website/img/upload/customer/<?php echo $data->Images;?>" width="50px" height="25px" ></th>
											<th><?php echo $data->Description?></th>
                                            <td> <a href="delete?btn_car_adv_id=<?php echo $data->Adv_ID;?>" class="btn btn-danger"> Delete</a> </td>
                                            <!-- <td> <button class="btn btn-primary"> Edit </td> -->
                                        </tr>
                                        <?php
										}
									}
									?>  
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
               
    </div>
    </div>
   
 <?php
  include_once('footer.php');
  ?>