<?php 
declare(strict_types = 1);
require_once "User.php";
require_once 'userManager.php';
if ($_SESSION["is_logged"] === true){
   header( "Location: /lorem" );
   echo $_SESSION["is_logged"] ? "true" : "false" ; 
   die();
}
?>

<html>
<head>
</head>
<body>

<form method="post" >
Name: <input type="text" name="name"><br>
Password: <input type="password" name="pass"><br>
<input type="submit">
</form>
<p>Not yet an user?</p> <a href = /register>click here!</a>

<?php 
if (!is_null($_POST["name"]) && !is_null($_POST["pass"]) ) {
   (new UserManager)->loginUser($_POST["name"], $_POST["pass"]);
}

?>


</body>
