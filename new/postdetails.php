<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
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
				<h1 class="brand-heading"style="font-family:coalition">POST ROOM DETAILS</h1>
				<p class="intro-text" style="font-family:Rockwell">
					(Thank you in advance for the information)
				</p>
				<a href="#mart" class="btn btn-circle page-scroll">
				<i class="fa fa-angle-double-down animated"></i>
				</a>
			</div>
		</div>
	</div>
</div>
</header>

<!-- Project Details Section -->
<section id="mart">
<div class="container content-section text-center">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2">
			<form method="post" action="addupload.php" id="contactform" enctype="multipart/form-data">
				<div class="form">
					<table width="auto" align="center">
						<tr>
							<td>
								<h4 style="font-family: Georgia;font-size:30px"><b><u>Fill the following details</u></b></h4>
							</td>
						</tr>
						<tr>
							<td>
								<input type="text" placeholder="Describe your room" name="Description"required="required">
							</td>
						</tr>
						<tr> <td>   &nbsp         </td></tr>
						<tr>
							<td>
								<div style="width:200px;margin-left: 185px">
								<select name="Type"class="btn btnghost btn-lg"required="required"style="font-family: Georgia;font-size:20px width=200px">
									<option default="Select Your Choice"style="font-size: 20px">Select Type </option>
									<option value="AC"style="font-size: 20px">AC</option>
									<option value="NAC"style="font-size: 20px">NON AC</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<div style="width:200px;margin-left: 170px">
								<select name="Count_Bed"class="btn btnghost btn-lg"required="required"style="font-family: Georgia;font-size:20px width=200px">
									<option default="Select Your Choice"style="font-size: 20px">Select No of Beds </option>
									<option value="1"style="font-size: 20px">1</option>
									<option value="2"style="font-size: 20px">2</option>
									<option value="3"style="font-size: 20px">3</option>
									<option value="4"style="font-size: 18px">4</option>
									<option value="6"style="font-size: 18px">6</option>

								</select>
							</td>
						</tr>
						<tr>
							<td>
								<div style="width:200px;margin-left: 175px">
								<select class="btn btnghost btn-lg" name="Block"required="required"style="font-family: Georgia;font-size:20px width=200px">
									<option default="Select Your Choice" style="font-size: 20px">Select the Block </option>
									<option value="A" style="font-size: 20px">A BLOCK </option>
									<option value="B" style="font-size: 20px">B BLOCK </option>
									<option value="BA" style="font-size: 20px">B ANNEX </option>
									<option value="C" style="font-size: 20px">C BLOCK </option>
									<option value="D" style="font-size: 20px">D BLOCK </option>
									<option value="DA" style="font-size: 20px">D ANNEX </option>
									<option value="E" style="font-size: 20px">E BLOCK </option>
									<option value="F" style="font-size: 20px">F BLOCK </option>
									<option value="G" style="font-size: 20px">G BLOCK </option>
									<option value="H" style="font-size: 20px">H BLOCK </option>
									<option value="J" style="font-size: 20px">J BLOCK </option>
									<option value="K" style="font-size: 20px">K BLOCK </option>
									<option value="L" style="font-size: 20px">L BLOCK </option>
									<option value="LA" style="font-size: 20px">L ANNEX</option>
									<option value="M" style="font-size: 20px">M BLOCK </option>
									<option value="N" style="font-size: 20px">N BLOCK </option>
									<option value="P" style="font-size: 20px">P BLOCK </option>
									<option value="Q" style="font-size: 20px">Q BLOCK </option>
								</select>
							</div>
							</td>
						</tr>
						
						<tr> <td>   &nbsp         </td></tr>
						<tr>
							<td></td>
						</tr>
						<tr>
							<td>
								<input type="file" name="img" required="required">
							</td>
						</tr>
						<tr>
							<td></td>
						</tr>
						<tr> 
							<td>
							<input type="submit" id="submit" value="submit" onclick="postdetails.php">
							
							</td>
						</tr>
					</table>
				</div>
			</form>
		
			
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
<!-- Custom Theme JavaScript -->
<script src="js/theme.js"></script>
</body>
</html>