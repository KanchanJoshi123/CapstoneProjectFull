<?php
							include('../config.php');
						// 	if(isset($_POST['delete'])){
							
						// 	// sql to delete a record
						// 	$id= $_GET('booking_id');	
						// 	$sql = "DELETE FROM booking WHERE booking_id='$id'";

						// 	if (mysqli_query($conn, $sql)) {
						// 	    echo "<script>alert('Your booking has been Canceled!')</script>";
						// 	} else {
						// 	     echo "<script>alert('There was an Error')</script>";
						// 	}

						// 	mysqli_close($conn);
						// }
						if(isset($_POST['submit'])){
							
							// sql to delete a record
							// $id= $_GET('booking_id');	
							$sql2 = "DELETE * FROM booking WHERE email = '".$_SESSION["email"]."'";

							if (mysqli_query($sql2, MYSQL_ASSOC)) {
							    echo "<script>alert('Your booking has been Canceled!')</script>";
							} else {
							     echo "<script>alert('There was an Error')</script>";
							}

							mysqli_close($conn);
}

					 ?>
