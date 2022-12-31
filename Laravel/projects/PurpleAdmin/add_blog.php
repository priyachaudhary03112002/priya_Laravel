<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Blog Form</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog Form</li>
                </ol>
              </nav>
            </div>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Blog Form </h4>
                   <br>
                    <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title">
                      </div>
                       <div class="form-group">
                        <label>File upload </label>
                        <input type="file" name="img" class="form-control"/>
                        </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Description
                        </label>
                        <input type="text" class="form-control" name="description" placeholder="Description
                          ">
                      </div>                     
                      </div>
                   
                      <button type="submit" class="btn btn-gradient-primary me-2" name="submit">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

 <?php
  include_once ('footer.php');
?>