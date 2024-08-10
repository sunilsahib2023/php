<html>
<H1>Using $REQUEST[" "]</h1>
<body bgColor="silver">
<?php
include("header.php");
$f=0;
$c = mysql_connect("localhost","root","");

 if(!$c)
      {
        die("colud not coonected to server...".mysql_error());
       }

mysql_select_db("sk",$c);

$r = mysql_query("select * from tataoils");

while($i = mysql_fetch_array($r))
{

//echo $i[2];+"<br>";

//echo $_REQUEST['mcode']."<br>";

//echo $i["code"];




if($i["code"] == $_REQUEST['mcode'])
{
$m =   "<h1 style='color:red'> The Age of ".$i["name"]."   is = ".$i["age"];
//$m+=  "<h2>The name  = ".$i["name"];

break;
}
else
{
  $m= "Code not found";
  
  }

}

echo $m;

?>


</body>

</html>
