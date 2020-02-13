<?php
session_start();
$_SESSION["name"] = null;
$_SESSION["pass"] = null;


?>
<html>
<head>
</head>
<body>
<?php


    if (($_SESSION["is_logged"] === true)){
        header( "Location: /lorem.php" );
        die();
    } else {
        header( "Location: /register.php" );
        die();
    }
   
       
    
?>

</body>
</html>