<?php 
session_start();
$_SESSION["is_logged"] = false;
header( "Location: /login.php" );
die();

?>


