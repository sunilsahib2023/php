<html>
<body>

<?php

if(isset($_COOKIE["user_name"]))
{
echo "Welcome  ".$_COOKIE["user_name"]."<br>";
}
else
{
echo "welcome Guest  you can set cookie by filling the above form<br>";
echo " <form action='setcookie.php' method='post'>
Name <input type = 'text' name='uname'  >
<input type='submit' value='set_cookie'>
</form>";
echo $_POST["uname"];
echo "<h1>Setting cookies </h1>";
setcookie("user_name",$_POST["uname"],time()+7200);
}
echo "<input type='button' value='delete cookie' onClick='setcookie('user_name', '*', time()-3600)'>";


echo "<h1>Following Cookies are stored in this system</h1> ";
echo print_r($_COOKIE);

//setcookie('user_name', '', time()-3600);



?>



</body>


</html>
