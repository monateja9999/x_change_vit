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
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/theme.css" rel="stylesheet">
<!-- Custom Fonts -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
<div class="container">

	<!-- Collect the nav links, forms, and other content for toggling -->
	<?php include ('menu_bl.php') ?>
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
				<h1 class="brand-heading"style="font-family:coalition">LOG-IN</h1>
				<p class="intro-text" style="font-family:Rockwell">
					(ADMIN)
				</p>
				<a href="#mart" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated"></i>
				</a>
				<br>
				<div style="margin-left:260px;width:220px">
				<form action="admin_validation.php" method="post">
					<div class="form-group">
						<br>
						<label style="font-family:Rockwell;font-size: 20px">Username</label>
						<input type="text" name="user" placeholder="Username *" class="form-control" style="width=20px">
					</div>
					<div class="form-group">
						<label style="font-family:Rockwell;font-size: 20px">Password</label>
						<input type="Password" name="password" placeholder="Password *"class="form-control" style="width=20px">
					</div>
				
					<button type="submit" id="submit" value="submit" class=btn btn-primary style="border-radius:6.5px;background-color: grey;color:white">Login</button><br><br>
					
					<!-- <a href="register.php" style="font-family:Rockwell">Not yet Registered?</a> -->
				</form>
				</div>
			</div>
		</div>
				
	</div>
</div>
</header>

<!-- Project Details Section -->
	
<!-- Footer -->
<footer>
<div class="container text-center">
	<p class="credits">
		Copyright &copy;<br/>
		"VIT UNIVERSITY, VELLORE"<br/>
		(18BCE0541, 18BCE0624)<br/>
		GUIDED BY: PROF. RAJKUMAR R
	</p>
</div>
</footer>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>