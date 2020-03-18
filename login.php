<?php 
session_start();
if ($_SESSION["is_logged"] === true or $_SESSION["is_logged"] === null){
   header( "Location: /lorem" );
   die();
}
?>

<html>
<head>
</head>
<body>

<form action= "check" method="post" >
Name: <input type="text" name="name"><br>
Password: <input type="password" name="pass"><br>
<input type="submit">
</form>
<p>Not yet an user?</p> <a href = /register>click here!</a>


</body>
