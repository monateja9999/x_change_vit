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
		width: 100px;
		text-align: center;
	}
	td
	{
		height: 30px;
		width: 100px;
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
<header class="intro">
<div class="intro-body">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h1 class="brand-heading" style="font-family: Coalition">*Welcome*</h1>
				<p class="intro-text" style="font-family:Rockwell">
				(We hope you will find a room of your choice)
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
<div class="container content-section text-center">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2" float="center" >
			<div name="text" style="background-color:#EDE1E1;color:black;font-family: Rockwell;font-size: 15px">
				<?php
				$res = mysqli_query($con,"SELECT * FROM Main");
				while($res1 = mysqli_fetch_array($res))
				{
					?>
						<img src="<?php echo $res1['M_Links'];  ?>"><br>
						<h1 style="font-size: 20px;font-family: Rockwell;">
							ROOM TYPE:&nbsp<span><u><?php echo $res1['M_Type']; ?></u>&nbsp&nbsp&nbsp
							</span>
							NO OF BEDS:&nbsp<span><u><?php echo $res1['M_Count_Bed']; ?></u>&nbsp&nbsp&nbsp</span>
							BLOCK:&nbsp<span><u><?php echo $res1['M_Block']; ?></u></span><br><br>
							DESCRIPTION:&nbsp<span style="font-family:Times New Roman"><u><?php echo $res1['Description']; ?></u></span>
						</h1>
						<br>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
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