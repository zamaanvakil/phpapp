<?php
	include 'database.php';

	session_start();
	$email = $_SESSION['email'];

	$name = $_POST['name'];
	$branch = $_POST['branch'];
	$mobile = $_POST['mobile'];

	$sql = "UPDATE user_details SET name='".$name."' , branch='".$branch."' , mobile = '".$mobile."' WHERE email='".$email."' ";
	$fetch = mysqli_query($conn,$sql);

	$ip = "localhost";
	header("Location: http://".$ip."/swlab/home.php");
?>


