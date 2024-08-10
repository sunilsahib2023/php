<html>

<body>
<?php
include("header.php");
echo "<h1>Received Form Data </h1>";
echo "Following Data had Received\n";

echo "<h2>User Name: ".$_POST['uname']."<br>";
echo "<h2>Age      : ".$_POST['uage']."<br>";;
echo "<h2>User Salary: ".$_POST['sal']."<br>";



$con = mysql_connect("localhost","root","");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("sk", $con);

$sql="INSERT INTO emp (empname, age, salary)
VALUES
('$_POST[uname]','$_POST[uage]','$_POST[sal]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "1 record added";

mysql_close($con)
?> 

<a href="http://localhost/sunil/dataform.htm">Add More Record</a>

</body>

`


</html>
