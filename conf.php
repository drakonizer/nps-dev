<?php 
session_start();
$_SESSION['shname']="";
$_SESSION['shdetails']="";
$_SESSION['sdname']="";
$_SESSION['sddetails']="";
$_SESSION['name']=array("","","","","","");
$_SESSION['details']=array("","","","","","");
include 'thepotatoman.php';
include 'vote.php';
?>
<!DOCTYPE html>

<html>
	<?php dheed();
		  head();
	?>
	<!-- some imports-->
	<link rel="icon" type="image/png" href="icon.png">
	<link rel="stylesheet" type="text/css" href="css/material.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="js/jQuery.js"></script>
	<script type="text/javascript" src="js/material.min.js"></script>

	<title>Make a Vote!</title>
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

			<div class="demo-layout-transparent mdl-layout mdl-js-layout mdl-layout--fixed-tabs mdl-shadow--16dp" style="height: 222px">
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
						<a class="mdl-navigation__link" href="pass-pagev.php">View Results!</a>
					</nav>
				</div>
					<!-- script for confirmation toggle -->
					<script>
							function conf(toBlock, toNone){
								if(toBlock.localeCompare(toNone)!=0){
								document.getElementById(toBlock).style.display = 'flex';
								document.getElementById(toNone).style.display = 'none';
								}
							}
							function getName()
							{
								if(document.getElementById('parentu_main').style.display == 'flex')
									return "parentu_main";
								else if(document.getElementById('parentu_head').style.display == 'flex')
									return "parentu_head";
								else 
									return "confirm_candy";
							}
							function tab2()
							{
								$(".mdl-layout__tab:eq(1) span").click ();
							}
							function tab3()
							{
								$(".mdl-layout__tab:eq(2) span").click ();
							}
							function submitForm()
							{
								document.getElementById("confirm").submit();
							}
							function showSnax()
							{
								'use strict';
								  var snackbarContainer = document.querySelector('#snackbarz');
									var data = {message: 'Your vote has been successfully cast!'};
									snackbarContainer.MaterialSnackbar.showSnackbar(data);
									setTimeout("submitForm()", 3000);
							}
					</script>	
				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="background: transparent">
					<a href="index.php#fixed-tab-1" id="t1" class="mdl-layout__tab">Deputy-Head</a>
					<a href="index.php#fixed-tab-2" id="t2" class="mdl-layout__tab">Head</a>
					<a href="conf.php" id="t3" class="mdl-layout__tab is-active" onclick="conf('confirm_candy', getName());">Confirmation</a>
					
				</div>
			</header>
			<main class="mdl-layout__content">
			</main>
			</div>
	</head>
		<style>
		.demo-card-square.mdl-card {
		  width: 320px;
		  height: 400px;
		}
		.demo-card-square > .mdl-card__title {
		  color: #fff;
		}
		</style>
	    <!-- cards for the candidates -->
		<body>
	<!-- confirmation cards -->
	<div id="confirm_candy" style="display: flex; justify-content: space-between;">
		<div id="childu_main">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" >
			  <div class="mdl-card__title mdl-card--expand" style="background:
			url(<?php echo "picture/".$_SESSION['d'].".jpg"; ?>)center / cover;">
				<h2 class="mdl-card__title-text"><?php echo $_SESSION['name'][$_SESSION['d']];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $_SESSION['details'][$_SESSION['d']]; ?>
			  </div>
			  </div>
			</div>
		<div id="childu_main" style="margin-right: auto;">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" >
			  <div class="mdl-card__title mdl-card--expand" style="background:
			url(<?php echo "picture/".$_SESSION['h'].".jpg"; ?>)center / cover;">
				<h2 class="mdl-card__title-text"><?php echo $_SESSION['name'][$_SESSION['h']];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $_SESSION['details'][$_SESSION['h']]; ?>
			  </div>
			  </div>
			</div>
		<div id="dbtn">
		<form method="post" id="confirm" name="confirm" action="voteadd.php">
		<button type="button" class="mdl-shadow--16dp mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" onclick="showSnax();">
		  <img src="icons/done_all.png"></img>
		</button>
		</form>
		</div>
	</div>
	</form>
	</body>
		<div id="snackbarz" class="mdl-js-snackbar mdl-snackbar">
		  <div class="mdl-snackbar__text"></div>
		  <button class="mdl-snackbar__action" type="button"></button>
		</div>
</html>
