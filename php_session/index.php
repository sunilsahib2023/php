<h1>Home Page</h1>
<?php
session_start();
$_SESSION['ucolor'] ="green";
$_SESSION['u'] = $_POST['user'];

$id  =  $_SESSION['sid'];

echo "<h1>Your Seesion Id =".$id."<h1>";
echo "<h1>Welcome ".$_POST['user']."</h1>";
$c = "green";
echo "<h1>Your Favourite Color which a $c will be applied for next Page also..</h1>";

echo "<h1><a href='nextpage.php'>Next</a></h1>"


?>
