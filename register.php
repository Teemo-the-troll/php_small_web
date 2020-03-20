<?php
declare(strict_types=1);
include_once('User.php');
include_once('userManager.php');
?>

<html>
    <head>
    </head>
    <body>
        <form method="post">
            Name: <input type="text" name="name"><br>
            Password: <input type="password" name="pass"><br>
            <input type="submit">
        </form>
        <p>Already an user? <a href= /login> click here!</a></p> 
<?php
    
    if (!is_null($_POST["name"]) && !is_null($_POST["pass"])) {
        saveUser($_POST["pass"], $_POST["name"]);
        } 
        ?>
    </body> 
</html>