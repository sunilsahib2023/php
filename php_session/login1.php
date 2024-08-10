<?php
session_start();

$_SESSION["sid"] = rand(10,1000);

echo  "New Session id = ".$_SESSION["sid"]."</br>";

echo" <h1>Working With Session in PHP</h1>";
?>

<form Method="post" action = "index.php">

<label>Login</label><input type="text" name="user" value=""><br/><br/><br/>

<label>Password</label><input type="password" name="upass" value=""><br/><br/><br/>


<input type="submit"><input type="reset">
</form>






</form>
