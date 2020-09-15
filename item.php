<link href="alert/css/alert.css" rel="stylesheet" />
<link href="alert/themes/default/theme.css" rel="stylesheet" />
<script src="alert/js/alert.js"></script>
    <link href="alert/themes/light/theme.css" rel="stylesheet" />


<?php
include("dbcon.php");

$conn= new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$name =$_POST["name"];
$price=$_POST["pr"];



$sql = "INSERT INTO cart (pname,price)VALUES ('$name','$price'  )";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Iteam added ");';
	echo 'window.location.href="index.php";';
	echo '</script>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

}
$conn->close();

?>

