<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
		<ul class="nav navbar-nav">
			<li>
			<a href="home.php" style="font-family: Rockwell; font-size:20px">Home</a>
			</li>
			<li>
			<a href="mess.php" style="font-family: Rockwell; font-size:20px">Menu</a>
			</li>
			<li>
			<a href="#" style="font-family: Rockwell; font-size:20px">Orders</a>
			</li>
			<li>
			<a href="#" style="font-family: Rockwell; font-size:20px">Mess details</a>
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
	<h2 class="text-center text-success" style="color:white;font-family: Rockwell;font-size: 25px"> <?php echo $_SESSION['regno'] ; ?></h2>
</div>
