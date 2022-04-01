<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

<!-- for retriving data -->
				<?php 
							include('../config.php');
							$sql="SELECT * FROM patient where email='" . $_SESSION["email"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$name=$data[1];
							$age=$data[2];
							$contact=$data[3];
							$address=$data[4];
							$bgroup=$data[5];
							$email=$data[6];

							mysqli_close($conn);
				?>
<!-- for retriving data -->

<div>
		<h1 class="text-center" style="background-color:#272327;color: #fff; margin-top: -20px">My Details</h1>
				<form action="" method="post" class="text-center form-group">
					<table>
					<tr>
					<td style="background-color: #fff; color: #000; font-size: 20px;"><label>Your Name:</label></td>
						 <td style="background-color: #fff; color: #000; font-size: 20px;"><input type="text" name="name" value="<?php echo $name; ?>" placeholder="Full name" required></td>
                    </tr>
                    <tr>
					<td style="background-color: #fff; color: #000; font-size: 20px;"><label>
						Age:</label></td>
						<td style="background-color: #fff; color: #000; font-size: 20px;"><input type="number" name="age"  value="<?php echo $age; ?>" placeholder="Age" required="required" pattern="[0-9]{2,2}" title="please enter only  numbers between 2 to 2 for age"/></td>
				    </tr>
                    <tr>
					<td style="background-color: #fff; color: #000; font-size: 20px;"><label>
						Mobile: </label></td>
						<td style="background-color: #fff; color: #000; font-size: 20px;"><input type="text" name="contact" value="<?php echo $contact; ?>" placeholder="Contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/></td>
					</tr>
 					<tr>
 					<td style="background-color: #fff; color: #000; font-size: 20px;"><label>
						Address:</label></td>
						<td style="background-color: #fff; color: #000; font-size: 20px;"><input type="text" name="address" value="<?php echo $address; ?>" placeholder="Address" required></td>
				</tr>
				<tr>
					<td style="background-color: #fff; color: #000; font-size: 20px;"><label>
						Blood Group: </label></td>
						<td style="background-color: #fff; color: #000; font-size: 20px;"><input type="text" name="bgroup" value="<?php echo $bgroup; ?>" placeholder="bloodgroup" disabled></td>
                    </tr>
                    <tr>
					<td style="background-color: #fff; color: #000; font-size: 20px;"><label>
						Email: </label></td>
						<td style="background-color: #fff; color: #000; font-size: 20px;"><input type="email" name="email" value="<?php echo $email; ?>" placeholder="email" required></td>
					</tr>
					
					<tr>
					<td colspan="2"><button class="noselect yellow button2" name="submit" type="submit">UpdateProfile</button></td> 
</tr>
</table>

			</form> 
	
</div>
<br><br><br>

			<!-- update information -->

				<?php
							include('config.php');
							if(isset($_POST['submit'])){
							

							$sql="UPDATE patient SET name='" .$_POST["name"]. "' ,age='" .$_POST["age"]."' , contact='" .$_POST["contact"]. "',address='" .$_POST["address"]. "', email='".$_POST["email"]."' WHERE email='" .$_SESSION["email"]. "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->


 <?php include('footer.php'); ?>


</body>
</html>
