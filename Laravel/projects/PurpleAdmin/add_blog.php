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
                    <form class="forms-sample">
                      <div class="form-group">
                        <label for="exampleInputName1">Blog_Id</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Id">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Description
                        </label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Description
                          ">
                      </div>

                      <div class="form-group">
                        <label>Blog Img</label>
                        <input type="file" name="name" class="form-control" />
                        </div>
                      </div>
                   
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>

 <?php
  include_once ('footer.php');
?>