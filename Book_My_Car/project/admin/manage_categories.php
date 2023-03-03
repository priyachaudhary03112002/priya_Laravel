<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Categories</h4>
                
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
                                            <th>Category_ID</th>
                                            <th>Image</th>
                                            <th>Category_Name</th>
                                            <th>Category_Image</th>
                                            <th>Delete</th>
                                            <!-- <th>Edit</th> -->
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($category_arr))
									{
										foreach($category_arr as $data)
										{
									?>
                                        <tr class="odd gradeX">
                                            <th><?php echo $data->Category_ID?></th>
                                            <th><img src="img/upload/customer/<?php echo $data->Category_Image;?>" width="50px" height="25px" ></th>
                                            <th><?php echo $data->Category_Name?></th>
											<th><?php echo $data->Category_Image?></th>
                                            <!-- <td> <button class="btn btn-danger"> Delete </td> -->
                                            <td><a href="delete?btn_cate_id=<?php echo $data->Category_ID;?>" class="btn btn-danger"> Delete</a></td>
                                           
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
           
   