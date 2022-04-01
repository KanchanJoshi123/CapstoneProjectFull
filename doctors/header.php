<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Doctor's Login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:doctorlogin.php");
		}
		
		   

	 ?>


<div class="container-fluid">
	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<div class="navbar-header">
	 	    		<a href="index.php" class="navbar-brand" style="height: 80px;"><img src="../photo/logo.jpg" style="margin-top: -15px; width:120px;height:80px; margin-left: -15px;"></a> 
	 	    	</div>
		<nav class="menu" style="float: right;">
			<ul class="nav navbar-nav navbar-right">				
				<li style="color: #FFFF99"><a href="myAppoinment.php">My Appoinment</a></li>
				<li style="color: #FFFF99"><a href="myCustomer.php">Customer Details</a></li>
				<li style="color: #FFFF99"><a href="myDetails.php">My Details</a></li>
				<li style="color: #FFFF99"><a href="../patient/logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	<div class="header_top backimage" style="background-image: url('../img/docbg1.jpg'); height: 500px; width: 100%; margin-top: -20px;">
			
			<center><p style="padding-top: 200px; font-size:50px;color:#2c2f84;font-weight:bolder;">Doctor's Appointment System</p></center>
		</div>
	
