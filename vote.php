<?php
session_start();

if(isset($_POST['optionsdh'])
{
	$dh=$_POST['optionsdh'];
	$con = mysqli_connect("","","","mdb");

if (mysqli_connect_errno())

{

echo "Database could not be found.". mysqli_connect_error();

}

$sel_user = "select * from mdb where sno='$dh'";
$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);
$row = mysqli_fetch_assoc($sel_user);
if($check_user>0)
{
	$_SESSION['dhead']=$row['name'];
	$_SESSION['dnum']=$row['sno'];
	$_SESSION['dvotes']=$row['oats'];
}

if(isset($_POST['optionsh'])
{
	$dh=$_POST['optionsdh'];
	$con = mysqli_connect("","","","");

if (mysqli_connect_errno())

{

echo "Database could not be found.". mysqli_connect_error();

}

$sel_user = "select * from mdb where sno='$dh'";
$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);
$row = mysqli_fetch_assoc($sel_user);
if($check_user>0)
{
	$_SESSION['head']=$row['name'];
	$_SESSION['hnum']=$row['sno'];
	$_SESSION['votes']=$row['oats'];
}
?>