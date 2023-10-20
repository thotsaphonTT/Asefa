<?php 
require('condb.php');

	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$email = $_POST['email'];

	$sql = "INSERT INTO `user`(`username`,`password`,`name`, `email`) 
	VALUES  ('$username','$password','$name','$email')";
	
	if ($query = mysqli_query($con,$sql)) {
		echo json_encode(array("status" => "success", "msg" => "เข้าสู่ระบบเลย!"));
	}else{
		echo json_encode(array("status" => "warning", "msg" => "ลงทะเบียนล้มเหลว กรุณาลองใหม่!"));
	}


?>
