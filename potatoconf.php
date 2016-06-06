<?php
session_start();
$con = mysqli_connect("192.168.1.57","NPS57","","dhead","3307");
for($i=0;$i<3;$i++)
{
$sel_user = "select * from mdb where sno='$i'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        $row = mysqli_fetch_assoc($run_user);
        if($check_user>0)
		{
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

for($j=3;$j<6;$j++)
{
		$sel_user = "select * from mdb where sno='$j'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        $row = mysqli_fetch_assoc($run_user);
        if($check_user>0)
		{
		if(isset($_POST['optionsh']))
            {
                $h=$_POST['optionsh'];
                if($j==(int)$h)
                {
                    $_SESSION['h']=$h;
                }
            }
		}
}

header("Location: conf.php");

?>