<?php

	$ip = "18.218.127.164";
	$user = "root";
	$password = "123";

	$db = "swlab";

	$conn = new mysqli($ip,$user,$password,$db) or die ("You are not connected");
		echo "You are connected.";

?>
