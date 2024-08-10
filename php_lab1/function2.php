<html>
<body>
<?php
print "<h1>Using Function </h1>";
function line($w,$h,$c)
{
echo "<div style='float:left;width:$w;height:$h;background-color:$c'></div> ";
}

for($j=0;$j<=6;$j++)
{
	$c=rand(0,1020203);
	line(rand(32,500),40,$c);
                 echo "<br><br><br>";
                 

}







?>



</body>


</html>
