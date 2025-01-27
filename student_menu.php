<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>HOSTEL MANAGEMENT SYSTEM</title>
<link rel="icon" href="5.png">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!-- <script>
    function calculateAmount(qty,cst) {
        var tot_price = qty * cst;
        var divobj = document.getElementById('sub-total');
        divobj.value = tot_price;
    }
</script> -->
</head>
<body>

 <!-- <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 align="center" style="font-family: coalition; color:black;"> MENU </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th style="text-align:center"> S.No </th>
 <th style="text-align:center"> Item Name </th>
 <th style="text-align:center"> Price </th>
 <th style="text-align:center"> Quantity </th>
 <th style="text-align:center"> Sub-Total </th>

 </tr >
 -->
 <!-- <?php

 include 'config.php'; 
 $q = "select * from menu ";

 $query = mysqli_query($con,$q);

$num=0;
 while($res = mysqli_fetch_array($query)){
 $num++;
 ?> -->

 <!-- <tr class="text-center">
 <td align="center" name="regno"><?php echo $num; ?></td>
 <td align="center" name="item_name"><?php echo $res['item_name'];  ?> </td>

 <td align="center" name="item_cost" value="<?php echo $res['item_cost'];  ?>">Rs <?php echo $res['item_cost'];  ?> </td>
 -->
 <!-- <td> <?php echo $res['password'];  ?> </td> -->
 <!-- <td name="quant">
 <select onchange="calculateAmount(this.value,<?php echo $res['item_cost'];  ?>)" name="order"style="font-family: Georgia;font-size:15px">
	<option value="0" default="None">None</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
</select>
</td>
<td name="tot" id="sub-total">0</td>
 
 </tr> -->


 <!-- <?php 
 }
  ?>
 <tr><td></td><td></td><td></td><td align="center"><b>Total:</b></td><td align="center">Rs </td></tr>
 </table>  
 
 </div>
 </div>

 <div style="text-align:center;">
<centre> --><!-- <button type="submit" id="submit" value="submit" class=btn btn-primary style="border-radius:6.5px;background-color: grey;color:white;text-align:center">Place Order</button><br><br> --><!-- </centre> -->
<!-- </div> -->
<!-- </table> --> 
 <!-- <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 </script> -->

 <div class="container">
	<h1 class="page-header text-center">ORDER</h1>
	<form method="POST" action="purchase.php">
		<table class="table table-striped table-bordered">
			<thead>
				<th class="text-center"><input type="checkbox" id="checkAll"></th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Quantity</th>
			</thead>
			<tbody>
				<?php 
					$sql="select * from menu";
					$query=$con->query($sql);
					$iterate=0;
					while($row=$query->fetch_array()){
						?>
						<tr>
							<td class="text-center"><input type="checkbox" value="<?php echo $row['item_name']; ?>||<?php echo $iterate; ?>" name="item_name[]" style=""></td>
							<td><?php echo $row['item_name']; ?></td>
							<td class="text-right">&#x20A8; <?php echo number_format($row['item_cost'], 2); ?></td>
							<td><input type="text" class="form-control" name="quantity_<?php echo $iterate; ?>"></td>
						</tr>
						<?php
						$iterate++;
					}
				?>
			</tbody>
		</table>
		
		<center>
		<div class="row">
			<div class="col-md-2" style="margin-left:-20px;">
				<button type="submit" class="btn btn-primary"></span> Place Order</button>
			</div>
		</div></center>
	</form>
</div><br><br>
<script type="text/javascript">
	$(document).ready(function(){
		$("#checkAll").click(function(){
	    	$('input:checkbox').not(this).prop('checked', this.checked);
		});
	});
</script>
</body>
</html>