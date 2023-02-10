<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data_arr = json_decode(file_get_contents("php://input"), true);

$name = $data_arr['name'];
$email = $data_arr['email'];
$password = $data_arr['password'];

include "dbconfig.php";

$sql = "INSERT INTO register(name, email, password) VALUES ('{$name}', '{$email}', '{$password}')";

if(mysqli_query($conn, $sql)){
	echo json_encode(array('message' => 'Register Success.', 'status' => true));

}else{

 echo json_encode(array('message' => 'Register Failed.', 'status' => false));

}
?>