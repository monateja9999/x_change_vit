<!DOCTYPE html>
<html lang="en">
<head>
<!--  <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
 -->
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
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 align="center" style="font-family: coalition; color:black;"> MENU </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <!-- <th> Id </th> -->
 <th> Item Name </th>
 <th> Item Cost </th>
 <th> Remove Item </th>
 <!-- <th> Update </th> -->

 </tr >

 <?php

 include 'config.php'; 
 $q = "select * from menu ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <!-- <td> <?php echo $res['id'];  ?> </td> -->
 <td> <?php echo $res['item_name'];  ?> </td>
 <td> <?php echo $res['item_cost'];  ?> </td>
 <!-- <td> <?php echo $res['password'];  ?> </td> -->
 <td> <button class="btn-danger btn"> <a href="delete_menu.php?item_name=<?php echo $res['item_name']; ?>" class="text-white"> Delete </a>  </button> </td>
 

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>