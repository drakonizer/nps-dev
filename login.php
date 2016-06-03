<?php

session_start();
$page=1;

$_SESSION['loggedin']=0;
if (isset($_POST['submit'])) 
{
if (empty($_POST['password'])) {

$_SESSION['error'] = "Password is invalid";
header("Location: pass-page.php");
}

$con=mysqli_connect("192.168.1.57","NPS57","","dhead","3307");


if (mysqli_connect_errno())
{

echo "Database could not be found.". mysqli_connect_error();
}
else{

$id =mysqli_real_escape_string($con,$_POST['password']);

$sel_user = "select * from dhead where pass='$id'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$_SESSION['login']=true;




if($page==1)

{
header("Location: index.php");
}
else if($page==2)
{
header("Location: details.php");
}

else if($page==3)
{
header("Location: index.php");
}

else if($page==4)
{
header("Location: viewdetails.php");
}

else 
{

	header("Location: home.php");

}}}}
?>