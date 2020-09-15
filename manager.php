<!DOCTYPE html>
<html lang="zxx">
<head>
<?php
include("dbcon.php");
session_start();


if(!isset($_SESSION['user'])){
	//not logged in
	header('Location: login.php');
} 
else if($_SESSION['type']=='user')
{
	header('Location: index.php');
	$name= $_SESSION['user'];
	$pw=  $_SESSION['pw'];
}

else
{
	$name= $_SESSION['user'];
	$pw=  $_SESSION['pw'];
}

?>


	<title>Flower</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
			<h2>Flower house</h2>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			
			<!-- site menu -->
			<ul class="main-menu">
      <li><a href="index.php">Home</a></li>
      <li><a href="add.php">Add Item</a></li>
				<li><a href="order.php">My Cart</a></li>
				<li><a href="updatepw.php">Update Password</a></li>
        <li><a href="logout.php">Log out</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	
<div class="container">
 <br><br>
  <input class="form-control" id="myInput" type="text" placeholder="Search monthly sales report using Month name ">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Customer Name</th>
        <th>Product Name</th>
		<th>Price</th>
		<th>Order Month</th>
      </tr>
    </thead>
	<tbody id="myTable">

	<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM orders ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) 
	{
$id=$row["orderid"] ;

 echo "<tr> <td>". $row["user"]. "</td><td>". $row["pid"]. "</td><td> "  . $row["price"] ."</td><td> " . $row["omonth"] . "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 
   
    </tbody>
  </table>
  
 
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>