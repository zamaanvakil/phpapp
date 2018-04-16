<?php
$ip = "localhost";
session_start();
session_destroy();
header("Location: http://".$ip."/swlab/index.php");
?>