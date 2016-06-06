<?php
error_reporting(0);
function dheed()
{
	$con = mysqli_connect("192.168.1.57","NPS57","","dhead","3307");
    for($i=0;$i<3;$i++)
    {
        $sel_user = "select * from mdb where sno='$i'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        $row = mysqli_fetch_assoc($run_user);
        if($check_user>0)
        {
            $_SESSION['name'][$i]=$row['name'];
            $_SESSION['details'][$i]=$row['details'];
            if(isset($_POST['optionsdh']))
            {
                $dh=$_POST['optionsdh'];
                if($i==(int)$dh)
                {
                    $_SESSION['d']=$dh;
                }
            }
        }
    }
}
function head()
{
    $con = mysqli_connect("192.168.1.57","NPS57","","dhead","3307");
    if (mysqli_connect_errno())
    {
        echo "Database could not be found.". mysqli_connect_error();
    }
    for($j=3;$j<6;$j++)
    {
        $sel_user = "select * from mdb where sno='$j'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        $row = mysqli_fetch_assoc($run_user);
        if($check_user>0)
        {
            $_SESSION['name'][$j]=$row['name'];
            $_SESSION['details'][$j]=$row['details'];
            if(isset($_POST['optionsh']))
            {
                $_SESSION['h']=$_POST['optionsh'];
            }
        }
	}
}