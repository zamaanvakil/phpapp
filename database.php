<?php

	$ip = "localhost";
	$user = "root";
	$password = "";

	$db = "swlab";

	$conn = new mysqli($ip,$user,$password,$db) or die ("You are not connected");
		echo "You are connected.";

?>