<?php session_start();  ?>

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
<div class="container-fluid">
	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		 <div class="navbar-header">
	 	    		<a href="index.php" class="navbar-brand" style="height: 80px;"><img src="../photo/logo.jpg" style="margin-top: -15px; width:120px;height:80px; margin-left: -15px;"></a> 
	 	    	</div>
		<nav class="menu" style="float: right;">
			<ul>
				<li><a href="../index.php">Home</a></li>
				<li><a href="../doctorinfo.php">Medical Doctors</a></li>
				<li><a href="../about.php">About Us</a></li>
				<li><a href="../contactus.php">Contact Us</a></li>
				<li><a href="../signin.php">Login</a></li>
			</ul>
		</nav>
	</div>
	
<div class="backimage" style="background-image: url('../img/bg7.JPEG'); height: 600px; margin-top: -20px;">
		<div>
		<h1 id="imagetext" style="padding-top: 200px; padding-left: 20px;"><a href="signin.php">BOOK YOUR  DOCTOR'S<br><br>
		 APPOINMENT HERE!</a></h1>
		</div>
</div>




	<!-- this is for donor registraton -->
	<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff; margin-top: -20px;">Doctor Panel</h1>
		<center><div class="formstyle">
				<form action="" method="post" class="text-center">
					<label>
						<input type="text" name="userid"  placeholder="User Id" required>
					</label><br><br>
					<label>
						<input type="password" name="password"  placeholder="Password">
					</label><br><br>
					<button name="submit" type="submit" class="yellow noselect button2">Login</button> <br>

					


					<!-- login validation -->
			<?php 
							$_SESSION['adminstatus']="";
							
							include('../config.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM doctor WHERE userid= '" . $_POST["userid"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["userid"]= $_POST["userid"];
											// $_SESSION["type"]=$result[2];
											$_SESSION['adminstatus']= "yes";
										    echo "<script>location.replace('myDetails.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div></center>
	
	
</div>
	
<?php include('../footer.php'); ?>

	
</div><!--  containerFluid Ends -->	
</body>
</html>

