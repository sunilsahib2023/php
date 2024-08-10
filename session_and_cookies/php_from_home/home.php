<html>

<body>
<h1>Home Page</h1>
<?php
SESSION_START();
echo "<h1>Session Started</h1>";
echo "<p style='display:inline;background-color:yellow;font-size:20;color:red'>Hi ",$_SESSION['uname']."</p><br><br>";
$t =$_SESSION['backcolor'];

echo "<body style='background-color:$t'>";




?>


</body>
</html>
