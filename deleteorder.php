<?php
include("dbcon.php");

$conn= new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
 $id = $_POST["pid"];

$sql_u = "SELECT * FROM orders WHERE orderid ='$id'";
  	
  	$res_u = mysqli_query($conn, $sql_u);
  	






if (mysqli_num_rows($res_u) >0) {
    // sql to delete a record
$sql = "delete from orders where orderid='$id';";
   if ($conn->query($sql) === TRUE) {
  
     echo '<script language="javascript">';
	echo 'alert("Record deleted successfully");';
	echo 'window.location.href="order.php";';
	echo '</script>';
    
} else {
    echo "Error deleting record: " . $conn->error;
    
} 
  	}

else {
echo '<script language="javascript">';
						echo 'alert("Sorry... This is Not Excited . Cant Delete");';
						echo 'window.location.href="order.php";';
						echo '</script>';
  	  $name_error = "Sorry... This User Not Excited . Cant Delet"; 	



}
$conn->close();
?>