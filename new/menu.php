<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		<ul class="nav navbar-nav">
			<li>
			<a href="home.php" style="font-family: Rockwell; font-size:20px">VIT | HOSTELS</a>
			</li>
			<li>
			<a href="postdetails.php" style="font-family: Rockwell; font-size:20px">Post Details</a>
			</li>
			<li>
			<a href="roomavailability.php" style="font-family: Rockwell; font-size:20px">Room Availability</a>
			</li>
			<li>
			<a href="blockdetails.php" style="font-family: Rockwell; font-size:20px">Block Details</a>
			</li>
			<li>
			<a href="logout.php" style="font-family: Rockwell; font-size:20px">Log Out</a>
			</li><!--
			<li>
			<a href="like.php"></a>
			</li>
		-->
			<!-- <li>
			<a href="uploadartwork.php">Mess</a>
			</li> -->
			
		</ul>
	</div>
<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}
?>
<div class="container">
	<h2 class="text-center text-success" style="color:white;font-family: Rockwell;font-size: 25px"> Welcome <?php echo $_SESSION['username'] ; ?></h2>
</div>
