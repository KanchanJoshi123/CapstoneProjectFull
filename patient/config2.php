						<?php	
							$servername = "localhost:3308";
							$username = "root";
							$password = "";
							$dbname = "appoinment";

							// Create connection
							$conn = mysqli_connect($servername, $username, $password, $dbname);
							// Check connection
							if (!$conn) {
							    die("Connection failed: " . $conn->connect_error);
							}
						?>	