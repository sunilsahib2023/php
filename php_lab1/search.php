<html>
<body bgColor="Yellow">

<h1>Information Found is as Follow</h1>
<?php
include("header.php");
$c = mysql_connect("localhost","root","");

  if(!$c)
      {
       die("Could  not be open the connection ".mysql_error());
      }

mysql_select_db("sk",$c);

$result = mysql_query("select * from tataoils");

echo "<table border='2' bgColor='orange'>";


echo "<tr style='text-align:center' bgColor='white'>";
echo "<td>CODE</td>";
echo "<td>NAME</td>";
echo "<td>AGE</td>";
echo "<td>CITY</td>";
echo "<td>SALARY</td>";

echo "</tr>";



while($row = mysql_fetch_array($result))
      {
/*   
if($_GET['mycode']=='0')
{    
echo $row['code']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ".$row['Name']."&nbsp;&nbsp;&nbsp".$row['age']."&nbsp;&nbsp;&nbsp;".$row['salary']."&nbsp;&nbsp;&nbsp".$row['city'];
        echo "<br/>"; 
}
*/


if(($row['code'] == $_GET["mycode"])||($_GET['mycode']=='0'))
{ 
echo"<tr>";
echo "<td>".$row['code']."</td>";
echo "<td>".$row['Name']."</td>";
echo "<td>".$row['age']."</td>";
echo "<td>".$row['city']."</td>";
echo "<td>".$row['salary']."</td>";
echo"</tr>";
}


   }
echo "</table>";

?>



</body>
</html>
