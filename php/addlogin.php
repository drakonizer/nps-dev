<?php
session_start();
error_reporting(0);
$_SESSION['loggedin']=0;
$error="";
if (isset($_POST['submit']))
{
    if (empty($_POST['uniqueid']))
    {
        $error = "Uniqueid for class is not entered noob";
    }
	else
    {
        $con=mysqli_connect("192.168.1.57","NPS57","","dhead","3307");
        if (mysqli_connect_errno())
        {
            echo "Database could not be found.". mysqli_connect_error();
        }
        $id = mysqli_real_escape_string($con,$_POST['uniqueid']);
        $sel_user = "select * from dhead where addpassword='$id'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        if($check_user>0)
        {
            $row = mysqli_fetch_assoc($sel_user);
            $_SESSION['loggedin']=1;
            header("Location: adddetail.php");
        }
        else
        {
            header("../html/home.php");
        }
	}
}
?> 