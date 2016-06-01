<?php
session_start();

if(isset($_POST['submit'])) 
{
	if(empty($_POST['name'])) 
	{
		header("Location: details.php");
	}
	else if(empty($_POST['class'])) 
	{
		header("Location: details.php");
	}
	else if(empty($_POST['details'])) 
	{
		header("Location: details.php");
	}

	else
	{
		$target_dir = "picture/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);


    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }


if (file_exists($target_file)) {
    echo "Sorry, image already exists.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your image is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your image was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your image.";
    }
}

		
		$name=$_POST['name'];
		$class=$_POST['tagline'];
		$details=$_POST['details'];
		
		$con=mysqli_connect("192.168.1.57","root","somethingsensibal","dhead","3307");

		if (mysqli_connect_errno())

		{

			echo "Database could not be found.". mysqli_connect_error();

		}
		
		$sql = "UPDATE mdb SET name=$name,class=$class,details=$details WHERE name=''";
		
		if(mysqli_query($con, $sql)) 
		{
			echo "Student added to the list of candidates";
		}
		else
		{
			echo "for some stupid reason the query has failed.";
		}
	}
?>