<html>




<?php
session_start();

echo "Product<br>";

echo "<h1>Your favourite background color =".$_SESSION['backcolor'];
$t = $_SESSION['backcolor'];

echo "<br><a href='page2.php'>Page 2</a>";

?>

<body style ='background-color:<?=$t?>'>






</body>



</html>
