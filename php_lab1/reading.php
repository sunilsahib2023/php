<html >
<body bgColor="cyan">
<?php
echo  "<h1>Different  Method  of reading a file in php</h1> ";
/*
print  "<h1>Reading a Complete File </h1>";
//$h = fopen("data.txt","r");

$f = file_get_contents("data.txt");

echo "<form><textarea rows='10' cols='40'>$f</textarea></form>";
echo $f;
*/
/*
echo "<h1>Reading File Line by Line </h1>";
$h2 = fopen("data.txt","r");

while(!feof($h2))
{
$l = fgets($h2);
echo $l;
}
fclose($h2);
*/

print "<h1>Reading File Charecter by Charecter</h1>" ;

$h3 = fopen("data.txt","r");

$s = fgets($h3,64);
echo $s;
echo "<br>";
$s = fgets($h3,64);
echo $s;
echo "<br>";
fclose($h3);
?>
<form>
<text 
</fomr>
</body>
</html>
