<?php

echo "<h1>Thanks For Submiting FeedBack ...</h1>";
echo "<h1><a href='/'>Click For  Home</a></h1>";


$un= $_POST["uname"];

$e=$_POST["uemail"];


$c=  $_POST["comment"];
// Open a File To save Feedback

$d = date("d-M-Y h:i:s a");

$m = "<h2>on Date___ $d Name__ $un whose email is __ $e  had Given the Feedback as Follow</h2><p style='color:green'> $c</p>";

$fname = $un.".html";


$f = fopen($fname,"w") or die ("Could not not open file");
fwrite($f,$m);
fclose($f);




?>
