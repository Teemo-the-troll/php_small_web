<?php
$usrArray = json_decode(file_get_contents("users.txt"), true);
$username = $_POST["name"]; 
$password = substr(crypt($_POST["pass"], '$6$HelloGeneralKeno$'), 20);
if (!array_key_exists($username,$usrArray)) {
    $user = array($username => $password);
    echo var_dump($user);
    $users = fopen("users.txt", "w") or die("unable to write/create file");   
    fwrite($users, json_encode(array_merge($usrArray, $user)));
    fclose($users);
} else
    echo "this username has already been taken, choose another username";
