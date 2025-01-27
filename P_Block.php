<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>VIT HOSTEL ROOM EXCHANGE PROCESS</title>
<link rel="icon" href="5.png">
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/theme.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style>
	th
	{
		height: 30px;
		width: 500px;
		text-align: center;
	}
	td
	{
		height: 30px;
		width: 500px;
		text-align: center;
	}
	option
	{
		height: 30px;
		width: 500px;
		text-align: center;
	}
</style>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container">

	<!-- Collect the nav links, forms, and other content for toggling -->
	<?php include ('menu.php') ?>
	<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- Intro Header -->
<header class="intro">
<div class="intro-body">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="brand-heading"style="font-family:coalition">WELCOME TO </h1>
				<p class="intro-text" style="font-family:Rockwell">
				*P BLOCK* 
				</p>
				<a href="#contact" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</header>
<!-- Search Section -->
<section id="contact">
<div class="container content-section">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<div class="done">
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					Thank you!

				</div>
			</div>
			<h3><u> DETAILS!!!!</u></h3>
		<table border="5" align="center" width="auto">
				<tr style="background-color: black;color: white;font-family: Calibri;font-size: 15px">
					<th>
						NAME
					</th>
					<th>
						DESIGNATION
					</th>
					<th>
						MOBILE
					</th>
					<th>
						PHONE
					</th>
					<th>
						EMAIL
					</th>
					<th>
						SUPERVISOR
					</th>
					<th>
						MOBILE_S
					</th>
					<th>
						PHONE_S
					</th>
					<th>
						EMAIL_S
					</th>
					<th>
						BLOCK
					</th>


				</tr>
				<?php
				
				$res = mysqli_query($con,"select * from hostels where block='P BLOCK '");
				while($res1 = mysqli_fetch_array($res))
				{
					?>
					<tr>
						<td>
							<?php echo $res1['Name']; ?>
						</td>
						<td>
							<?php echo $res1['Designation']; ?>
						</td>
						<td>
							<?php echo $res1['Mobile']; ?>
						</td>
						<td>
							<?php echo $res1['Phone']; ?>
						</td>
						<td>
							<?php echo $res1['Email']; ?>
						</td>
						<td>
							<?php echo $res1['Supervisor']; ?>
						</td>
						<td>
							<?php echo $res1['Mobile_S']; ?>
						</td>
						<td>
							<?php echo $res1['Phone_S']; ?>
						</td>
						<td>
							<?php echo $res1['Email_S']; ?>
						</td>
						<td>
							<?php echo $res1['Block']; ?>
						</td>
						
					</tr>

					<?php
				}

				?>
			</table>
</section>

<!-- Footer -->
<footer>
<div class="container text-center">
	<p class="credits">
		Copyright &copy;<br/>
		"VIT UNIVERSITY, VELLORE"
	</p>
</div>
</footer>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Contact JavaScript -->
<script src="js/validate.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>