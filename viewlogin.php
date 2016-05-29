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
	$con = mysqli_connect("","","","");

if (mysqli_connect_errno())

{

echo "Database could not be found.". mysqli_connect_error();

}

$id = mysqli_real_escape_string($con,$_POST['uniqueid']);

$sel_user = "select * from Dhead where viewpassword='$id'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$row = mysqli_fetch_assoc($sel_user);

$_SESSION['loggedin']=1;

header("Location: view.php");

}

else 
{

	header("home.php");

}
?>