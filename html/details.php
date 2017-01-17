<?php
$_SESSION['loggedin']=1;
include 'thepotatoman.php'; ?>
<!DOCTYPE html>
<html>
	<!-- some imports-->
	<link rel="icon" type="image/png" href="icon.png">
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script src="js/material.min.js"></script>

	<title>Enter info</title>
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
			<!-- candidate info fields -->
		<form action="adddetails.php" method="post">
		<div id="passform" style="margin-top: 150px;">
			<!-- first name -->
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="name" id="name">
				<label class="mdl-textfield__label" for="name">Candidate's name</label>
			  </div>
			  <br></br>
			<!-- last-name -->
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<input class="mdl-textfield__input" type="text" name="lastname" id="lastname">
				<label class="mdl-textfield__label" for="tagline">Last Name</label>
			  </div>
			  <br></br>
			<!-- description -->
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
				<textarea class="mdl-textfield__input" type="text" rows= "3" name="details" id="details" ></textarea>
				<label class="mdl-textfield__label" for="details">Description</label>
			  </div>
			  <br></br>
			<!--dp -->
				<button type="submit" class="mdl-button mdl-shadow--8dp mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" id="submit" style="margin-left: 90px;">
				  <img style="width: 30px; height: 30px;" src="icons/assignment.png" id="upl"></i>Done
				</button>
			</form>
		</div>
	</body>
</html>