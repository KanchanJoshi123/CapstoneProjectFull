<!DOCTYPE html>
<html>
<head>

	<title>Medical Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css?1422585377" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>
	<div class="container-fluid">
	<div class="navbar navbar-default nav">
	 	    <div class="navbar-header">
	 	    		<a href="index.php" class="navbar-brand" style="height: 80px;"><img src="photo/logo.jpg" style="margin-top: -15px; width:120px;height:80px; margin-left: -15px;"></a> 
	 	    	</div>
		<nav class="menu" style="float: right;">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">Home</a></li>
				<li><a href="doctorinfo.php">Medical Doctors</a></li>
				<li><a href="about.php">About Us</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="signin.php">Login</a></li>
				
			</ul>
		</nav>
	</div>
<!-- 	<div class="backimage" style="background-image: url('img/bg7.JPEG'); height: 600px; margin-top: -20px;">
		<div>
		<h1 id="imagetext" style="padding-top: 200px; padding-left: 20px;"><a href="signin.php">BOOK YOUR  DOCTOR'S<br><br>
		 APPOINMENT HERE!</a></h1>
		</div>
	</div> -->
	<center>
  	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-20px;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">

      	 <img src="img/bg7.jpeg" class="certificate" style="width:100%; height: 600px;">
      	 <div class="carousel-caption d-none d-md-block" style="top: 0; bottom: auto;">
    <p id="imagetext" style="font-size: 50px; color: black;" class="text-left"><a href="signin.php">Book your Doctor's Appointment here!</a></p> </div>
   </div>

      <div class="item">
        <img src="img/heartbg2.jfif" class="certificate" style="width:100%; height: 600px;">
        <div class="carousel-caption d-none d-md-block" style="top: 0; bottom: auto;">
    <p id="imagetext" style="font-size: 50px; color: black;" class="text-left"><a href="#">Try out our Heart Disease Predictor</a></p> </div>
   </div>
      
    
      <div class="item">
        <img src="img/breastbg2.png" class="certificate" style="width:100%; height: 600px;">
        <div class="carousel-caption d-none d-md-block">
    <p id="imagetext" style="font-size: 50px; color: black; background-color: white;"><a href="#">Try out our Breast Cancer Predictor</a></p> </div>
      </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</center>

	
	
