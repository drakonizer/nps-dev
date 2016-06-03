<!DOCTYPE html>

<html>
	<!-- some imports-->
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script type="text/javascript" src="js/material.min.js"></script>
	<title>Voting System</title>
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
					<span onclick="location.href='home.php'" style="cursor:pointer;" class="mdl-layout-title">NPS-HSR | Voting Software | 2016-2017</span>
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
	    <!-- Wide card with share menu button -->
		<!-- Image card -->
		<style>
		.demo-card-image.mdl-card {
		  width: auto;
		  height: auto;
		  /* background: url('c1.jpg') center / cover; */
		}
		.demo-card-image > .mdl-card__actions {
		  height: 52px;
		  padding: 16px;
		  background: rgba(0, 0, 0, 0.2);
		}
		.demo-card-image__filename {
		  color: #fff;
		  font-size: 14px;
		  font-weight: 500;
		}
		</style>

	   
		<body>
		<div id="parentu" style="padding-top: 150px;">
		<div class="demo-card-image mdl-card mdl-shadow--16dp content mdl-js-ripple-effect" onclick="location.href='pass-paget.php'" style="background: url('c1.jpg') center / contain; background-repeat:no-repeat;" id="select">
		  <div href="pass-page.php" class="mdl-card__title mdl-card--expand mdl-ripple"></div>
		</div>
		<div class="demo-card-image mdl-card mdl-shadow--16dp content mdl-js-ripple-effect" onclick="location.href='pass-page.php'" style="background: url('c2.jpg') center / contain; background-repeat:no-repeat; margin-left: 20px; margin-right: auto;" id="select">
		  <div class="mdl-card__title mdl-card--expand mdl-ripple"></div>
		</div>
		</div>
		<div id="parentu" style="padding-top: 20px; margin-bottom: 50px">		
		<div class="demo-card-image mdl-card mdl-shadow--16dp content mdl-js-ripple-effect" onclick="location.href='pass-pagea.php'" style="background: url('c3.jpg') center / contain; background-repeat:no-repeat;" id="select">
		  <div class="mdl-card__title mdl-card--expand mdl-ripple"></div>
		</div>
		<div class="demo-card-image mdl-card mdl-shadow--16dp content mdl-js-ripple-effect" onclick="location.href='pass-pagev.php'" style="background: url('c4.jpg') center / contain; background-repeat:no-repeat; margin-left: 20px; margin-right: auto;" id="select">
		  <div class="mdl-card__title mdl-card--expand mdl-ripple"></div>
		</div>	
		</div>
	</body>
</html>
