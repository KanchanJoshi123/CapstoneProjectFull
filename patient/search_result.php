<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

	<div class="search form-group"  style="background-color: #7faf81;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;padding: 5px; margin-top: -20px;">Search result</h1>
		
	</div>
<!-- result -->

					<?php 
					include('../config.php');
					

					$sql = " SELECT * FROM doctor WHERE address = '" . $_POST["address"]."' AND expertise = '" . $_POST["expertise"]."' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border=2px style='font-size:20px;'>
							<tr>
								<th style='padding:10px;'>SL.</th>
								<th style='padding:10px;'>Name</th>
								<th style='padding:10px;'>Address</th>
								
								<th style='padding:10px;'>Mobile</th>
								
								<th style='padding:10px;'>Email</th>
								<th style='padding:10px;'>Expertise in</th>
								<th style='padding:10px;'>Fee</th>
								<th style='padding:10px;'>Book</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td style='padding:10px;'>".$row['doc_id']."</td>";
								echo "<td style='padding:10px;'>".$row['name']."</td>";
								echo "<td style='padding:10px;'>".$row['address']."</td>";
								
								echo "<td style='padding:10px;'>".$row['contact']."</td>";
								echo "<td style='padding:10px;'>".$row['email']."</td>";

								echo "<td style='padding:10px;'>".$row['expertise']."</td>";
								echo "<td style='padding:10px;'>".$row['fee']."</td>";
						?>
							<td><a href="booking.php?doc_id=<?php echo $row['doc_id'] ?>">Book</a></td>;
						<?php 		
								
								echo "</tr>";
						}
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
					<!-- result -->


	<center><button class="noselect yellow button2" style="color: white;">
	<a href="search_doctor.php" style="text-decoration: none; color: white;">Search Again</a></button></center>
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
