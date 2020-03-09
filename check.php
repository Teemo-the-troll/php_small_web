<?php 
session_start();
 if (($_POST["name"] === $_SESSION["name"]) && ($_POST["pass"] === $_SESSION["pass"])){
    $_SESSION["is_logged"] = true;
    header( "Location: /lorem" );
    die();
 } else echo "wrong pass or name <a href = /login>back to the login</a>"

?>