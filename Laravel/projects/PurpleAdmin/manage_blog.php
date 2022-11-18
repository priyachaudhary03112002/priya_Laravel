<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Blog Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blog Tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Blog Table</h4>
                    <br>
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Blog_id</th>
                          <th>Title</th>
                          <th>Img</th>
                          <th>Description</th>
                          <th>buttons</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php
                         foreach($blog_arr as $data)
                         {
                          ?>
                        <tr>
                          <td><?php echo $data->blog_id;?></td>
                          <td><?php echo $data->title;?></td>
                          <td><?php echo $data->img;?></td>
                          <td><?php echo $data->description;?></td>
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