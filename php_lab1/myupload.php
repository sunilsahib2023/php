<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #FFFF99;
}
-->
</style></head>
<?php
if($_FILES["f"]["error"]>0)
{
echo "Cannot Load A file ".$_FILES["f"]["error"]."<br>";
}
else
{
echo "<h1>Adding Picture Name to DataBase</h1>";
echo "file name ".$_FILES["f"]["name"]."<br>";
echo "file type ".$_FILES["f"]["type"]."<br>";
echo "file size ".$_FILES["f"]["size"]."<br>";
echo "Stored in ".$_FILES["f"]["tmp_name"]."<br>";
echo "Error no  ". $_FILES["f"]["error"];
}		

$c = mysql_connect("localhost","root","");

mysql_select_db("abc",$c);

$myfile = $_FILES["f"]["name"];

$sq = "insert into myadd (banner_name) values('$myfile')";

mysql_query($sq,$c);

mysql_close($c);

echo "<h1>Data base is updated</h1>";   

echo "<a href='addfile.html'> Add More </a>";






?>


<body>
<p align="center"><img src="flower2.JPG" name="p" width="393" height="149" id="p" /></p>
</body>
</html>
