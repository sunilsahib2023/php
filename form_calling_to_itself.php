
<!doctype html>
<html>
<body>
<form method="post" action="data2.php">

<pre>
<h1>No 1                 <input type="text" name="n1"></h1>
<h1>No 2                 <input type="text" name="n2"'></h1>
<h1>Operator = + - * /   <input type="text" name="op"'></h1>



<h1><input type="submit"><input type="reset"></h1>
</form>
</pre>
</body>


</html>

<?php
$a =  $_POST['n1'] ;
$b = $_POST['n2'] ;
$o = $_POST['op'] ;


if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
echo "<h1>No_1   =   ". $_POST['n1']."</h1>";
echo "<h1>No_2    =   ".$_POST['n2']."</h1>";

if($o=="+")
{$r=$a+$b;
echo "<h1>Sum = ".$r."</h1>";
}

if($o=="*")
{$r=$a*$b;
echo "<h1>Multiplication  = ".$r."</h1>";
}

if($o=="/")
{$r=$a/$b;
echo "<h1>Division = ".$r."</h1>";
}

if($o=="-")
{$r=$a-$b;
echo "<h1>subtraction = ".$r."</h1>";
}


}

else
{
echo "<h1>Enter Data</h1>";
}

?>
