<?php
session_start();
error_reporting(0);
ini_set('display_errors', 'Off');
$_SESSION['loggedin']=0;

if (isset($_POST['submit']))
{
    if (empty($_POST['password']))
    {
        $_SESSION['error'] = "Password is invalid";
        header("Location: pass-page.php");
    }
    $con=mysqli_connect("192.168.1.57","NPS57","","dhead","3307");
    if (mysqli_connect_errno())
    {
        echo "Database could not be found.". mysqli_connect_error();
    }
    else
    {
        $id =mysqli_real_escape_string($con,$_POST['password']);
        $sel_user = "select * from dhead where pass='$id'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        if($check_user>0)
        {
		$row = mysqli_fetch_assoc($run_user);
            $_SESSION['login']=true;
			$_SESSION['class']=$row['class'];
			$_SESSION['selpage']=$page;
			$_SESSION['loggedin']=1;
            if($page==1 && $_SESSION['class']!="teacher" && $_SESSION['class']!="adddetails" && $_SESSION['class']!="viewresult")
            {
                header("Location: index.php");
            }
            else if($page==2 && $_SESSION['class']=="teacher")
            {
                header("Location: index.php");
            }
            else if($page==3 && $_SESSION['class']=="adddetails")
            {
				header("Location: details.php");
            }
            else if ($page==4 && $_SESSION['class']=="viewresult")
            {
                header("Location: viewdetails.php");
            }
            else
            {
				session_destroy();
				header("Refresh:0");
            }
        }
    }
}
?> 