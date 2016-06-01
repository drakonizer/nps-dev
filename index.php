<?php include 'thepotatoman.php'; ?>
<!DOCTYPE html>

<html>
	<!-- some imports-->
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
					<span onclick="location.href='home.html'" style="cursor:pointer;" class="mdl-layout-title">NPS-HSR | Voting Software | 2016-2017</span>
					<!--NOTE: We will use a different image and change the color of the text in the header accordingly -->
					<!-- Add spacer, to align navigation to the right -->
					<div class="mdl-layout-spacer"></div>
					<!-- Navigation -->
					<nav class="mdl-navigation">
						<a class="mdl-navigation__link" href="pass-page.html">Student Vote</a>
						<a class="mdl-navigation__link" href="pass-paget.html">Teacher Vote</a>
						<a class="mdl-navigation__link" href="pass-pagea.html">Add Details</a>
						<a class="mdl-navigation__link" href="pass-pagev.html">View Results!</a>
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
							function showSnax()
							{
								'use strict';
								  var snackbarContainer = document.querySelector('#snackbarz');
									var data = {message: 'Your vote has been successfully cast!'};
									snackbarContainer.MaterialSnackbar.showSnackbar(data);
							}
					</script>	
				<!-- Tabs -->
				<div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="background: transparent">
					<a href="#fixed-tab-1" id="t1" class="mdl-layout__tab is-active" onclick="conf('parentu_main', getName());">Deputy-Head</a>
					<a href="#fixed-tab-2" id="t2" class="mdl-layout__tab" onclick="conf('parentu_head', getName());">Head</a>
					<a href="#fixed-tab-3" id="t3" class="mdl-layout__tab" onclick="conf('confirm_candy', getName());">Confirmation</a>
					
				</div>
			</header>
			<main class="mdl-layout__content">
			</main>
			</div>
	</head>
	    <!-- Wide card with share menu button -->
		<style>
		.demo-card-square.mdl-card {
		  width: 320px;
		  height: 400px;
		}
		.demo-card-square > .mdl-card__title {
		  color: #fff;
		  background:
			url('Lighthouse.jpg')center / cover;
		}
		</style>
	    <!-- cards for the candidates -->
		<body>
		<div id="parentu_main" style="display: flex; justify-content: space-between;">
		<div id="childu_main">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" style="background:
			url('1.jpg')center / cover;">
			  <div class="mdl-card__title mdl-card--expand">
				<h2 class="mdl-card__title-text"><?php echo $h[0];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $ddetails[0]; ?>
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
				  <input type="radio" id="option-1" class="mdl-radio__button" name="optionsdh1" value="1">
				  <span class="mdl-radio__label">Pick Me!</span>
				</label>
			  </div>
			</div>
		</div>
		<!-- end of card -->
		<div id="childu_main">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" style="background:
			url('2.jpg')center / cover;">
			  <div class="mdl-card__title mdl-card--expand">
				<h2 class="mdl-card__title-text"><?php echo $h[1];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $ddetails[1]; ?>
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
				  <input type="radio" id="option-2" class="mdl-radio__button" name="optionsdh2" value="2">
				  <span class="mdl-radio__label">Pick Me!</span>
				</label>
			  </div>
			</div>
		</div>
		<!-- end of second card-->
		<div id="childu_main" style="margin-right: auto;">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" style="background:
			url('3.jpg')center / cover;">
			  <div class="mdl-card__title mdl-card--expand">
				<h2 class="mdl-card__title-text"><?php echo $h[2];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $ddetails[2]; ?>
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
				<form method="POST" action="vote.php">
				  <input type="radio" id="option-4" class="mdl-radio__button" name="optionsdh4" value="4">
				</form>
				  <span class="mdl-radio__label">Pick Me!</span>
				</label>
			  </div>
			</div>
		<div id="dbtn">
		<button class="mdl-shadow--16dp mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" onclick="tab2();">
			<img src="icons/forward.png"></img>
		</button>
		</div>
		</div>
		
		<!-- end of cards -->
	</div>	
	<!-- Head Cards -->
		<div id="parentu_head" style="display: none; justify-content: space-between;">
		<div id="childu_main">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" style="background:
			url('4.jpg')center / cover;">
			  <div class="mdl-card__title mdl-card--expand">
				<h2 class="mdl-card__title-text"><?php echo $h[3];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $hdetails[0]; ?>
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
				  <input type="radio" id="option-5" class="mdl-radio__button" name="optionsh" value="5">
				  <span class="mdl-radio__label">Pick Me!</span>
				</label>
			  </div>
			</div>
		</div>
		<!-- end of card -->
		<div id="childu_main">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" style="background:
			url('5.jpg')center / cover;">
			  <div class="mdl-card__title mdl-card--expand">
				<h2 class="mdl-card__title-text"><?php echo $h[4];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $hdetails[1]; ?>
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-6">
				  <input type="radio" id="option-6" class="mdl-radio__button" name="optionsh" value="6">
				  <span class="mdl-radio__label">Pick Me!</span>
				</label>
			  </div>
			</div>
		</div>
		<!-- end of second card-->
		<div id="childu_main" style="margin-right: auto;">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" style="background:
			url('6.jpg')center / cover;">
			  <div class="mdl-card__title mdl-card--expand">
				<h2 class="mdl-card__title-text"><?php echo $h[5];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $hdetails[2]; ?>
			  </div>
			  <div class="mdl-card__actions mdl-card--border">
				<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
				<form method="POST" action="vote.php">
				  <input type="radio" id="option-4" class="mdl-radio__button" name="optionsdh4" value="4">
				</form>
				  <span class="mdl-radio__label">Pick Me!</span>
				</label>
			  </div>
			</div>
		<div id="dbtn">
		<button class="mdl-shadow--16dp mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" onclick="tab3();">
			<img src="icons/forward.png"></img>
		</button>
		</div>
		</div>
		<!-- end of cards -->
	</div>
	<!-- confirmation cards -->
	<div id="confirm_candy" style="display: none;">
		<div id="childu_main">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" style="background:
			url(<?php echo $dpic ?>)center / cover;">
			  <div class="mdl-card__title mdl-card--expand">
				<h2 class="mdl-card__title-text"><?php echo $_SESSION['dhead'];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $ddetails; ?>
			  </div>
			  </div>
			</div>
		<div id="childu_main" style="margin-right: auto;">
			<div class="demo-card-square mdl-card mdl-shadow--8dp" style="background:
			url(<?php echo $hpic ?>)center / cover;">
			  <div class="mdl-card__title mdl-card--expand">
				<h2 class="mdl-card__title-text"><?php echo $_SESSION['head'];?></h2>
			  </div>
			  <div class="mdl-card__supporting-text">
				<?php echo $hdetails; ?>
			  </div>
			  </div>
			</div>
		<div id="dbtn">
		<button class="mdl-shadow--16dp mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" onclick="showSnax();">
		  <img src="icons/done_all.png"></img>
		</button>
		</div>
	</div>
	</body>
		<div id="snackbarz" class="mdl-js-snackbar mdl-snackbar">
		  <div class="mdl-snackbar__text"></div>
		  <button class="mdl-snackbar__action" type="button"></button>
		</div>
</html>
