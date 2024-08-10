<html>
<body>
<?php

SESSION_START();
echo "<h1>Session Started</h1>";

$_SESSION['uname']= $_POST['n'];
$_SESSION['backcolor']= $_POST['b'];
$t =$_SESSION['backcolor'];

echo "<body style='background-color:$t'>";
echo "<p style='display:inline;background-color:yellow;font-size:20;color:red'>Hi ",$_SESSION['uname']."</p><br><br>";

echo "<a href='home.php'>Home</a>&nbsp;&nbsp;&nbsp;";
echo "<a href='Product.php'>Product</a>&nbsp;&nbsp;&nbsp;";


?>


</body>



</html>
