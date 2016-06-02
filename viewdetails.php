<?php include 'thepotatoman.php'; ?>

<!DOCTYPE html>

<html>
	<!-- some imports-->
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="css/material.min.js"></script>
	<!--link rel="stylesheet" href="css/material.min.css"-->
	<!--script src="css/material.js"></script-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<title>Results</title>
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
		<body>
		<div id="passform" style="margin-top: 164px;">
			<table class="mdl-data-table mdl-shadow--16dp">
				<tr class="mdl-data-table">
					<td>Candidates</td>
					<td>8A</td>
					<td>8B</td>
					<td>8C</td>
					<td>9A</td>
					<td>9B</td>
					<td>9C</td>
					<td>10A</td>
					<td>10B</td>
					<td>10C</td>
					<td>11A</td>
					<td>11B</td>
					<td>11C</td>
					<td>12A</td>
					<td>12B</td>
					<td>Teachers</td>
					<td>Total</td>
				</tr>
				<tr>
					<td><?php echo $h[0]; ?></td>
					<td><?php echo $v[0]; ?></td>
					<td><?php echo $v[1]; ?></td>
					<td><?php echo $v[2]; ?></td>
					<td><?php echo $v[3]; ?></td>
					<td><?php echo $v[4]; ?></td>
					<td><?php echo $v[5]; ?></td>
					<td><?php echo $v[6]; ?></td>
					<td><?php echo $v[7]; ?></td>
					<td><?php echo $v[8]; ?></td>
					<td><?php echo $v[9]; ?></td>
					<td><?php echo $v[10]; ?></td>
					<td><?php echo $v[11]; ?></td>
					<td><?php echo $v[12]; ?></td>
					<td><?php echo $v[13]; ?></td>
					<td><?php echo $v[14]; ?></td>
					<td><?php echo $v[15]; ?></td>
				<tr>
					<td><?php echo $h[1]; ?></td>
					<td><?php echo $v[0]; ?></td>
					<td><?php echo $v[1]; ?></td>
					<td><?php echo $v[2]; ?></td>
					<td><?php echo $v[3]; ?></td>
					<td><?php echo $v[4]; ?></td>
					<td><?php echo $v[5]; ?></td>
					<td><?php echo $v[6]; ?></td>
					<td><?php echo $v[7]; ?></td>
					<td><?php echo $v[8]; ?></td>
					<td><?php echo $v[9]; ?></td>
					<td><?php echo $v[10]; ?></td>
					<td><?php echo $v[11]; ?></td>
					<td><?php echo $v[12]; ?></td>
					<td><?php echo $v[13]; ?></td>
					<td><?php echo $v[14]; ?></td>
					<td><?php echo $v[15]; ?></td>
				</tr>
				<tr>
					<td><?php echo $h[2]; ?></td>
					<td><?php echo $v[0]; ?></td>
					<td><?php echo $v[1]; ?></td>
					<td><?php echo $v[2]; ?></td>
					<td><?php echo $v[3]; ?></td>
					<td><?php echo $v[4]; ?></td>
					<td><?php echo $v[5]; ?></td>
					<td><?php echo $v[6]; ?></td>
					<td><?php echo $v[7]; ?></td>
					<td><?php echo $v[8]; ?></td>
					<td><?php echo $v[9]; ?></td>
					<td><?php echo $v[10]; ?></td>
					<td><?php echo $v[11]; ?></td>
					<td><?php echo $v[12]; ?></td>
					<td><?php echo $v[13]; ?></td>
					<td><?php echo $v[14]; ?></td>
					<td><?php echo $v[15]; ?></td>
				</tr>
				<tr>
					<td><?php echo $h[3]; ?></td>
					<td><?php echo $v[0]; ?></td>
					<td><?php echo $v[1]; ?></td>
					<td><?php echo $v[2]; ?></td>
					<td><?php echo $v[3]; ?></td>
					<td><?php echo $v[4]; ?></td>
					<td><?php echo $v[5]; ?></td>
					<td><?php echo $v[6]; ?></td>
					<td><?php echo $v[7]; ?></td>
					<td><?php echo $v[8]; ?></td>
					<td><?php echo $v[9]; ?></td>
					<td><?php echo $v[10]; ?></td>
					<td><?php echo $v[11]; ?></td>
					<td><?php echo $v[12]; ?></td>
					<td><?php echo $v[13]; ?></td>
					<td><?php echo $v[14]; ?></td>
					<td><?php echo $v[15]; ?></td>
				</tr>
				<tr>
					<td><?php echo $h[4]; ?></td>
					<td><?php echo $v[0]; ?></td>
					<td><?php echo $v[1]; ?></td>
					<td><?php echo $v[2]; ?></td>
					<td><?php echo $v[3]; ?></td>
					<td><?php echo $v[4]; ?></td>
					<td><?php echo $v[5]; ?></td>
					<td><?php echo $v[6]; ?></td>
					<td><?php echo $v[7]; ?></td>
					<td><?php echo $v[8]; ?></td>
					<td><?php echo $v[9]; ?></td>
					<td><?php echo $v[10]; ?></td>
					<td><?php echo $v[11]; ?></td>
					<td><?php echo $v[12]; ?></td>
					<td><?php echo $v[13]; ?></td>
					<td><?php echo $v[14]; ?></td>
					<td><?php echo $v[15]; ?></td>
				</tr>
				<tr>
					<td><?php echo $h[5]; ?></td>
					<td><?php echo $v[0]; ?></td>
					<td><?php echo $v[1]; ?></td>
					<td><?php echo $v[2]; ?></td>
					<td><?php echo $v[3]; ?></td>
					<td><?php echo $v[4]; ?></td>
					<td><?php echo $v[5]; ?></td>
					<td><?php echo $v[6]; ?></td>
					<td><?php echo $v[7]; ?></td>
					<td><?php echo $v[8]; ?></td>
					<td><?php echo $v[9]; ?></td>
					<td><?php echo $v[10]; ?></td>
					<td><?php echo $v[11]; ?></td>
					<td><?php echo $v[12]; ?></td>
					<td><?php echo $v[13]; ?></td>
					<td><?php echo $v[14]; ?></td>
					<td><?php echo $v[15]; ?></td>
				</tr>
			</table>
		</div>
		</body>