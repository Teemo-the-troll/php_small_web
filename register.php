<?php 
session_start();
?>

<html>
<head>
</head>
<body> 


<form method="post">
    Name: <input type="text" name="name"><br>
    Password: <input type="text" name="pass"><br>
    <input type="submit">
</form>
<p>Already an user?</p> <a href = /login.php> click here!</a>
<?php

$_SESSION["name"] = $_POST["name"]; 
$_SESSION["pass"] = $_POST["pass"];
 
?>


</body>




</html>