<?php 
$page=3;
include '../php/login.php';
$_SESSION['error']="Enter your password...";
 ?>
<!DOCTYPE html>

<html>
	<!-- some imports-->
	<link rel="icon" type="image/png" href="icon.png">
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script type="text/javascript" src="js/material.min.js"></script>

	<title>Enter Password</title>
	<head>
			<!-- Uses a transparent header that draws on top of the layout's background -->
			<style>
			.demo-layout-transparent {
			background: url('test.png') center / cover;
			}
			.demo-layout-transparent .mdl-layout__header,
			.demo-layout-transparent .mdl-layout__drawer-button {
			/* This background is dark, so we set text to white. Use 87% black instead if
				 your background is light. */
			color: white;
			}
			</style>

			<div class="demo-layout-transparent mdl-layout mdl-js-layout mdl-layout--fixed-tabs mdl-shadow--16dp" style="height: 200px">
			<header class="mdl-layout__header mdl-layout__header--transparent mdl-shadow--16dp" >
				<div class="mdl-layout__header-row">
					<!-- Title -->
					<span onclick="location.href='home.php'" style="cursor:pointer;" class="mdl-layout-title">NPS-HSR | Voting System | 2016-2017</span>
					<!--NOTE: We will use a different image and change the color of the text in the header accordingly -->
					<!-- Add spacer, to align navigation to the right -->
					<div class="mdl-layout-spacer"></div>
					<!-- Navigation -->
					<nav class="mdl-navigation">
						<a class="mdl-navigation__link" href="pass-page.php">Student Vote</a>
						<a class="mdl-navigation__link" href="pass-paget.php">Teacher Vote</a>
						<a class="mdl-navigation__link" href="pass-pagea.php">Add Details</a>
						<a class="mdl-navigation__link" href="pass-pagev.php">View Results</a>
					</nav>
				</div>
			</header>
			<main class="mdl-layout__content">
			</main>
			</div>
		<body>
			<div class="mdl-card__supporting-text" id="passform" style="width: 300px; height: 50px; background: #F44336">
				<p style="color: #ffffff;">Please enter the password needed to access this portion of the website</p>
			</div>
			<form action="" method="post">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" id="passform" style="margin-top: 90px;">
				<input class="mdl-textfield__input" type="password" id="password" name="password" style="width: 300px;">
				<label class="mdl-textfield__label" for="password"><?php echo $_SESSION['error']; ?></label>
			  </div>
			<div id="passform" style="margin-top: 150px;">
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" name="submit" type="submit" id="submit">
				<img style="width: 30px; height: 30px;" src="../icons/send.png"></i>
			</button>
			</div>
			</form>
		</body>
</html>
