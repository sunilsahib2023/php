<html>
<body bgColor="pink">
<h1>Server Response:- Following Data will be saved</h1>
<pre><h5><?php
echo "Employee code  :-> ".$_POST["empcode"]."<br>";
echo "Employee Name  :-> ".$_POST["empname"]."<br>";
echo "Employee Age   :-> ".$_POST["empage"]."<br>";
echo "Employee city  :-> ".$_POST["empcity"]."<br>";
echo "Employee sal   :-> ".$_POST["empsal"]."<br>";
//Adding Data to Table
$c = mysql_connect("localhost","root","");
if (!$c)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("sk", $c);
$sql="INSERT INTO tataoils (code,name,age,salary,city)
VALUES
('$_POST[empcode]','$_POST[empname]','$_POST[empage]','$_POST[empsal]','$_POST[empcity]')";
if (!mysql_query($sql,$c))
  {
  die('Error: ' . mysql_error());
  }
include("header.php");
?>
<input type="Button" value = "add_more" onClick="location.href='add.htm'">
<input type="Button" value="close" onClick="window.close()">
</h5>
</pre>
</body>
</html>
