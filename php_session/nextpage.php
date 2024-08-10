<?php
session_start();

echo "<h1>Session id = ".$_SESSION['sid']."</h1>";
echo "<h1>Favourite Coloe  = ".$_SESSION['ucolor']."</h1>";
echo "<h1>Hello ".$_SESSION['u']."</h1>";
$c = $_SESSION['ucolor'];
echo "<body  style='background:$c'>";
?>