<html>

<body bgColor="cyan">
<h1>Details</h1>
<?php
SESSION_START();
echo "<h1>Hi ".$_SESSION['uname']." welcome to detail</h1>";

echo "<a href='Home.php'>Home</a>";
session_destroy();
$t =$_SESSION['backcolor'];

echo "<body style='background-color:$t'>";
?>


</body>


</html>
