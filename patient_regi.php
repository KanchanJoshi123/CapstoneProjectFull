<?php include('header.php'); ?>
	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="margin-top: -20px;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;">Patient Registration</h1>
		<center>  
		<div class="formstyle" style="margin-bottom:30px;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <table>
				    <tr>
			 		<td><label for="name">Your Name:</label></td>
						<td>
						<input type="text" name="name" value="" placeholder="Full name" required>
					</td>
                    </tr>
                    <tr>
					<td><label for="age">Age:</label></td>
						<td><input type="number" name="age"  placeholder="Age" pattern="[0-9]{2,2}" title="Please enter only  numbers between 2 to 2 for age"/></td>
					</tr>
					<tr>
					<td><label for="contact">Mobile:</label></td>
					<td><input type="number" name="contact"  placeholder="Contact no" required="required" pattern="[0-9]{10,11}" title="Please enter only numbers between 10 to 11 for mobile no."/></td>
					</tr>
 					<tr>
 					<td><label for="address">Address:</label></td>
 					<td><input type="text" name="address" value="" placeholder="Address"></td>
					</tr>
					<tr>
					<td><label for="bgroup">Blood Group:</label></td>
					                  <td><select name="bgroup" required>
										<option value="">-select-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
									</select></td>
					</tr>
					<tr>
					<td><label for="email">Email: </label></td>
						<td><input type="email" name="email" placeholder="email" required></td>
					</tr>
					<tr>
					<td><label for="password">Password:</label></td>
					<td><input type="password" name="password" placeholder="password" required></td>
				    </tr>
					<br><br>
					
					<tr>
					<td colspan="2"><button name="submit" type="submit" class="noselect yellow button2">Register</button> </td></tr><br>
				</center>
				</table>
			<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	



	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	 <!-- validation and insertion -->


				<?php
						include('config.php');
						if(isset($_POST['submit'])){

						$sql1 = "SELECT * FROM patient WHERE email='".$_POST["email"]."' ";
             		   $result = $conn->query($sql1);	
             		    if ($result->num_rows > 0) {
			                  echo "<script>alert('Sorry, user already exist!');</script>";
			             }
						else{
							$sql = "INSERT INTO patient (name,age,contact,address,bgroup,email, password)
							VALUES ('" . $_POST["name"] ."','" . $_POST["age"] . "','" . $_POST["contact"] . "','" . $_POST["address"] . "','" . $_POST["bgroup"] . "', '" . $_POST["email"] . "','" . $_POST["password"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>location.replace('patient_success_msg.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					}
				?> 



	<!-- validation and insertion End-->



</body>
</html>