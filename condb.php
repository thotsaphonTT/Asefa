<?php
date_default_timezone_set('Asia/Bangkok');
$server = "localhost";
$username = "root";
$password = "";
$dabasename = "db_resume";

$con = mysqli_connect($server,$username,$password,$dabasename);
if($con){
	//echo "เชื่อมต่อข้อมูลสำเร็จ";
}else{
	echo "เชื่อมต่อข้อมูลไม่สำเร็จ".mysqli_connect_error();
}