<?php
$con=mysqli_connect("192.168.1.57","root","somethingsensibal","dhead","3307");

if (mysqli_connect_errno())

{

echo "Database could not be found.". mysqli_connect_error();

}

$sel_user = "select * from dhead where class='$_SESSION['class']'";

$run_user = mysqli_query($con, $sel_user);

$check_user = mysqli_num_rows($run_user);

if($check_user>0){

$row = mysqli_fetch_assoc($sel_user);
$hname= $row[$_SESSION['head']]+1;
$dname = $row[$_SESSION['dhead']]+1;

}

$_SESSION['votes']++;
$_SESSION['dvotes']++;

$sql = "UPDATE mdb SET oats=$_SESSION['votes'] WHERE name='$_SESSION['head']'";
$sqld = "UPDATE mdb SET oats=$_SESSION['dvotes'] WHERE name='$_SESSION['dhead']'";
$sql1="UPDATE Dhead SET $_SESSION['head']=$hname WHERE class='$_SESSION['class']'";
$sql1d="UPDATE Dhead SET $_SESSION['dhead']=$dname WHERE class='$_SESSION['class']'";

header("Location: destroy.php");
?>