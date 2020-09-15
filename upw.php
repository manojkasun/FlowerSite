<?php
session_start();
$name= $_SESSION['user'];
$pwd=  $_SESSION['pw'];
$username=$_SESSION['uname'];


include("dbcon.php");

$conn= new mysqli($servername,$username,$password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


$oldpw=md5 ($_POST["opass"]);
$newpw=md5 ($_POST["npass"]);
$newpw2=md5 ($_POST["npass2"]);


$pass =	md5($_POST["pwd"]);



if($oldpw==$pwd )
{
    if($newpw == $newpw2)
    {
		$sql = "UPDATE user SET password='$newpw'  WHERE uname='".$_SESSION['user']."' ";

		//echo "'$sql'";

		if ($conn->query($sql) === TRUE)
			{
			echo '<script language="javascript">';

			echo 'alert("Update Successful. Please sign in.");';
			echo 'window.location.href="logout.php";';
			echo '</script>';
			}
}
    else
    {
       echo '<script language="javascript">';
			echo 'alert("Mis Match Passwords");';
			echo 'window.location.href="index.php";';
			echo '</script>'; 
    }
}

else
{
			echo '<script language="javascript">';
			echo 'alert("Invalid Password");';
			echo 'window.location.href="index.php";';
			echo '</script>';
}

$conn->close();

?>