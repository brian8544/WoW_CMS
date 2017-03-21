<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title>Nexus-WoW</title>
<!--
GitHub: http://github.com/brian8544/WOW_CMS
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
						<li><a href="#home" class="smoothScroll">Home</a></li>
						<li><a href="account/create/" class="smoothScroll">Create Account</a></li>
						<li><a href="howtoconnect.php" class="smoothScroll">How To Connect</a></li>
						<li><a href="forum/" class="smoothScroll">Forum</a></li>
						<li><a href="armory/" class="smoothScroll">Armory (Soon!)</a></li>
						<li><a href="account/login/" class="smoothScroll">Login</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end navigation -->

		<!-- start home -->
		<section id="home" class="text-center">
		  <div class="templatemo_headerimage">
		    <div class="flexslider">
		      <ul class="slides">
		        <li>
		        	<img src="images/slider/1.jpg" alt="">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000"><b>Welcome to xxxxxxxxxx!</b></h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span>Cataclysm &AMP; Legion Private Server</span>
						</h2>
						<a href="register/" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">Register!</a>
					    </div>
				  	</div>
		        </li>
		        <li>
		        	<img src="images/slider/2.jpg" alt="">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000">Legion has been released</h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span>After a month of extensive testing, Legion realm is now live.</span>
						</h2>
						<!-- <p>Issues may occur!</p> -->
					<!--	<a href="#about" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">See about us</a> -->
					    </div>
				  	</div>
		        </li>
		      </ul>
		    </div>
		  </div>
		</section>
		<!-- end home -->


		<div id="news">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="wow bounce">Latest Announcements</h2> <!-- Issue #1 - Insecure DB connection --->
					</div>
					<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
						<img src="images/gnome_engineer.jpg" class="img-responsive" alt="team img">
						<?php
						include 'config/database.php';
						$query = mysql_query("SELECT * FROM news WHERE `id` = '1'");
						while($output = mysql_fetch_assoc($query))
						{
							echo '<h4>'.date ('d-M-Y', $output['date']).'</h4>';
							echo '<p>';
							echo '<h3>'.$output['title'].'</h3>';
							echo '<p>'.$output['text'].'</p>';
						}
						?>
					</div>

					<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.6s">
						<img src="images/gnome_engineer.jpg" class="img-responsive" alt="team img">
						<?php
						include 'config/database.php';
						$query = mysql_query("SELECT * FROM news WHERE `id` = '2'");
						while($output = mysql_fetch_assoc($query))
						{
							echo '<h4>'.date ('d-M-Y', $output['date']).'</h4>';
							echo '<p>';
							echo '<h3>'.$output['title'].'</h3>';
							echo '<p>'.$output['text'].'</p>';
						}
						?>
					</div>

					<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
						<img src="images/gnome_engineer.jpg" class="img-responsive" alt="team img">
						<?php
						include 'config/database.php';
						$query = mysql_query("SELECT * FROM news WHERE `id` = '3'");
						while($output = mysql_fetch_assoc($query))
						{
							echo '<h4>'.date ('d-M-Y', $output['date']).'</h4>';
							echo '<p>';
							echo '<h3>'.$output['title'].'</h3>';
							echo '<p>'.$output['text'].'</p>';
						}
						?>
					</div>

				</div>
			</div>
		</div>
		<br></br>
		<br></br>

		<div id="divider">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-sm-1"></div>
					<div class="col-md-8 col-sm-8">
						<h2 class="wow bounce">We try to provide the best <strong>Blizzlike</strong> experience possible.</h2>
						<p class="wow fadeInUp" data-wow-delay="0.9s">We do this by extensively testing scripts on our PTR before releasing it on the live realms.</p>
					</div>
					<div class="col-md-2 col-sm-2"></div>
				</div>
			</div>
		</div>

		<div id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.9s">
						<h3>About Nexus-WoW</h3>
						<h4></h4>
						<p>We are a fairly new private server, started in January 2017.</p>
						<p>Currently we are offering Cataclysm & Legion expansions.</p>
						<p></p>
					</div>
					<div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.9s">

							</div>
					</div>


				<div id="service">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.1s">
								<i class="fa fa-server"></i>
							</div>
							<div class="media-body wow fadeIn">
								<h3 class="media-heading">High Uptime</h3>
								<p>Since we take this project very seriously, we try to limit crashes & reboots on our realms.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.3s">
								<i class="fa fa-file-text"></i>
							</div>
							<div class="media-body wow fadeIn">
								<h3 class="media-heading">Good Quality Scripting</h3>
								<p>Scripts will only be published to our live realms when undergone testing.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
								<i class="fa fa-user"></i>
							</div>
							<div class="media-body wow fadeIn" data-wow-delay="0.3s">
								<h3 class="media-heading">Professional Staff</h3>
								<p>We try to provide for the most "Blizzlike" assistance on In-Game and on our forums. &nbsp; &nbsp; &nbsp;</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.9s">
								<i class="fa fa-sitemap"></i>
							</div>
							<div class="media-body wow fadeIn" data-wow-delay="0.6s">
								<h3 class="media-heading">Anti DDOS Attack Protection</h3>
								<p>We got an active DDOS protection plan.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.4s">
								<i class="fa fa-code-fork"></i>
							</div>
							<div class="media-body wow fadeIn" data-wow-delay="0.3s">
								<h3 class="media-heading">Open Source</h3>
								<p>We weekly push our updates to the official <a href="https://github.com/TrinityCore/TrinityCore/tree/6.x">TrinityCore</a> Github.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.8s">
								<i class="fa fa-hdd-o"></i>
							</div>
							<div class="media-body wow fadeIn" data-wow-delay="0.6s">
								<h3 class="media-heading">No DMCA(claim) Shutdowns</h3>
								<p>Due to hosting our server offshore, Blizzard cannot shutdown our servers. No worries about losing characters!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-7">
						<p>Copyright &copy; 2016-2017 <a rel="nofollow" href="http://project-reborn.com/" target="_parent">Nexus Entertainment LLC.</a></p>
					</div>
					<div class="col-md-4 col-sm-5">
						<ul class="social-icon">
							<li><a href="https://www.facebook.com/brian.oost" class="fa fa-facebook"></a></li>
							<li><a href="https://www.twitter.com/brian8544" class="fa fa-twitter"></a></li>
							<li><a href="https://www.github.com/brian8544" class="fa fa-github"></a></li>
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
