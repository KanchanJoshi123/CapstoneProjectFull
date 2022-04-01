<?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>	

<!-- <?php include('function.php'); ?> -->



	<!-- this is for donor registraton -->
	<div class="search" style="background-color:;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;padding: 5px; margin-top: -20px;">Search Here</h1>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 200px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 500px; font-size: 18px;">
					<form action="search_result.php" method="post" class="form-group">

					<!-- testing -->
					<label for="address">
						Search By:</label><select name="address" type="text" style="width: 150px;margin-right: 150px;" />
												<option>-Select-</option>
												<option>Pune</option>
												<option>Dinajpur</option>
												<option>Indapur</option>
												<option>Jamnagar</option>
												
											</select>

					<br><br>
					<!-- testing end-->

					<label for="expertise">
						 Category:</label>
						 <select name="expertise" type="text" style="width: 150px;margin-right: 150px;"/>
												<option>-Select-</option>
												<option>Orthopedic</option>
												<option>Neurologist</option>
												<option>Cardiologist</option>
												<option>Plastic Surgeon</option>
												<option>General Physician</option>
											</select>

					
					<button name="submit" type="submit" class="noselect yellow button2" style="margin-left: 80px; margin-top: 30px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
	
	

	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>




</body>
</html>