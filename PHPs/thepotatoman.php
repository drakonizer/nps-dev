<?php
$check=$SESSION['loggedinornotunoob'];

if($SESSION['loggedinornotunoob']==0)
{
	header("home.html");
}


else if([loggedinornotunoob]==1)
{
	$SESSION['loggedinornotunoob']=0;
	header("index.php");	
}

else if()

switch($SESSION['loggedinornotunoob'])
{
	case 0:
	{
	header("home.html");
	}
	
	case 1:
	{
	$SESSION['loggedinornotunoob']=0;
	header("index.php");
	}
	
	case 2:
	{
	$SESSION['loggedinornotunoob']=0;
	header("details.php");
	}
	
	case 3:
	{
	$SESSION['loggedinornotunoob']=0;
	header("view.php");
	}
}
?>