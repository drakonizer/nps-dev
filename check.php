<?php
include 'fun.php';
$err="mysqli connect error";
$qerr="query failed";

session_start();
$SESSION['class']="";
mysqli_connect("","","","");

if(mysqli_connect_error())
{
	echo $err;
}

$id=$POST['uniqueid'];
$row=mysqli_num_rows("WHERE uniqueid==$id");

if($row)
{
	$head=mysqli_fetch_field("num WHERE uniqueid==$id");
	
	$SESSION['class']=mysqli_fetch_field("$SESSION['class'] WHERE uniqueid==$id");
	if()
	switch($head)
	{
	case 0:
		{
			header("vote.html");
		}
	case 1:
		{
			header("add.html");	
		}
	
	case 4:
		{
			fun.getfun();
		}
	default:
		{
			echo $qerr;
		}
	}
}
?>