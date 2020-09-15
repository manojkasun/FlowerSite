<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>The Plaza - eCommerce Template</title>
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



  <!-- Font Icon -->
  <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style1.css">

<?php


session_start();


if(!isset($_SESSION['user'])){
	//not logged in
	
} 


else
{
	header('Location: account.php');
}

?>






<style>
body
{
    background-color:#F7EDEB;
}
#log
{
    width:40%;
    background-color:#ECE7E6;
    border-radius:7px;
    margin-top:17vh;
}
#btnlog
{
    margin-bottom: 5vh;
}
#crt{
    float:right;
    margin-right: 20%;
}

</style>

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
				<li><a href="#">My Cart</a></li>
				<li><a href="#">My account</a></li>
			
				<li><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->
    <div class="main">

<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" action="reg.php" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your user Name"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="repass" id="repass" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                        <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                <a href="login.php" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
</body>
</html>



	<!--====== Javascripts & Jquery ======-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>