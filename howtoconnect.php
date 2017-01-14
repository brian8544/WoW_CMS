<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Nexus-WoW</title>
<!--
Template Used: Hyperspace @ HTML5up.net - ajlkn
Edited by: Brian8544
-->
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- custom -->
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

		<!-- start navigation -->
		<div class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="javascript:history.back()" class="smoothScroll">Home</a></li>
						<li><a href="account/create/" class="smoothScroll">Create Account</a></li>
						<li><a href="howtoconnect.php" class="smoothScroll">How To Connect</a></li>
						<li><a href="forum/" class="smoothScroll">Forum</a></li>
						<li><a href="#about" class="smoothScroll">About</a></li>
						<li><a href="armory/" class="smoothScroll">Armory (Soon!)</a></li>
						<li><a href="account/login/" class="smoothScroll">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end navigation -->

	<div id="divider">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-sm-1"></div>
					<div class="col-md-8 col-sm-8">
						<h2 class="wow bounce"><b>How To Connect</b></st.</h2>
						<p class="wow fadeInUp" data-wow-delay="0.9s"></p>
					</div>
					<div class="col-md-2 col-sm-2"></div>
				</div>
			</div>
		</div>

		<div id="register">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.9s">
						<?php
						include 'config/database.php';
						$query = mysql_query("SELECT * FROM howtoconnect WHERE `id` = '1'");
						while($output = mysql_fetch_assoc($query))
						{
							echo '<h3>'.$output['title'].'</h3>';
							echo '<p>'.$output['text'].'</p>';
						}
						?>
						<br>
						<br>
						<br>
						<br>
						<br>
						<br>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-7">
						<p>Copyright &copy; 2016-2017 <a rel="nofollow" href="http://nexus-wow.eu" target="_parent">Nexus Entertainment LLC.</a></p>
					</div>
					<div class="col-md-4 col-sm-5">
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-github"></a></li>
							<li><a href="admin/" class="fa fa-user"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>



		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- isotope -->
		<script src="js/isotope.js"></script>
		<!-- images loaded -->
   		<script src="js/imagesloaded.min.js"></script>
   		<!-- wow -->
		<script src="js/wow.min.js"></script>
		<!-- smoothScroll -->
		<script src="js/smoothscroll.js"></script>
		<!-- jquery flexslider -->
		<script src="js/jquery.flexslider.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>

	</body>
</html>
