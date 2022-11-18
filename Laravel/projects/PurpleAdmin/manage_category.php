<?php
  include_once ('header.php');
?>

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Category Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Category Table</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Category Table</h4>
                    
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Categorie_id</th>
                          <th>Category Name</th>
                          <th>Category Image</th>
                          <th>button </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                  foreach($category_arr as $data)
                  {
                      ?>
                        <tr>
                          <td><?php echo $data->category_id;?></td>
                          <td><?php echo $data->cate_name;?></td>
                          <td><?php echo $data->cate_img;?></td>
                           
                          <td> <a href="cate_edit?editcate=<?php echo $data->cate_id?>" class="btn btn-primary btn-sm" name="submit">Edit</a>

                             <a href="cate_delete?delcategory=<?php echo $data->category_id?>" class="btn btn-info btn-sm" name="submit">Delete</a> </td>

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