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
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<div class="container">

	<!-- Collect the nav links, forms, and other content for toggling -->
	<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		<ul class="nav navbar-nav"><li>
			<a href="modify_menu.php" style="font-family: Rockwell; font-size:20px">HOME</a>
			</li>
			<li>
			<a href="logout.php" style="font-family: Rockwell; font-size:20px">LOGOUT</a>
			</li>
			
		</ul>
	</div>
	<!-- /.navbar-collapse -->
</div>
</head>
<body>
<?php include('ord_header.php'); ?>
<div class="container">
	<h1 class="page-header text-center">ORDERS</h1>
	<table class="table table-striped table-bordered">
		<thead>
			<th>Date</th>
			<th>Regno</th>
			<th>Total Sales</th>
			<th>Details</th>
		</thead>
		<tbody>
			<?php 
				include('config.php');
				$sql="select * from purchase order by total desc";
				$query=$con->query($sql);
				while($row=$query->fetch_array()){
					?>
					<tr>
						<td><?php echo date('M d, Y h:i A', strtotime($row['date_of_purchase'])) ?></td>
						<td><?php echo $row['regno']; ?></td>
						<td class="text-right">&#8369; <?php echo number_format($row['total'], 2); ?></td>
						<td><a href="#details<?php echo $row['regno']; ?>" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span> View </a>
							<?php include('ind_orders.php'); ?>
						</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</div>
</body>
</html>