<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		<ul class="nav navbar-nav">
			<li>
			<a href="home.php" style="font-family: Rockwell; font-size:20px">VIT | HOSTELS</a>
			</li>
			<li>
			<a href="postdetails.php" style="font-family: Rockwell; font-size:20px">Rooms</a>
			</li>
			<li>
			<a href="mess.php" style="font-family: Rockwell; font-size:20px">Mess</a>
			</li>
			<li>
			<a href="logout.php" style="font-family: Rockwell; font-size:20px">Log Out</a>
			</li>
			
		</ul>
	</div>
<?php
session_start();
if(!isset($_SESSION['regno'])){
header('location:login.php');
}
?>
<div class="container">
	<h2 class="text-center text-success" style="color:white;font-family: Rockwell;font-size: 25px"><?php echo $_SESSION['regno'] ; ?></h2>
</div>
