<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index"> Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page" > Category Forms</li>
                </ol>
              </nav>
            </div>

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product From</h4>
                    <br>
                    <form class="forms-sample">
                       <div class="form-group">
                        <label for="exampleInputName1">Product Id</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Id">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Category Id</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Category Id">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Product mainprice </label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="mainprice">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Product discprice</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="discprice">
                      </div>         
                      <div class="form-group">
                        <label>File upload</label>
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