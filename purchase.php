<?php
	header('location:mess.php');
	include('config.php');
	if(isset($_POST['item_name'])){
 
		// $customer=$_POST['customer'];
		session_start();
		// $reg= $_SESSION['regno'] ;
		// $sql="insert into purchase (regno,date_of_purchase) values ('".$_SESSION['regno']."',NOW())";
		$con->query($sql);
		$reg=$con->insert_id;
 
		$total=0;

		// $_SESSION['regno']= $regno;
 
		foreach($_POST['item_name'] as $item_name):
		$proinfo=explode("||",$item_name);
		$item_name=$proinfo[0];
		$iterate=$proinfo[1];
		$sql="select * from menu where item_name='$item_name'";
		$query=$con->query($sql);
		$row=$query->fetch_array();
 
		if (isset($_POST['quantity_'.$iterate])){
			$subt=$row['item_cost']*$_POST['quantity_'.$iterate];
			$total+=$subt;

			$sql="insert into purchase_detail (regno, item_name, quantity) values ('".$_SESSION['regno']."', '$item_name', '".$_POST['quantity_'.$iterate]."')";
			$con->query($sql);
		}
		endforeach;
 		
 		// $sql="update purchase set total='$total' where regno= '".$_SESSION['regno']."' ";
 		$sql="insert into purchase (regno, total, date_of_purchase) values ('".$_SESSION['regno']."', '$total', NOW())";
 		$con->query($sql);
		// header('location:sales.php');		
	}
	else{
		?>
		<script>
			window.alert('Please select a product');
			window.location.href='student_menu.php';
		</script>
		<?php
	}
?>