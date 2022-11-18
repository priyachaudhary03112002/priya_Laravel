  <?php
  include_once('header.php');
  ?>
          <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic form elements</h4>
                  <p class="card-description">
                    Basic form elements
                  </p>
                  <form class="forms-sample" method="post" action="">
                    <div class="form-group">
                      <label for="exampleInputName1">cate Id</label>
                      <select name="cate_id" class="form-control "  required="required">
                    <option value="">Select Category</option>
                    <?php
                    foreach($category as $c)
                    {
                    ?>
                    <option value="<?php echo $c->cate_id?>">
                            <?php echo $c->cate_name?>
                    </option>
                    <?php   
                    }
                    ?>
                  </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">book name</label>
                      <input type="text" class="form-control" name="book_name" placeholder="book_name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">author</label>
                      <input type="text" class="form-control" name="author" placeholder="author">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword4">quantity</label>
                      <input type="quantity" class="form-control" name="quantity" placeholder="quantity">
                      </div>

                    <div>
                    <label for="exampleInputPassword4">price</label>
                      <input type="price" class="form-control" name="price" placeholder="price">
                    </div>
                    <br>
                    <div>
                    <label for="exampleInputPassword4">rack no</label>
                      <input type="number" class="form-control" name="rack_no" placeholder="rack_no">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mr-2" type="submit" name="submit">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

<?php
include_once('footer.php');
?>
</div>