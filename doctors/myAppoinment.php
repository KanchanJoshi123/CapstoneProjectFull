<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #FFFF99;padding: 5px; margin-top: -15px;">Today's Appoinment</h1>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM booking WHERE userid='".$_SESSION["userid"]."'";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' style='font-size:20px; margin-top:20px; margin-bottom:20px;'>
							<tr>
								<th style='padding:10px;'>Patient Name</th>
								<th style='padding:10px;'>Contact</th>
								<th style='padding:10px;'>E-mail</th>
								<th style='padding:10px;'>Address</th>
								<th style='padding:10px;'>Date</th>
								<th style='padding:10px;'>Time</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['pcontact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['timing']."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center' style='font-size:20px; color:red; font-weight:bold;'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
	
	
	

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
