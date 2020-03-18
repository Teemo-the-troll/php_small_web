<?php 
session_start();
if ($_SESSION["is_logged"] === true){
   header( "Location: /lorem.php" );
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

$usrArray = json_decode(file_get_contents("users.txt"), true);
$username = $_POST["name"]; 
$password = substr(crypt($_POST["pass"], '$6$HelloGeneralKeno$'), 20);
if (array_key_exists($username,$usrArray)){
   if ($usrArray[$username] === $password) {
      $_SESSION["is_logged"] = true;
      $_SESSION["userlogged"] = $username;
      header( "Location: /lorem" );
   } else echo "wrong username or password, try again";

} else echo "wrong username or password, try again";
?>


</body>
