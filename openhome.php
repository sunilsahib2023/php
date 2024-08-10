<html>
<body bgColor="yellow">
<?php

if($_POST["store"])
  {
   echo "<h1>password is stored in cookie</h1>";
 setcookie("user_name",$_POST["uname"], time()+3600);
 setcookie("user_password",$_POST["upass"], time()+3600);
 }
  else
  {
    echo "<h1>Password is not store</h1>";
    setcookie("user_name","", time()-3600);
    setcookie("user_password","", time()-3600);
  }
?>
</body>


</html>
