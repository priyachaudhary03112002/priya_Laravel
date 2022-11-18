<?php
include_once('header.php');
?>
         <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Table with contextual classes</h4>
                  <p class="card-description">
                    Add class <code>.table-{color}</code>
                  </p>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>cate_id</th>
                          <th>cate_name</th>
                          <th> button</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                  foreach($category_arr as $data)
                  {
                      ?>
                        <tr class="table-warning">
                          <td><?php echo $data->cate_id;?></td>
                          <td><?php echo $data->cate_name;?></td>
                          <td> <a href="cate_edit?editbtn=<?php echo $data->cate_id?>" class="btn btn-primary" name="submit">Edit</a>

                            <a href="cate_delete?deletebtn=<?php echo $data->cate_id?>" class="btn btn-danger">Delete</a>
                          <?php 
                        }
                        ?>                       
                                              
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
    <?php
    include_once('footer.php');
  ?>
</div>