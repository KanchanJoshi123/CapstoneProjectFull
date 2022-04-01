<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>



	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;;color: #fff;padding: 5px; margin-top: -20px;">Change Password</h1>
		<center><div style="padding:20px;margin-bottom:30px;font-size: 20px;">
				<form action="" method="post" class="text-center form-group">
					<table>
						<tr>
					<td><label>
						Old Password:</label></td>
						<td><input type="password" name="password"  placeholder="Current password" class="textbox" required></td>
					</tr>
					<tr>
					<td><label>
						New Password:</label></td>
						<td><input type="password" name="newpassword"  placeholder="New password" class="textbox" required></td>
					</tr>
					<tr>
					<td><label>
						Confirm Password:</label></td>
						<td><input type="password" name="confpassword"  placeholder="Confirm password" class="textbox" required></td>
					</tr>
					<tr>
					<td colspan="2"><button name="submit" type="submit" class="noselect yellow button2">Update Password</button></td>
					</tr>
					</table>				


					<!-- login validation -->
			<?php 
					
							
							include('../config.php');
							if(isset($_POST["submit"])){
							$old_pass = $_POST['password'];
							$newpassword = $_POST['newpassword'];
							$confpassword = $_POST['confpassword'];
							$sql= "SELECT password FROM patient WHERE email= '" . $_SESSION["email"]."' AND password= '" . $_POST["password"]."'";
							$query=mysqli_query($conn,$sql)or die($mysqli_error($con));
							$row=mysqli_num_rows($query);
							if($row>0){
								if($newpassword==$confpassword){
								
								$sql1="UPDATE patient SET password='" . $_POST["newpassword"]  ."' WHERE email='" .$_SESSION["email"] ."'";
								mysqli_query($conn,$sql1);
								mysqli_close($conn);
								echo "<script>alert('Password Has been Updated');</script>";
								
								}else{
									echo "<script>alert('Password did not match');</script>";

								}


							}
							
									
										
								
					}
					//  else{
							// 	echo "<script>alert('Input Correct Password');</script>";
							// }
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div></center>
		
		
			
		
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
