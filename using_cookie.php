<html>
<body bgColor='cyan'>

<?php
print_r($_COOKIE);


if($_COOKIE["user_name"])
{
echo "<h1>Cookies Found<b><br>";
//echo  $_COOKIE["user_name"]."</h1>";
}


echo"<table><form name='data' method='post' action='openhome.php'>";
echo "<tr><td>User Name</td><td><input type='text' name='uname' value=".$_COOKIE['user_name']."><td></tr>";
echo "<tr><td>Password</td><td><input type='password' name='upass'  value=".$_COOKIE['user_password']."><td><td><input  type='checkbox'  name=
'store'  >Want to rember your password<td><td></td></td></tr>";
echo "<tr><td><input type='submit' value='send'>";

echo "</table>";


?>










</body>



</html>
