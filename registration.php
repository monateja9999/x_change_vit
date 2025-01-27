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

$name=$_POST['username'];
$reg=$_POST['regno'];
$password=$_POST['password'];
$mail=$_POST['e-mail'];
$q = "select * from signin where e_mail='$mail' && regno='$reg' && name = '$name' && password = '$password' ";
$res = mysqli_query($con, $q);

$num = mysqli_num_rows($res);

if($num ==1){
	//$message="Username Alreafy Registered";
	//echo "<script type='text/javascript'>alert('$message');</script>";
	echo" duplicate data";
}else{
	$qy = "insert into signin(name , regno, password , e_mail) values('$name' , '$reg', '$password' , '$mail') ";
	mysqli_query($con, $qy);
}

?>