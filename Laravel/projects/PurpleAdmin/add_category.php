<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Category Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Category</li>
                </ol>
              </nav>
            </div>
 
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category form</h4>
                    <br>
                    <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                        <input type="text" class="form-control" name="cate_name" placeholder="Name">
                      </div>
                                      
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="cate_img" class="form-control" />
                        </div>
                      </div>
                   
                      <button type="submit" name="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

 <?php
  include_once ('footer.php');
?>