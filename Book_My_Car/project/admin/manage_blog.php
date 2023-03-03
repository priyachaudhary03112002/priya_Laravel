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
                                            <th>Blog_ID</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Blog_Photos</th>
                                            <th>Description</th>
                                            <th>Delete</th>
                                            <!-- <th>Edit</th> -->
                                       </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									if(!empty($blog_arr))
									{
										foreach($blog_arr as $data)
										{
									?>
                                        <tr class="odd gradeX">
                                            <th><?php echo $data->Blog_ID?></th>
                                            <th><?php echo $data->Title?></th>
											<th><?php echo $data->Image?></th>
                                            <th><img src="../Employee/img/upload/customer/<?php echo $data->Image;?>" width="50px" height="50px" ></th>
											<th><?php echo $data->Description?></th>                    
                                            <td> <a href="delete?btn_blog_id=<?php echo $data->Blog_ID;?>" class="btn btn-danger"> Delete </a> </td>
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