<?php 
if ($_SESSION["is_logged"] != true){
    require 'login.php';
    die();
}
?>

<html>
<body>
    <p>Hello, <?php $_SESSION["userlogged"]?></p>
<pre>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consequatur,
itaque nulla iure accusantium perspiciatis, nemo iusto iste veritatis omnis neque rem aliquam sit fugiat.
Adipisci tempora voluptatibus labore qui?
</pre>

<a href = /logout>logout</a>
</body>
</html>