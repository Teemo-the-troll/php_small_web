<?php
session_start();
$url =  $_SERVER['REQUEST_URI'];
$validURLs = array(
    "login" => "login.php",
    "register" => "register.php",
    "logout" => "logout.php",
    "lorem" => "lorem.php",
    "" => "login.php"
);

$url = substr($url, 1);
if (array_key_exists($url, $validURLs)) {
    require $validURLs[$url];  
    die();
} else 
    require 'noPageFound.php';
    die();
