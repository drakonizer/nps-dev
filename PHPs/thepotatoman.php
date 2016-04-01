<?php
$check=$_SESSION['loggedinornotunoob'];

if($_SESSION['loggedinornotunoob']==0)
{
	header("home.html");
}


else if([loggedinornotunoob]==1)
{
	$_SESSION['loggedinornotunoob']=0;
	header("index.php");	
}

else if()

switch($_SESSION['loggedinornotunoob'])
{
	case 0:
	{
	header("home.html");
	}
	
	case 1:
	{
	$_SESSION['loggedinornotunoob']=0;
	header("index.php");
	}
	
	case 2:
	{
	$_SESSION['loggedinornotunoob']=0;
	header("details.php");
	}
	
	case 3:
	{
	$_SESSION['loggedinornotunoob']=0;
	header("view.php");
	}
}
?>