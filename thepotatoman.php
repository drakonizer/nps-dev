<?php

if($_SESSION['loggedin']==1)
{
	$_SESSION['loggedin']=0;
}

else
{
	echo "Dont try anything sneaky noob";
}

?>