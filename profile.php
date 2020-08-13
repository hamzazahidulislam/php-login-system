<?php
require_once('connect.php');
if (!isset($_COOKIE['blnkhack'])) {
	header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="profile_css/font-awesome.min.css">
			<link rel="stylesheet" href="profile_css/bootstrap.css">
			<link rel="stylesheet" href="profile_css/main.css">
</head>
<body>
    
			<!-- start banner Area -->
			<section class="banner-area">
				<div class="container">
					<div class="row fullscreen align-items-center justify-content-between">
						<div class="col-lg-6 col-md-6 banner-left">
							<h6>This is </h6>
							<h1>YOUR PROFILE</h1>
							<p>
								hi welcome to my website
							</p>
							<a href="logout_core.php" class="primary-btn text-uppercase">Sign out</a>
						</div>
						<div class="col-lg-6 col-md-6 banner-right d-flex align-self-end">
							<img class="img-fluid" src="profile_css/img/hero-img.png" alt="">
						</div>
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

</body>
</html>