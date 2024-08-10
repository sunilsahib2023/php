<html>

<body BGcOLOR="CYAN">

<?php
echo "WELCOME TO PHP";

$r =15;
$c = 5;
$a=1;
echo "<Table border='3'>";

while($a<=$r)
{
echo "<tr>";
    for($i=0;$i<=15;$i++)
      {
$c=rand(40,1000000);

             echo "<td style='background-color:$c' onClick='document.bgColor=$c'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";

      }

echo "</tr>";
$a++;

}

echo "</table>";
 



?>


</body>

</html>
