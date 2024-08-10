<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

$c = mysql_connect("localhost","root","");

mysql_select_db("abc",$c);



$t = mysql_query("select banner_name from myadd",$c);


$d = 0;
$plist = array();

while($i = mysql_fetch_array($t))
{

//echo $i['banner_name'];
$plist[$d] = $i['banner_name'];
$d=$d+1;
echo $plist[1];

}



mysql_close($c);






?>



<body>
</body>
</html>
