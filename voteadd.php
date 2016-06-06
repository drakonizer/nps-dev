<?php
session_start();
$con=mysqli_connect("192.168.1.57","NPS57","","dhead","3307");
if (mysqli_connect_errno())
{
    echo "Database could not be found.".mysqli_connect_error();
}
$sel_user ="select * from dhead where class='$_SESSION[class]'";
$run_user = mysqli_query($con, $sel_user);
$check_user = mysqli_num_rows($run_user);
if($check_user>0)

{
 $row = mysqli_fetch_assoc($run_user);
 $vot =$row[$_SESSION['name'][$_SESSION['d']]]+1;
 $vot1=$row[$_SESSION['name'][$_SESSION['h']]]+1;
 $lol=$_SESSION['name'][$_SESSION['d']];
 $lol1=$_SESSION['name'][$_SESSION['h']];
 
    $sql1="UPDATE dhead SET `$lol`=$vot WHERE class='$_SESSION[class]'";
	$sql="UPDATE dhead SET `$lol1`=$vot1 WHERE class='$_SESSION[class]'";
	 
	 
	 
	 
	 
	 $sel_user = "select * from mdb where name='$lol'";
$run_user = mysqli_query($con, $sel_user);
$check_user = mysqli_num_rows($run_user);
if($check_user>0)
{
$row = mysqli_fetch_assoc($run_user);
 $vot=$row['votes']+1;
 
  $sql2="UPDATE mdb SET votes=$vot,total=total+1 WHERE name='$lol'";
	
}

$sel_user = "select * from mdb where name='$lol1'";
$run_user = mysqli_query($con, $sel_user);
$check_user = mysqli_num_rows($run_user);
if($check_user>0)
{
$row = mysqli_fetch_assoc($run_user);
 $vot=$row['votes']+1;
 
  $sql3="UPDATE mdb SET votes=$vot,total=total+1 WHERE name='$lol1'";
	
}

	if(mysqli_query($con, $sql))
	{
		if(mysqli_query($con, $sql1))
		{
			if(mysqli_query($con, $sql2))
			{
				if(mysqli_query($con, $sql3))
				{
				header("Location: pass-page.php");
				}
			}
		}
	}
}

session_destroy();
?> 