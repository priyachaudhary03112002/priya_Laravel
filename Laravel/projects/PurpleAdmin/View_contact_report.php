<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Contact Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contect Tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Contact Table</h4>
                    <br> 
                     <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>contact_id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                         foreach($contact_arr as $data)
                         {
                          ?>
                        <tr>
                          <td><?php echo $data->contact_id;?></td>
                          <td><?php echo $data->name;?></td>
                          <td><?php echo $data->email;?></td>
                          <td><?php echo $data->subject;?></td>
                          <td><?php echo $data->message;?></td>

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