<!DOCTYPE html>
<?php
include("dbcon.php");
?>
<head>
	<title>Flower Mart</title>
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




</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
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
				<li><a href="order.php">My Cart</a></li>
				<li><a href="login.php">My account</a></li>
				<li><a href="logout.php">Log out</a></li>
			</ul>
			</div>
			<!-- site menu -->
		
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="img/bg.jpg">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-left"><img src="img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">New Flowers</div>
						<h2><span>New</span> <br> collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div>
			<div class="hs-item">
				<div class="hs-left"><img src="img/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<div class="price">New Flowers</div>
						<h2><span>new</span> <br> collection</h2>
						<a href="" class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div>
		</div>
	</section>
	
	<!-- Product section -->
	<section class="product-section spad">
		<div class="container">
			<ul class="product-filter controls">
				<li class="control" data-filter=".new">New arrivals</li>
				<li class="control" data-filter="all">Recommended</li>
				<li class="control" data-filter=".best">Modern Styles</li>
			</ul>
			<div class="row" id="product-filter">
				







				<?php


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM cart ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) 
	{
		
		?>





				<div class="mix col-lg-3 col-md-6 best">
					<div class="product-item">
						<figure>
							<img src="img/products/<?php echo $row["pid"] ?>.jpg" alt="">
							
						</figure>
						<div class="product-info">
							<h6><?php echo $row["pname"] ?></h6>
							<p><?php echo $row["price"] ?></p>
							<form action="cart.php" method="post">
									<input type="hidden" name="price" value="<?php echo $row["price"] ?>">
									<input type="hidden" name="pcode" value="<?php echo $row["pname"] ?>">
									<input type="hidden" name="user" value="">
								<input type="submit" class="site-btn btn-line" value="ADD TO CART"/>
							</form>
						</div>
					</div>
				</div>

<?php
 }
} else {
    echo "0 results";
}

$conn->close();
?> 







			</div>
		</div>
		
	</section>
	



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