<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}
mysqli_select_db($con, 'iwp');

$name=$_POST['food item'];
$password=$_POST['cost'];

$q = "select * from add_food_items where food item='$food item' && cost = '$cost'";
$res = mysqli_query($con, $q);

$num = mysqli_num_rows($res);

if($num ==1){
	//$message="Username Alreafy Registered";
	//echo "<script type='text/javascript'>alert('$message');</script>";
	echo" duplicate data";
}else{
	$qy = "insert into signin(name , password , e_mail) values('$name' , '$password' , '$mail') ";
	mysqli_query($con, $qy);
}

?>