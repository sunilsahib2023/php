<html>


<script>
window.document.reload();
</script>

<?php

setcookie("back",$_POST["mycolor"],time()+9800);

echo "<body bgColor='$_COOKIE[back]'>";

echo "cookies is setted<br>";
echo "<a href='cookies.php'>back</a>";
echo "<h1>Cookies available...<h1>";
echo "Following cookies are stored in this system<br>";
print_r($_COOKIE);
echo "<br>";

echo "Value of Cookie back = ";
echo $_COOKIE["back"];


?>


</body>



</html>
