<?php
	include 'database.php';
	$a = $_POST['email'];
	$b = $_POST['password'];

	$ip = "18.218.127.164";

	$sql="SELECT * FROM user where email='".$a."' and password='".$b."' ";
	$fetch = mysqli_query($conn,$sql);
	$i = 0;
	while($row = mysqli_fetch_array($fetch)) {
         $i = $i+1;
   }

   if($i==0){
   	echo "login failed";
   	$message = "incorrect email or password";
   	echo "<script type='text/javascript'>alert('".$message."');</script>";
   	header("Location: http://".$ip."/swlab/index.php");
   }
   else{
   	echo "login successful";
   	session_start();
   	$_SESSION['email'] = $a;
   	header("Location: http://".$ip."/swlab/home.php");
   }
?>
