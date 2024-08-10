<html>
<body>
<h1>Working with  DML SQL</h1>
<pre>
<?php

$c = mysql_connect("localhost","root","");



if(mysql_query("CREATE DATABASE abc",$c))
    {
        echo "Data base created";
    }
else
{
echo   mysql_error();  
echo "<br>connection closed";
mysql_close($c);                                          
}


mysql_select_db("abc");

/*
$s = "create table emp
(
eno int,
name varchar(25),
sal  int ,
dept  varchar(15)
)";
mysql_query($s,$c);

*/
/*
mysql_query( "INSERT INTO  emp VALUES(1002,'John' ,9000,'Perchase')") ;
*/

/*
mysql_query("INSERT INTO emp (eno,name,sal,dept) values('1002','Menu',8000,'acct')");
mysql_query("INSERT INTO emp (eno,name,sal,dept) values('1003','Mohan',9000,'Perchase')");
mysql_query("INSERT INTO emp (eno,name,sal,dept) values('1004','Kishi,8000,'Perchase')");
mysql_query("INSERT INTO emp (eno,name,sal,dept) values('1002','Menu',8000,'acct')");
mysql_query("INSERT INTO emp (eno,name,sal,dept) values('1002','Menu',8000,'acct')");
mysql_query("INSERT INTO emp (eno,name,sal,dept) values('1002','Menu',8000,'acct')");
*/
//$r = mysql_query("select *  from emp where dept='Perchase' ");
$t=0;

 MYSQL_QUERY("DELETE FROM EMP WHERE NAME='Menu' ");
 $r = mysql_query("select *  from emp");

 while($i = mysql_fetch_array($r))
        {
// echo $i['name']."<br>";
    echo $i[0]." -*- ".$i['name']."-*-  ".$i[2]."--<br>";
$t=$t+$i['sal'];     
}

echo "Total salary = ".$t;


 



/*mysql_select_db("sk",$c);
$r = mysql_query("select * from tataoils");
echo '<table border="1">';
*/
/*
while($i = mysql_fetch_array($r))
{
echo "<tr  onMouseOver='this.style.color=red'><td>".$i['code']."</td><td>".$i['name']."</td><td>".$i['age']."</td><td>"."<td><td>".$i['salary']."</tr>";

}
echo "</table>";
*/

?>
</body>
</html>
