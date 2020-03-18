<?php 
if ($_SESSION["is_logged"] != true){
    header( "Location: /login" );
    die();
}
?>

<html>
<body>
<pre>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic consequatur,
itaque nulla iure accusantium perspiciatis, nemo iusto iste veritatis omnis neque rem aliquam sit fugiat.
Adipisci tempora voluptatibus labore qui?
</pre>

<a href = /logout.php>logout</a>
</body>
</html>