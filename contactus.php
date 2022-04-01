<?php include('header.php'); ?>




	<!-- this is for donor registraton -->
	<div class="contactus"  style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff; margin-top: 0px">Contact Us</h1>

		
		
		<div class="main_content">
			<div class="col-md-6" style="border-right: 2px solid black;">
				<img src="photo/logo.jpg" style="height: 200px; width: 250px; float:left; margin-right: 10px;">
				<article>
					<h2>Healthy World Hospital</h2><h4>24 Sadashiv Peth, Tilak Road, Pune-470001</h4>
						<h4> 
							email: abc@xyz.com</h4>
							<h4>contact: 020 00000</h4><br>
							<h4>contact: 020 121212</h4><br>
				</article>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Your Message</h2>
				<form action="" method="post" class="text-center">
					<table>
						<tr>
						<td><label>First Name: </label></td>
								<td><input type="text" name="firstname" value="" placeholder="Firstname" required></td>
							</tr>
							<tr>
						<td><label>Last Name: </label></td>
								<td><input type="text" name="lastname" value="" placeholder="Lastname" required></td>
							</tr>
							<tr>
						<td><label>Email: </label></td>
						<td><input type="email" name="email"  value="" placeholder="Your email" required></td></tr>
						<tr>
						<td><label>Your Comment:</label></td>
						<td><textarea name="comment" id="" cols="30" rows="4" required></textarea></td>		
						</tr>					
			<td colspan="2"><input type="submit" value="Send Us" name="submit" class="noselect yellow button2 text-center"/></td>
						<!-- <button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
 --></tr>
</table>
					</form><br><br><br>
			</div>

          
 		</div>

	</div>
	
	
</div>
	
 <?php include('footer.php'); ?>


	
	<!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
<!-- contact information inserting -->
					<?php

						include('config.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO contact (firstname, lastname,email,comment)
							VALUES ('" . $_POST["firstname"] ."','" . $_POST["lastname"] . "','" . $_POST["email"] . "','" . $_POST["comment"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('success.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					?> 



	
</body>
</html>

