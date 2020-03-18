<?php 

$usrArray = json_decode(file_get_contents("users.txt"), true);
$username = $_POST["name"]; 
$password = substr(crypt($_POST["pass"], '$6$HelloGeneralKeno$'), 20);
if (array_key_exists($username,$usrArray)){
   if ($usrArray[$username] === $password) {
      $_SESSION["is_logged"] = true;
      header( "Location: /lorem" );
   } else echo "wrong username or password, try again";

} else echo "wrong username or password, try again";
