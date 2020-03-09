<?php
session_start();

if (($_SESSION["is_logged"] === true)) {
    require 'lorem.php';
} else {
    $url =  $_SERVER['REQUEST_URI'];
}

$validURLs = array(
    "login" => "login.php",
    "register" => "register.php",
    "logout" => "logout.php",
    "check" => "check.php",
    "lorem" => "lorem.php",
    "index" => "index.php",
    "saveUser" => "saveUser.php"
);

$url = substr($url, 1);


if (array_key_exists($url, $validURLs)) {
    require $validURLs[$url];
} else 
    require 'noPageFound.php';

?>
<html>

<head>
</head>

<body>


</body>

</html>