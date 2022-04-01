<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

	
<!-- result -->
<?php 
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					include('../config.php');
					

							$sql="SELECT * FROM doctor WHERE doc_id = $doc_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $doc_id   = $row["doc_id"];
							        $name 	= $row["name"];
							        $expertise 	= $row["expertise"];
							        $contact 	= $row["contact"];
							        $fee = $row["fee"];
									 $userid = $row["userid"];
							    }
							}
							
							$conn->close();

					?>
					<!-- fetching doctor info -->

	<!-- 	booking info-->
		<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff; margin-top: -20px;">Book Appoinment</h1>
			<div style="padding:20px;margin-right:80px; margin-bottom:30px; font-size: 18px; font-weight: bold;">
				<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
					<table>
                    <tr>
                    	<td>
					<label for="dname">
						Dr. Name: </label></td>
						<td><input type="text" name="dname" class="textbox" value="<?php echo $name; ?>"></td>
					</tr>
					<tr>
 					<td><label for="dcontact">
						Contact: </label></td>
						<td><input type="text" name="dcontact"  class="textbox" value="<?php echo $contact; ?>" /></td>
						</tr>				
 					<tr>
					<td><label for="expertise">
						Category: </label></td>
						<td><input type="text" name="expertise" class="textbox" value="<?php echo $expertise; ?>" ></td>
					</tr>
					<tr>
					<td><label>
						Fee(Tk): </label></td>
						<td><input type="text" name="fee" class="textbox" value="<?php echo $fee; ?>" ></td>
					</tr>
					<tr>
					<td><label>
						Your Name: </label></td>
						<td><input type="text" name="pname" class="textbox" value=""></td>
                    </tr>
                    <tr>
 					<td><label>
						 Contact:</label></td>
						<td><input type="text" name="pcontact" class="textbox" value=""/></td>
						</tr>
						<tr>			
					<td><label>
						 E-mail: </label></td>
 					<td><input type="email" name="email" class="textbox" value=""/></td>
					</tr>
					<tr>
					<td><label>
						 Address: </label></td>
						 <td><input type="text" name="address" class="textbox" value=""></td>
				    </tr>
				    <tr>
					<td><label>
						 Date: </label></td>
						 <td><input type="date" name="dates" class="textbox" value=""></td>
		            </tr>
		            <tr>
					<td><label>
						 Time:</label></td>
						               <td> <select name="timing" class="textbox" style="margin-left: 100px;" required>
										<option value="">-select-</option>
										<option value="10:00am">10:00am</option>
										<option value="11:00am">11:00am</option>
										<option value="12:00pm">12:00pm</option>
										<option value="1:00pm">1:00pm</option>
										<option value="2:00pm">2:00pm</option>
										<option value="03:00pm">3:00pm</option>
										<option value="4:00pm">4:00pm</option>
									</select></td>
								</tr>
				   <!-- <tr>					
					<td> <label>
						 Payment: </label></td>
						            <td><select name="payment" class="textbox" type="hidden" required> -->
										<!-- <option value="">-select-</option> -->
										<!-- <option value="Rocket">GPAY</option> -->
										<!-- <option value="bKask">CASH</option>
									</select> </td>
				    </tr>-->

					<label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label>
					<tr>
					<td>
					<button name="submit" type="submit" class="noselect yellow button2">Confirm</button></td>
					<td><a href="search_doctor.php"><button name="" type="" class="noselect yellow button2">Cancel</button></a></td> <br>
</tr>
</table>

				</form> <br><br>

			</div>
	
	
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

						include('../config.php');
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (dname,userid,dcontact,expertise,fee, pname,pcontact,email,address,dates,timing)
							VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "', '" . $_POST["fee"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["timing"] . "')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 

				<!-- confirming booking -->

	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
