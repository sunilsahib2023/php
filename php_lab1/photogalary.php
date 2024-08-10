<html>

<body>
<h1>Photo galary </h1>
<?php
$c = mysql_connect("localhost","root","");
mysql_select_db("abc",$c);
$r = mysql_query("select  * from  banner");
echo "<table border='2'>";

while($i = mysql_fetch_array($r))
       {
         //echo $i["id"].$i["name"]."<br>";        
     //  echo "<tr><td><img width='100' height='100' src=".$i['name']."></td>"     ; 
    
echo  "<td><img width='100' height='100' src=".$i['name']."></td>";

  }
echo "</table>";


?>

</body>


</html>
