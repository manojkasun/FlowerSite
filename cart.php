<?php

session_start();


if(!isset($_SESSION['user'])){
	//not logged in
	header('Location: login.php');
} 


else
{
	$name= $_SESSION['user'];
	$pw=  $_SESSION['pw'];
}



include("dbcon.php");

$conn= new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";


$pid =$_POST["pcode"];
$price=$_POST["price"];
$uname= "$name";
$month= date(' F ');

$sql = "INSERT INTO orders (user,pid,price,omonth)VALUES ('$uname','$pid','$price', '$month'  )";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Add to chart");';
	echo 'window.location.href="order.php";';
	echo '</script>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();









?>

