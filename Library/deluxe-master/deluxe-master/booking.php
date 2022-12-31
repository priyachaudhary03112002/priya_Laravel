<?php
include_once('header.php');
?>
<html>
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
 </script>
	<script>
 $(document).ready(function(){
  $("#room_cate").change(function(){
  	if($("#room_cate").val() == "full_day"){
    $("#shift_cate").hide();
    $("#shift_type").hide();
    $("#in_time").hide();
    $("#check_in_time").hide();
    $("#out_time").hide();
    $("#check_out_time").hide();
    $("#check_out").show();
  }
});
  
  
  $("#room_cate").change(function(){
  	if($("#room_cate").val() == "half_day"){
    $("#shift_cate").show();
     $("#in_time").show();
    $("#out_time").show();
    $("#check_out").hide();
    $("#check_out_date").hide();
  }
});

   $("#room_cate").change(function(){
  	if($("#room_cate").val() == "room_type"){
    $("#shift_cate").show();
     $("#in_time").show();
    $("#out_time").show();
    $("#check_out").show();
     $("#check_in").show();
  }
});
});
</script>
</head>
<body>
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


    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
	        <div class="col-lg-3">
	        	</div>
		    		
		    	<div class="col-lg-6 sidebar">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Room Booking</h3>
	      			<form action="#" method="post">
	      				<div class="fields">
	      					<div class="form-group">
	      						<label>Room Type</label>
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select  name="room_cate" id="room_cate" class="form-control">
	                    	<option value="room_type" id="room_type">Room Type</option>
	                    	<option value="full_day" name="full_day">Full day</option>
	                      <option value="half_day" name="half_day">Half day</option>
	                      <option value="custom" name="custom">Custom</option>
	                       </select>
	                  </div>
		              </div>
		              <div class="form-group">
		              	<label id="check_in_date">Check In Date</label>
		                <input type="date" id="check_in" name="check_in" class="form-control">
		              </div>
		              <div class="form-group">
		              	<label id="check_out_date">Check Out Date</label>
		                <input type="date" id="check_out" name="check_out" class="form-control ">
		              </div>
		              
		         <div class="form-group">
	      						<label id="shift_type">Shift Type</label>
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="shift_cate" id="shift_cate" class="form-control">
	                    	<option value="">Select Shift Type</option>
	                    	<option value="morning">Morning</option>
	                      <option value="evening">evening</option>
	                     </select>
	                  </div>
		              </div>
		              <div class="form-group">
		              	<label id="check_in_time">Check In Time </label>
		                <input type="time" id="in_time" name="in_time" class="form-control checkin_time">
		              </div>
		              <div class="form-group">
		              	<label id="check_out_time">Check Out Time</label>
		                <input type="time" id="out_time" name="out_time" class="form-control checkout_time">
		              </div>
		             
		              <div class="form-group">
		                <input type="submit" value="booking" class="btn btn-primary py-3 px-5" name="booking">
		              </div>
		            </div>
	            </form>
	      		</div>
	      		
	        </div>
		    
    	</div>
    </div>
    
</section>  
  </body>
  </html>


    
    <?php
    include_once('footer.php');
?>