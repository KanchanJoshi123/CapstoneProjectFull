<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>


<!-- for retriving data -->
				<?php 
							include('../config.php');
							$sql="SELECT * FROM doctor where userid='" . $_SESSION["userid"] . "'";
			
							$q=mysqli_query($conn,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$name=$data[2];
							$address=$data[3];
							$contact=$data[4];
							$email=$data[5];
							$userid=$data[9];
							$expertise=$data[6];
							$fee=$data[8];
							$pic = $data[11];

							mysqli_close($conn);
				?>
<!-- for retriving data -->

<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color:#FFFF99 ; margin-top: -15px;">My Details</h1>
			<center><div class="formstyle" style="padding:20px;border: 1px solid lightgrey;background-color:#fff;color:#141313; margin-top: -10px; font-size: 20px;">
				<table>
				<form action="" method="post" class="text-center form-group">
					<tr>
					<td><img src="../img/<?php echo @$pic; ?>" style="width:150px;height:115px;margin-bottom:10px;"/></td>
                    <td>
					<label>
						 <input type="file" name="pic" value="<?php {echo @$pic;} ?>">
					</label></td>
				    </tr>
				    <tr>
					<td><label>
						Your Name:</label></td>
						<td><input type="text" name="name" value="<?php echo $name; ?>" required>
					</td>
                    </tr>
                    <tr>
 					<td><label>
						Address: </label></td>
						<td><input type="text" name="address" value="<?php echo $address; ?>"  required></td>
					
                    </tr>
					<tr>
					<td><label>
						Contact: </label></td>
						<td><input type="text" name="contact" value="<?php echo $contact; ?>"  required="required" /></td>
					</tr>
					<tr>
 					<td><label>
						Email: </label></td>
						<td><input type="email" name="email" value="<?php echo $email; ?>" " required></td>
					</tr>
					<tr>
					<td><label>
						Userid:</label></td>
						<td><input type="text" name="userid" value="<?php echo $userid; ?>"  disabled></td>
				    </tr>
				    <tr>
					<td><label>
						Expert in:</label></td>
						<td><input type="email" name="email" value="<?php echo $expertise; ?>"  disabled></td>
                    </tr>
                    <tr>
					<td><label>
						Fee:</label></td>
						<td><input type="text" name="fee" value="<?php echo $fee; ?>"  disabled></td>			
					</tr>
					<tr>
					<td colspan="2"><button name="submit" type="submit" class="noselect yellow button2">UpdateProfile</button></td>
                     </tr>

			</form></table> <br><br>

	</div>
	</center>
	
</div>


			<!-- update information -->

				<?php

						include('../config.php');
						if(isset($_POST['submit'])){
							

							$sql="UPDATE doctor SET name='" .$_POST["name"]. "' ,address='" .$_POST["address"]."' , contact='" .$_POST["contact"]. "',email='" .$_POST["email"]. "' ,pic='" .$_POST["pic"]. "' WHERE userid='" . $_SESSION["userid"] . "'";
		
							if (mysqli_query($conn, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($conn);
													}
					?> 
			<!-- update information End -->

</div><!--  containerFluid Ends -->
  <?php include('../footer.php'); ?>
</body>
</html>
