<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Order Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Order Tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Order Table</h4>
                    <br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Order_id</th>
                          <th>Cust_id</th>
                          <th>Cart_id</th>
                          <th>Total Amount</th>
                          <th>button </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         foreach($order_tbl_arr as $data)
                         {
                          ?>
                        <tr>
                          <td><?php echo $data->order_id;?></td>
                          <td><?php echo $data->cust_id;?></td>
                          <td><?php echo $data->cart_id;?></td>
                          <td><?php echo $data->total_amount;?></td>
                          
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

 <?php
  include_once ('footer.php');
?>