<?php
include_once('model.php');  

class control extends model 
{
	function __construct()
	{
		// session_start();
		model::__construct();  
		$path=$_SERVER['PATH_INFO'];

		switch ($path) 
		{
			
			case '/index':
				include_once ('index.php');
				break;
			case '/rooms':
				include_once ('rooms.php');
				break;
			case '/about-us':
				include_once ('about-us.php');
				break;
			case '/booking-detail':
				$booking_arr=$this->select('booking');
				include_once ('booking-detail.php');
				break;
			
			case '/booking':
		  if(isset($_REQUEST['booking']))
			{
				$room_cate=$_REQUEST['room_cate'];
				$check_in=$_REQUEST['check_in'];
				$check_out=$_REQUEST['check_out'];
				$shift_cate=$_REQUEST['shift_cate'];
				$in_time=$_REQUEST['in_time'];
				$out_time=$_REQUEST['out_time'];
												
				$data=array("room_cate"=>$room_cate,"check_in"=>$check_in,"check_out"=>$check_out,"shift_cate"=>$shift_cate, "in_time"=>$in_time,"out_time"=>$out_time);
				
				
				$res=$this->insert('booking',$data);
				if($res)
				{
					echo "<script> alert('register Success')</script>";
				}
				else
				{
					echo "FGAILED";
				}
			}
				include_once ('booking.php');
				break;
			
		}
	}

}

$obj= new control;
?>