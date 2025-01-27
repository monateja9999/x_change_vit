<?php include ('config.php') ?>
<?php
$item_name = $_GET['item_name'];

$q = " delete from menu where item_name = '$item_name' ";

if(mysqli_query($con,$q)){
	header('location:modify_menu.php');	
}
else{
	echo "Error Deleting the item";
}

?>