<html>
<head><h1>Using Sesssion in php </h1></head>

<form action = "session1.php" method="post">

set background color :<input type = "text" name="b" value='yellow'>

<input type="submit">

</form>

<body bgColor="<?=$_POST['b'] ?>"  >


<?php 
session_start();
echo "<br>Session started";
$t = $_POST["b"];

$_SESSION['usercolor'] = "green";

echo "<h1>Value of usersession = ".$_SESSION['usercolor']." </h1>";

echo "<br>background color is setted to = ";
echo $t;

echo "<a href='fromsession.php'> Open del</a><br>";

echo "<a href='fromsession2.php'> Open Session</a>";



?>




</body>


</html>
