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
                    <form class="#" method="post" action="#" enctype="multipart/form-data">
                    
                       <div class="form-group">
                        <label for="exampleInputName1">Category Name</label>
                           <select name="category_id" class="form-control "  required="required">
                    <option value="">Select Category</option>
                    <?php
                    foreach($category as $c)
                    {
                    ?>
                    <option value="<?php echo $c->category_id?>">
                            <?php echo $c->cate_name?>
                    </option>
                    <?php   
                    }
                    ?>
                  </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="prod_name" placeholder="Name">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Product mainprice </label>
                        <input type="text" class="form-control" name="prod_mainprice" placeholder="mainprice">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Product discprice</label>
                        <input type="text" class="form-control"  name="prod_discprice" placeholder="discprice">
                      </div>         
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="prod_img" class="form-control" />
                        </div>
                       
                      <div class="form-group">
                        <label for="exampleInputName1">Product description </label>
                        <input type="text" class="form-control" name="prod_desc" placeholder="description">
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