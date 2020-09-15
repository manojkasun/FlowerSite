<?php

include("dbcon.php");
					session_start();
					unset($_SESSION["user"]);
					unset($_SESSION['pw']);
                  
					unset($_SESSION['type']);
				

					$conn= new mysqli($servername,$username,$password, $dbname);

					if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
					} 
					echo "";

					$mail = $_POST["email"];
					$pass = md5($_POST["pass"]);



					$sql = "SELECT type, uname FROM user where email='".$mail."' && password='".$pass."'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) 
						{
							
							$_SESSION['user'] =$row['uname'];
							$_SESSION['type'] = $row['type'];
							$_SESSION['pw'] = $pass;
							$id = $row['type'];
							
							if($id=='manager')
							{
								header("Location: http://localhost/flowersite/manager.php", true, 301);
							}
							else if($id=='user')
							{
								header("Location: http://localhost/flowersite/index.php", true, 301);
							}
						
						}
					} else {
						echo '<script language="javascript">';
						echo 'alert("Username Or Password not valid");';
						echo 'window.location.href="login.php";';
						echo '</script>';
					}
					$conn->close();
				?>