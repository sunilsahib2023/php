<html>
<body>
<?php
session_start();
echo "Welcome :! Session started<br>";
$_SESSION['backcolor']='green';

echo "<a href='product.php'>Product</a>";

echo '<br /><a href="product.php?' . SID . '">page 2</a>'


?>



</body>



</html>
