<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Customer</h4>
                
                            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Categories
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Location_ID</th>
                                            <th>Location_Name</th>
                                            <th>Delete</th>
                                            <!-- <th>Edit</th>                -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($location_arr))
									{
										foreach($location_arr as $data)
										{
									?>
                                        <tr class="odd gradeX">
                                            <th><?php echo $data->Location_ID?></th>
                                            <th><?php echo $data->Location_Name?></th>
                                            <td><a href="delete?btn_loc_id=<?php echo $data->Location_ID;?>" class="btn btn-danger"> Delete </a></td>
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
  
  /* THis is sir created button of edit and delete which is not highlighted on frontend screen when fetching data
   in brwoser so i kept it in this comment for future reference
  <th><a href="#" class="btn btn-danger">Delete</a></th>
  <th><a href="#" class="btn btn-primary">Edit</a></th>*/
  ?>