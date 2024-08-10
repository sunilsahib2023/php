<?php
echo "<h1>Setting Cookies ";

$uname="uname";
$uid="uid";
$session_id="session_id";
$message ="message";

?>
<!doctype HTML>
<html>
<body>


<?php
// setting cookie
setcookie($uname,"Harri Kumar",time()+(86400*30),"\mycook");
setcookie($uid,"U101010",time()+(86400*30),"\mycook");

setcookie($session_id,"session- No:-10010",time()+(86400*30),"xampp3\htdocs\sunil\mycook");

setcookie("$message","Welcome for one minutes only",time()+5,"\mycook");

?>




</body>
</html>

