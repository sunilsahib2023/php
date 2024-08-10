<html>
    <head>

</head>
    
    
</html>


<?php
session_start();
echo "<h1>Working  post  and get with Session in PHP </h1>";

$u = $_POST["uname"];
$p = $_POST["upass"];

if(($p == "abc")&&($u=="Amit")||($p == "abc")&&($u=="Ravi")||($p == "abc")&&($u=="Anil"))
 {
 echo "<h1 style='color:green'>Valid user<br/><a href='mychat/filehandling1.php'>Click to Conti...</a> </h1> ";  

header('Location:filehandling1.php');

// Declaring Session Variable
$_SESSION["cuser"] = $u;
$_SESSION["cuserpass"] = $p;
}
else
{
echo "<h1 style='color:red'>Not a Valid user </h1>";
echo "<a href='login.html'><h1> Login Again </h1></a>";
}

?>
