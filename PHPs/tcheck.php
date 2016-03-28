<?php

$err="mysqli connect error";
$qerr="query failed";

session_start();

$SESSION['class']="teacher";

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
	default:
		{
			echo $qerr;
		}
	}
}
?>
