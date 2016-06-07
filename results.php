<?php
error_reporting(0);
ini_set('display_errors', 'Off');
$con=mysqli_connect("192.168.1.57","NPS57","","dhead","3307");
if (mysqli_connect_errno())
{
    echo "Database could not be found.".mysqli_connect_error();
}
for($i=0;$i<6;$i++)
    {
        $sel_user = "select * from mdb where sno='$i'";
        $run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        $row = mysqli_fetch_assoc($run_user);
       if($check_user>0)
        {
            $name[$i]=$row['name'];
			
			for($j=0;$j<12;$j++)
			{
			$sel_user = "select * from dhead where sno='$j'";
			$run_user = mysqli_query($con, $sel_user);
        $check_user = mysqli_num_rows($run_user);
        $row = mysqli_fetch_assoc($run_user);
		if($check_user>0)
		{
			$class[$i][$j]=$row[$name[$i]];
			$total[$i]+=$class[$i][$j];
			
		}
		    }
        }
		$_SESSION['loggedin']=0;
		
	}
?>