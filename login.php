<?php

session_start();
$_SESSION['loggedin']=0;
$error="";
if (isset($_POST['submit'])) 
{
if (empty($_POST['password'])) 
{
$error = "Password is not entered noob";
}

{
	$con=mysqli_connect("192.168.1.57","root","somethingsensibal","dhead","3307");

if (mysqli_connect_errno())


{

echo "Database could not be found.". mysqli_connect_error();
}


$id = mysqli_real_escape_string($con,$_POST['uniqueid']);

$sel_user = "select * from Dhead where password='$id'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$row = mysqli_fetch_assoc($sel_user);

$_SESSION['class']=$row['class'];
$_SESSION['loggedin']=1;

if($page==1)

{header("Location: vote.php");}
else if($page==2)
{
header("Location: details.php");

}

else if($page==3)

{
header("Location: vote.php");
}

else if($page==4)
{
header("Location: viewdetails.php");
}

else 
{

	header("home.php");

}
?>