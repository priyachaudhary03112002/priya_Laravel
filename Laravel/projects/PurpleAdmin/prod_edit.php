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
                      if($c->category_id==$fetch->category_id)
                      {
                    ?>
                    <option value="<?php echo $c->category_id?>" selected>
                            <?php echo $c->cate_name?>
                    </option>
                    <?php   
                    }
                    else
                    {
                    ?>
                    <option value="<?php echo $c->category_id?>">
                                    <?php echo $c->cate_name?>
                    </option>
                    <?php
                  }}
                    ?>
                  </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="prod_name" value="<?php echo $fetch->prod_name?>" placeholder="Name">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Product mainprice </label>
                        <input type="text" class="form-control" name="prod_mainprice" value="<?php echo $fetch->prod_mainprice?>" placeholder="mainprice">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName1">Product discprice</label>
                        <input type="text" class="form-control"  name="prod_discprice" value="<?php echo $fetch->prod_discprice?>" placeholder="discprice">
                      </div>         
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="prod_img" class="form-control" />
                        <img src="upload/product/<?php echo $fetch->prod_img?>" style="width:50px;height:50px" alt="">
                        </div>
                       
                      <div class="form-group">
                        <label for="exampleInputName1">Product description </label>
                        <input type="text" class="form-control" name="prod_desc" value="<?php echo $fetch->prod_desc?>" placeholder="description">
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