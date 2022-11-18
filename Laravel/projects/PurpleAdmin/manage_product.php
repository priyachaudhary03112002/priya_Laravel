<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="indexs">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Product Tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Product Table</h4>
                    <br>
                    <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Product_id</th>
                          <th>Categorie_id</th>
                          <th>Prod_name</th>
                          <th>Prod_mainprice</th>
                          <th>Prod_discprice</th>
                          <th>Prod_img</th>
                          <th>Prod_desc</th>
                          <th>buttons </th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         foreach($product_arr as $data)
                         {
                          ?>
                        <tr>
                          <td><?php echo $data->product_id;?></td>
                          <td><?php echo $data->category_id;?></td>
                          <td><?php echo $data->prod_name;?></td>
                          <td><?php echo $data->prod_mainprice;?></td>
                          <td><?php echo $data->prod_discprice;?></td>
                          <td><?php echo $data->prod_img;?></td>
                          <td><?php echo $data->prod_desc;?></td>
                          <td> <button type="button" class="btn btn-primary btn-sm">Edit</button>
                            <button type="button" class="btn btn-info btn-sm">Delete</button></td>
                        </tr>
                         <?php 
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                  </div>
                </div>
              </div>

 <?php
  include_once ('footer.php');
?>