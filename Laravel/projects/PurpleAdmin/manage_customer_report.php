<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Customer Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Customer Tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-xl-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Customer Table</h4>
                    <br>
                    <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Cust_id</th>
                          <th>Name</th>
                          <th> Username </th>
                          <th> Password </th>
                          <th>Email</th>
                          <th>mobile</th>
                          <th>address </th>
                          <th>img </th>
                          <th>gender </th>
                          <th>lag </th>
                          </tr>
                      </thead>
                      <tbody>
                         <?php
                         foreach($customer_arr as $data)
                         {
                          ?>
                        <tr>
                          <td><?php echo $data->cust_id;?></td>
                          <td><?php echo $data->name;?></td>
                          <td><?php echo $data->username;?></td>
                          <td><?php echo $data->password;?></td>
                          <td><?php echo $data->email;?></td>
                          <td><?php echo $data->mobile;?></td>
                          <td><?php echo $data->address;?></td>
                          <td><?php echo $data->img;?></td>
                          <td><?php echo $data->gender;?></td>
                          <td><?php echo $data->lag;?></td>
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