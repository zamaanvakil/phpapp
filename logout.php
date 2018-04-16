<?php
$ip = "18.218.127.164";
session_start();
session_destroy();
header("Location: http://".$ip."/swlab/index.php");
?>
