<?php

$err="mysqli connect error";
$qerr="query failed";

session_start();

$SESSION['class']="teacher";
$SESSION['loggedinornotunoob']=0;

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
			$SESSION['loggedinornotunoob']=3;
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
