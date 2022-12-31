<?php
include_once('header.php');
?>
          <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Book Report Table</h4>
                   <div class="card-header-form">
                    <form method="post" align="center">
                   <div class="input-group">  
                  <input type="text" value='<?php if(isset($search)){echo $search;}?>' placeholder="Search.." name="search" onkeyup="getData(this.value)">
                  <div class="input-group-btn">
                     <button type="submit"><i class="fa fa-search"></i></button>
                              </div> 
                              </div> 
                            </form></div>    
                            <form action="" method="post">   
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> book_id</th>
                          <th>cate_id</th>
                          <th>book_name</th>
                          <th> author</th>
                           <th>quantity</th>
                          <th>price</th>
                          <th>rack_no</th>
                          </tr>
                         </thead>

                    <tbody>

                       
                      <?php
                  foreach($book_arr as $data)
                  {
                      ?>   
                        <tr class="table-danger">
                          <td><?php echo $data->book_id;?></td>
                          <td>  <?php echo $data->cate_id;?></td> 
                           <td><?php echo $data->book_name;?></td>
                           <td> <?php echo $data->author;?></td>
                          <td> <?php echo $data->quantity;?></td>
                          <td> <?php echo $data->price;?></td>
                          <td> <?php echo $data->rack_no;?></td>

                           </tr> 
                          <?php 
                        }
                        ?>                                       
                            
                        
                      </tbody>
                    </table>
                  </form>


<script>
function getData(search)
{
  $.ajax
  ({
    type: "POST",
    url: "searchData",
    data:"search=" + search,
    success: function(data)
    {
      $("#userdata").html(data) ;
    }
  });
}
</script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

   
    <?php
    include_once('footer.php');
  ?>
</div>