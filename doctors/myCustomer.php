<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>





	<!-- this is for donor registraton -->
	<div class="search" style="background-color:;">
		<h1 class="text-center" style="background-color:#272327;color: #FFFF99;padding: 5px; margin-top: -15px;">Customer Details</h1>
<center>
			<div class="formstyle" class="formstyle" style="padding: 5px; margin-bottom: 20px;color:#141313;">
                    <table>
					<form action="" method="post" class="form-group">

					<!-- testing -->
					<tr>
					<td colspan="2" style="font-size: 20px;">
					<label>Please enter the email or the phone no. of the patient:</label>
				    </td>
				    </tr>
				    <tr>
				    <td colspan="2" style="font-size: 20px;">
					<input type="text" name="search"  placeholder="Phone/Email" required>
				    </td>
					</tr><br><br>
                    <tr>
					<td colspan="2"><button name="submit" type="submit" class="noselect yellow button2">Search</button></td>
					</tr>
					</form>
                   </table>
		 	</div>
		 </center>
	</div>
			<?php 
					include('../config.php');
					if(isset($_POST["submit"])){

					$sql = " SELECT * FROM patient WHERE contact = '" . $_POST["search"]."' OR email = '" . $_POST["search"]."' ";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32' style='font-size:20px; margin-top:20px; margin-bottom:20px;'>
							<tr>
								<th style='padding:10px;'>Name</th>
								<th style='padding:10px;'>Age</th>
								<th style='padding:10px;'>Contact</th>
								<th style='padding:10px;'>Address</th>
								<th style='padding:10px;'>Blood Group</th>
								<th style='padding:10px;'>Email</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td style='padding:10px;'>".$row['name']."</td>";
								echo "<td style='padding:10px;'>".$row['age']."</td>";
								
								echo "<td style='padding:10px;'>".$row['contact']."</td>";
								echo "<td style='padding:10px;'>".$row['address']."</td>";
								
								echo "<td style='padding:10px;'>".$row['bgroup']."</td>";
								echo "<td style='padding:10px;'>".$row['email']."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}
				}	

			?>
	

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
 	 	 

<<!-- ?php 
	if(isset($_POST["sbmt"])){
		//header("location:result.php?bg=".$_POST["s2"]);
		echo "<script>location.replace('result.php?bg=". $_POST["s2"] ."');</script>";
	}

?>
 -->

</body>
</html>