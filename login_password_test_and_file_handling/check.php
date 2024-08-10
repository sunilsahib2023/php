<?php
session_start();

$cc = $_POST['user'];
$p = $_POST['pass'];


if(($cc=="Raj")&&($p=="tataabc@123"))
{
echo "<h1 style='color:green'>Valid User:- You are Login successfully....</h1>";

//header('Location:index3.php');

header('Location: http://yahoo.com/');



         
}
else
{
echo "<h1 style='color:red'>InValid User:-  Login Fail....</h1>";
}



?>
