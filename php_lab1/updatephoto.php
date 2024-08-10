<html>
<head>
<h1> UpLoaded picture</h1>
</head>
<body bgColor="palegreen">
<?php
//.........

if($_FILES["file"] ["error"] > 0)
    {
      echo "Error ! ".$_FILES["fname"]["Error"]."<br/>";

    }
  else
  {
echo "<br>";
echo "Upload :".  $_FILES["file"]["name"]."<br>";
echo "Type :".  $_FILES["file"]["type"]."<br>";
echo "Size:".( $_FILES["file"]["size"] /1024)."kb</br>";
echo "Stored in :".  $_FILES["file"]["tmp_name"];
 }
  
move_uploaded_file($_FILES["file"]["tmp_name"],
      "c:/xampp/htdocs/sunil/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "c:\xampp\htdocs\sunil" . $_FILES["file"]["name"];
 
//.................................
// Now updata databas 

 
$c = mysql_connect("localhost","root","");
echo "<br>File Name = ". $_FILES["file"]["name"]."<br>";
$n = $_FILES["file"]["name"];
mysql_select_db("abc",$c);
$sq ="insert into banner (name)
values('$n')";
mysql_query($sq,$c);
//mysql_close($c);

//...................








//.........
echo "<a href='updatephoto.htm'> More......</a>";

?>


</body>


</html>
