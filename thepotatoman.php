<?php

$con=mysqli_connect("192.168.1.57","root","somethingsensibal","dhead","3307");
$h[6];
$v[16];


if (mysqli_connect_errno())
{

echo "Database could not be found.". mysqli_connect_error();

}

if($_SESSION['loggedin']==1)
{
	$_SESSION['loggedin']=0;
}

else
{
	echo "Dont try anything sneaky noob";
	
	session_destroy();
	secret();
}




for(int $i=0;$i<6;$i++)
{
	$sel_user="select * from mdb where sno='$i'";
	$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);
$row = mysqli_fetch_assoc($sel_user);

if($check_user>1)
{
	$h[$i]=$row['name'];
}
	for(int $j=0;j<14)
	{
		$sel_user="select * from dhead where sno='$j'";
	$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);
$row = mysqli_fetch_assoc($sel_user);

if($check_user>1)
{
	$v[j]=$row['class'];
}

	}
	
}





?>