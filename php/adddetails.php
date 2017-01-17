<?php
error_reporting(0);
ini_set('display_errors', 'Off');
session_start();
	
    if(empty($_POST['name']))
    {
        header("Location: ../html/details.php");
    }
    else if(empty($_POST['lastname']))
    {
        header("Location: ../html/details.php");
    }
    else if(empty($_POST['details']))
    {
        header("Location: ../html/details.php");
    }
    /*else
    {
        $target_dir = "picture/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false)
        {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } 
		else
        {
            echo "File is not an image.";
            $uploadOk = 0;
        }
        if (file_exists($target_file))
        {
            echo "Sorry, image already exists.";
            $uploadOk = 0;
        }
        if ($_FILES["fileToUpload"]["size"] > 500000)
        {
            echo "Sorry, your image is too large.";
            $uploadOk = 0;
        }
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" )
        {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        if ($uploadOk == 0)
        {
            echo "Sorry, your image was not uploaded.";
        }
		else
        {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
            {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } 
			else
            {
                echo "Sorry, there was an error uploading your image.";
            }
        }}*/
        $name=$_POST['name']." ".$_POST['lastname'];
        $details=$_POST['details'];
        $con=mysqli_connect("192.168.1.57","NPS57","","dhead","3307");
        if (mysqli_connect_errno())
        {
            echo "Database could not be found.". mysqli_connect_error();
        }
        $sql = "INSERT INTO mdb (name,details,total,votes) VALUES ('$name','$details',0,0)";
		$_SESSION['shoot']+=1;
		
		$sql1= "ALTER TABLE `dhead` ADD COLUMN `$name` INT DEFAULT 0 AFTER pass ";
        if(mysqli_query($con, $sql))
        {	
		if(mysqli_query($con, $sql1)){
            echo "Student added to the list of candidates";
			header("Location: details.php");
		}}
        else
        {
            echo "for some stupid reason the query has failed.";
        }
    
?> 