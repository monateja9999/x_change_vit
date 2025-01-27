<?php
session_start();
$flag=0;
header('location:login.php');
$con = mysqli_connect('localhost','root');
if($con){
	//echo "connection successful";
}else{
	echo "no connection";
}
mysqli_select_db($con, 'mona');

$name=$_POST['user'];
$password=$_POST['password'];

$q = "select * from signin where name = '$name' && password = '$password' ";
$res = mysqli_query($con, $q);

$num = mysqli_num_rows($res);

if($num ==1){
		
		$_SESSION['username']= $name;
		header('location:home.php');

}else{
	$flag=1;
	//$message="Username and/or Password is/are incorrect";
	//echo "<script type='text/javascript'>alert('$message');</script>";
}

?>