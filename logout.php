<?php 
echo $_SESSION["is_logged"];
$_SESSION["is_logged"] = false;
echo $_SESSION["is_logged"];  
session_unset();
echo session_destroy();
// header( "Location: /login" );
die();
?>


