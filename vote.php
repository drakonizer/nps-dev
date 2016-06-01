<?php
session_start();

if(isset($_POST['optionsdh'])
	$dh=$_POST['optionsdh'];
	
$con = mysqli_connect("192.168.1.57","root","somethingsensibal","dhead","3307");

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
	$_SESSION['ddetails']=$row['details'];
	$_SESSION['dpic']="picture/"+$row['sno'];
}

if(isset('optionsh')
{
	$dh='optionsdh';
	$con = mysqli_connect("192.168.1.57","root","somethingsensibal","dhead","3307");

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
	$_SESSION['hdetails']=$row['details'];
	$_SESSION['hpic']="picture/"+$row['sno']
}

?>