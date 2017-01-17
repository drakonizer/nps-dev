<?php 
session_start();
$total = array_fill(0,6,0);
$name = array_fill(0,6,'');
$class = array_fill(0,6,array_fill(0,12,0));
include '../php/thepotatoman.php';
include '../php/results.php'; 
?>

<!DOCTYPE html>

<html>
	<!-- some imports-->
	<link rel="icon" type="image/png" href="../icon.png">
	<link rel="stylesheet" type="text/css" href="../css/material.min.css">
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../css/material.min.js"></script>
	<!--link rel="stylesheet" href="css/material.min.css"-->
	<!--script src="css/material.js"></script-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<title>Results</title>
	<head>
			<!-- Uses a transparent header that draws on top of the layout's background -->
			<style>
			.demo-layout-transparent {
			background: url('../drawable/test.png') center / cover;
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
		</head>
		<body>
		<div id="passform" style="margin-top: 164px;">
			<table class="mdl-data-table mdl-shadow--16dp">
				<tr class="mdl-data-table">
					<td><b>Candidates</b></td>
					<td><b>9A</b></td>
					<td><b>9B</b></td>
					<td><b>9C</b></td>
					<td><b>10A</b></td>
					<td><b>10B</b></td>
					<td><b>10C</b></td>
					<td><b>11A</b></td>
					<td><b>11B</b></td>
					<td><b>11C</b></td>
					<td><b>12A</b></td>
					<td><b>12B</b></td>
					<td><b>Teachers</b></td>
					<td><b>Total</b></td>
				</tr>
				<tr>
					<td><b>School Vice-Prefect</b></td>
				</tr>
				<tr>
					<td><?php echo $name[0]; ?></td>
					<td><?php echo $class[0][0]; ?></td>
					<td><?php echo $class[0][1]; ?></td>
					<td><?php echo $class[0][2]; ?></td>
					<td><?php echo $class[0][3]; ?></td>
					<td><?php echo $class[0][4]; ?></td>
					<td><?php echo $class[0][5]; ?></td>
					<td><?php echo $class[0][6]; ?></td>
					<td><?php echo $class[0][7]; ?></td>
					<td><?php echo $class[0][8]; ?></td>
					<td><?php echo $class[0][9]; ?></td>
					<td><?php echo $class[0][10]; ?></td>
					<td><?php echo $class[0][11]; ?></td>
					<td><?php echo $total[0]; ?></td>
				</tr>
				<tr>
					<td><?php echo $name[1]; ?></td>
					<td><?php echo $class[1][0]; ?></td>
					<td><?php echo $class[1][1]; ?></td>
					<td><?php echo $class[1][2]; ?></td>
					<td><?php echo $class[1][3]; ?></td>
					<td><?php echo $class[1][4]; ?></td>
					<td><?php echo $class[1][5]; ?></td>
					<td><?php echo $class[1][6]; ?></td>
					<td><?php echo $class[1][7]; ?></td>
					<td><?php echo $class[1][8]; ?></td>
					<td><?php echo $class[1][9]; ?></td>
					<td><?php echo $class[1][10]; ?></td>
					<td><?php echo $class[1][11]; ?></td>
					<td><?php echo $total[1]; ?></td>
				</tr>
				<tr>
					<td><?php echo $name[2]; ?></td>
					<td><?php echo $class[2][0]; ?></td>
					<td><?php echo $class[2][1]; ?></td>
					<td><?php echo $class[2][2]; ?></td>
					<td><?php echo $class[2][3]; ?></td>
					<td><?php echo $class[2][4]; ?></td>
					<td><?php echo $class[2][5]; ?></td>
					<td><?php echo $class[2][6]; ?></td>
					<td><?php echo $class[2][7]; ?></td>
					<td><?php echo $class[2][8]; ?></td>
					<td><?php echo $class[2][9]; ?></td>
					<td><?php echo $class[2][10]; ?></td>
					<td><?php echo $class[2][11]; ?></td>
					<td><?php echo $total[2]; ?></td>
				</tr>
				<tr>
					<td><b>School Prefect</b></td>
				</tr>
				<tr>
					<td><?php echo $name[3]; ?></td>
					<td><?php echo $class[3][0]; ?></td>
					<td><?php echo $class[3][1]; ?></td>
					<td><?php echo $class[3][2]; ?></td>
					<td><?php echo $class[3][3]; ?></td>
					<td><?php echo $class[3][4]; ?></td>
					<td><?php echo $class[3][5]; ?></td>
					<td><?php echo $class[3][6]; ?></td>
					<td><?php echo $class[3][7]; ?></td>
					<td><?php echo $class[3][8]; ?></td>
					<td><?php echo $class[3][9]; ?></td>
					<td><?php echo $class[3][10]; ?></td>
					<td><?php echo $class[3][11]; ?></td>
					<td><?php echo $total[3]; ?></td>
				</tr>
				<tr>
					<td><?php echo $name[4]; ?></td>
					<td><?php echo $class[4][0]; ?></td>
					<td><?php echo $class[4][1]; ?></td>
					<td><?php echo $class[4][2]; ?></td>
					<td><?php echo $class[4][3]; ?></td>
					<td><?php echo $class[4][4]; ?></td>
					<td><?php echo $class[4][5]; ?></td>
					<td><?php echo $class[4][6]; ?></td>
					<td><?php echo $class[4][7]; ?></td>
					<td><?php echo $class[4][8]; ?></td>
					<td><?php echo $class[4][9]; ?></td>
					<td><?php echo $class[4][10]; ?></td>
					<td><?php echo $class[4][11]; ?></td>
					<td><?php echo $total[4]; ?></td>
				</tr>
				<tr>
					<td><?php echo $name[5]; ?></td>
					<td><?php echo $class[5][0]; ?></td>
					<td><?php echo $class[5][1]; ?></td>
					<td><?php echo $class[5][2]; ?></td>
					<td><?php echo $class[5][3]; ?></td>
					<td><?php echo $class[5][4]; ?></td>
					<td><?php echo $class[5][5]; ?></td>
					<td><?php echo $class[5][6]; ?></td>
					<td><?php echo $class[5][7]; ?></td>
					<td><?php echo $class[5][8]; ?></td>
					<td><?php echo $class[5][9]; ?></td>
					<td><?php echo $class[5][10]; ?></td>
					<td><?php echo $class[5][11]; ?></td>
					<td><?php echo $total[5]; ?></td>
				</tr>
			</table>
		</div>
		</body>
	</html>