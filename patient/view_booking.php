<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;padding: 5px; margin-top: -20px;">My Appoinment</h1>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');
					$sql = " SELECT * FROM booking WHERE email = '".$_SESSION["email"]."'  ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);
                 
					if($count>=1){
						echo "<table border=2px; style='font-size:20px;'>
							<tr>
								<th style='padding:10px'>Speciality</th>
								<th style='padding:10px'>Doctor</th>
								<th style='padding:10px'>Appoinment Date</th>
								<th style='padding:10px'>Time</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['timing']."</td>";
						        // echo "<td><button type='submit' name='submit' style='color:#000;'>Cancel Booking </button></td>";
							//echo"<td><input type='submit' name='submit' value='Delete'></td>";
						
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}
?>
					<?php
							include('config.php');
							if(isset($_GET['submit'])){
							
							// sql to delete a record
							$sql = "DELETE * FROM 'booking' limit=1 WHERE email = '".$_SESSION["email"]."'";

							if (mysqli_query($conn, $sql)) {
							    echo "<script>alert('Your booking has been Canceled!');</script>";
							} else {
							     echo "<script>alert('There was an Error')<script>";
							}

							mysqli_close($conn);
						}
					 ?>



	<!-- Cancel Booking End-->
			</div>
		
	
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
