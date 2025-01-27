<?php
session_start();
header('location:modify_menu.php');
$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}
mysqli_select_db($con, 'iwp');

$name=$_POST['item_name'];
$cost=$_POST['item_cost'];
// $mail=$_POST['e-mail'];
$q = "select * from menu where item_name = '$name' && item_cost = '$cost' ";
$res = mysqli_query($con, $q);

$num = mysqli_num_rows($res);

if($num ==1){
	//$message="Username Alreafy Registered";
	//echo "<script type='text/javascript'>alert('$message');</script>";
	echo" duplicate data";
}else{
	$qy = "insert into menu(item_name , item_cost) values('$name' , '$cost') ";
	mysqli_query($con, $qy);
}

?>