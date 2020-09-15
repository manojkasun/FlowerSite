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


$uname =$_POST["name"];
$email=$_POST["email"];
$type=$_POST["conno"];
$pass=md5($_POST["pass"]);
$pass2=md5($_POST["repass"]);
$type= "user";


$sql_u = "SELECT * FROM user WHERE uname='$uname'";
  	$sql_e = "SELECT * FROM user WHERE email='$email'";
  	$res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);






if (mysqli_num_rows($res_u) > 0) {
    echo '<script language="javascript">';
						echo 'alert("Sorry... username already taken");';
						echo 'window.location.href="signup.php";';
						echo '</script>';
  	  $name_error = "Sorry... username already taken"; 	
  	}else if(mysqli_num_rows($res_e) > 0){
     echo '<script language="javascript">';
						echo 'alert("Sorry... email already taken");';
						echo 'window.location.href="signup.php";';
						echo '</script>';
  	  $email_error = "Sorry... email already taken"; 	
  	}




else {
$sql = "INSERT INTO user (uname,email,password,type)VALUES ('$uname','$email','$pass', '$type'   )";

if ($conn->query($sql) === TRUE) {
    echo '<script language="javascript">';
	echo 'alert("Account Created Please log in");';
	echo 'window.location.href="index.php";';
	echo '</script>';

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();

?>

