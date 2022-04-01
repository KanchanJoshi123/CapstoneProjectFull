<?php session_start();  ?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>
		<h1 class="text-center" style="background-color:#272327;color: #fff; margin-top: -20px;">My Feedback</h1>
			<center><form action="" method="post">
                <table style="font-size: 20px;">
                	<tr>
                <td>
                	<label for="feedback">Feedback:</label>
                </td>
						<td>
							<textarea name="feedback" id="feedback" cols="50" rows="4" style="width:400px;" required>
						</textarea>
					</td>			
					</tr>
						<tr>
					<td colspan="2">
						<button name="submit" type="submit" class="noselect yellow button2">Submit</button>
					</td>
               </tr>
           </table> 
					<!-- login validation -->
			<?php 
					
							include('../config.php');
							if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO feedback (email,feedback)	VALUES ('" . $_SESSION["email"] ."','" . $_POST["feedback"] ."')";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Thanks for your feedback!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					
 			?>
		<!-- login validation End-->


				</form></center>
	
<?php include('footer.php'); ?>
</div>
</body>
</html>
