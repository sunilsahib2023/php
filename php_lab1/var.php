<html>

<body bgColor="lightgreen">
<pre>
<?php
include("header.php");
echo "<h1>VARIABLE</h1>";
$ename="Raj Kumar";
$age=12;

echo "Name = ",$ename,"\nAge is = ",$age;
?>
<?php
echo "<h1>Concatenation operator is = . </h1>";
print "Name ".$ename." Age = ".$age;

print "Finding a charecter \n";
echo "Position of world in this string is = ".strpos("Welcome the world of computer","world");

echo "\nLength of ".$ename." =  ".strlen($ename);


?>


</pre>


</body>


<html>
