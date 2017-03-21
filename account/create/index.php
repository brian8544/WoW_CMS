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
						<li><a href="/index.php" class="smoothScroll">Home</a></li>
						<li><a href="#register" class="smoothScroll">Create Account</a></li>
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
						<h2 class="wow bounce">You are creating an account for: <strong><b>Legion</b></strong>.</h2>
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
						<h3>Create an Account:</h3>
						<h4></h4>
						<!-- Main -->
				<?php
				// We need these.
				require_once("config.php");
				require_once("SOAPRegistration.php");

				// Initialize session and variables.
				$messages = Array();
				$showForm = true;

				// If form was submitted, carry out the registration.
				if(!empty($_POST["submit"]))
				{
				    $reg = new SOAPRegistration();
				    $messages = $reg -> getMessages();
				    $showForm = $reg -> showForm();
				}

				$messagesDisplay = '';
				foreach($messages as $msg)
				{
				    $messagesDisplay .= '<div class="errors">'.$msg.'</div>';
				}

				?>

				<!DOCTYPE html>
				<html>
				    <body>
				        <table class="reg">
				            <tr>
				                <td>
				                    <a href="<?php echo $_SERVER["PHP_SELF"]; ?>"><img src="" alt="<?php echo SITE_TITLE; ?>" /></a>
				                </td>
				            </tr>
				            <tr>
				                <td>
				                </td>
				            </tr>
				            <tr>
				                <td>
				                    <?php
				                    echo $messagesDisplay;

				                    if ($showForm)
				                    { ?>
				                    <form action="" method="post" name="reg">
				                        <table class="form">
				                            <tr>
				                                <td align="right">
				                                    E-mail Address:
				                                </td>
				                                <td align="left">
				                                    <input name="accountname" type="text" maxlength="32" />
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="right">
				                                    Password:
				                                </td>
				                                <td align="left">
				                                    <input name="password" type="password" maxlength="16" />
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="right">
				                                    Confirm password:
				                                </td>
				                                <td align="left">
				                                    <input name="password2" type="password" maxlength="16" />
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="right">
				                                    Confirm e-mail address:
				                                </td>
				                                <td align="left">
				                                    <input name="email" type="text" maxlength="254" />
				                                </td>
				                            </tr>
				                            <tr>
				                                <td align="right">
				                                    Expansion:
				                                </td>
				                                <td align="left">
				                                    <select name="expansion">
				                                        <option selected value="2">Legion</option>
				                                    </select>
				                                </td>
				                            </tr>
				                            <tr>
				                                <td colspan="2" align="center">
				                                    <input type="submit" class="sbm" value="Register" name='submit' />
				                                </td>
				                            </tr>
				                        </table>
				                    </form>
				                    <?php
				                    }
				                    ?>
						<p></p>
					</div>
					<div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.9s">

							</div>
					</div>






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
