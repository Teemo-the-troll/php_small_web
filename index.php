<?php
session_start();
$url =  $_SERVER['REQUEST_URI'];
$validURLs = array(
    "login" => "login.php",
    "register" => "register.php",
    "logout" => "logout.php",
    "check" => "check.php",
    "lorem" => "lorem.php",
   // "index" => "index.php",
    "saveUser" => "saveUser.php"
);

$url = substr($url, 1);
if ($url === "") {
    require 'login.php';
    die();
} else if (array_key_exists($url, $validURLs)) {
    require $validURLs[$url];  
    die();
} else 
    require 'noPageFound.php';
    die();
?>
