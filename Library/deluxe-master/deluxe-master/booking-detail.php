<?php
include_once('header.php');
?>

    <div class="hero-wrap" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
          	<div class="text">
	            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index">Home</a></span> <span>About</span></p>
	            <h1 class="mb-4 bread">Rooms</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

<br>
    <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
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
                  <h4 class="card-title">Booking Detail Table</h4>
                                             
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr class="table-light">
                        	<th> Book Id</th>
                          <th> Room cate</th>
                          <th> Check In</th>
                          <th>Check Out</th>
                          <th> Shift Cate</th>
                           <th>In Time</th>
                          <th> Out Time</th>
                          </tr>
                         </thead>
                    <tbody>
                       
                     <?php
                  foreach($booking_arr as $data)
                  {
                      ?>   
                        <tr class="table-active">
                        	<td><?php echo $data->book_id;?></td>
                          <td><?php echo $data->room_cate;?></td>
                          <td> <?php echo $data->check_in;?></td> 
                           <td><?php echo $data->check_out;?></td>
                           <td> <?php echo $data->shift_cate;?></td>
                          <td> <?php echo $data->in_time;?></td>
                          <td> <?php echo $data->out_time;?></td>
                          
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
          </div>
        </div>

<?php
   include_once('footer.php');
?>
   
  

 