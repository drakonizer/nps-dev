<?php

$err="mysqli connect error";
$qerr="query failed";

session_start();

$_SESSION['class']="teacher";
$_SESSION['loggedinornotunoob']=0;

mysqli_connect("","","","");

if(mysqli_connect_error())
{
	echo $err;
}

$id=$_POST['uniqueid'];
$row=mysqli_num_rows("WHERE uniqueid==$id");

if($row)
{
	$head=mysqli_fetch_field("num WHERE uniqueid==$id");
	if()
	switch($head)
	{
	case 0:
		{
			$_SESSION['loggedinornotunoob']=3;
			header("thepotatoman.php");	
		}
		
	case 4:
		{
			fun.getfun();
		}

	default:
		{
			echo $qerr;		}
	 
}
?>
