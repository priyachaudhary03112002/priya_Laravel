<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Cart Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Cart Tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Cart Table</h4>
                    <br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Cart_id</th>
                          <th>Product_id</th>
                          <th>qty</th>
                          </tr>
                      </thead>
                      <tbody> 
                        <?php
                         foreach($cart_arr as $data)
                         {
                          ?>
                        <tr>
                          <td><?php echo $data->cart_id;?></td>
                          <td><?php echo $data->product_id;?></td>
                          <td><?php echo $data->qty;?></td>
                                                
                          </tr>
                        <?php 
                        }
                        ?>

                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

 <?php
  include_once ('footer.php');
?>