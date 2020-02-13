<?php 
session_start();
if ($_SESSION["is_logged"]){
   header( "Location: /lorem.php" );
   die();
}
?>

<html>
<head>
</head>
<body>

<form action= "check.php" method="post" >
Name: <input type="text" name="name"><br>
Password: <input type="text" name="pass"><br>
<input type="submit">
</form>
<p>Not yet an user?</p> <a href = /register.php>click here!</a>


</body>
