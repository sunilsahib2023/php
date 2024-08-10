<html>

<body bgColor="cyan">
<center>
<h1>File to Server</h1>
<?php
include("header.php");

if($_FILES["file"] ["error"] > 0)
    {
      echo "Error ! ".$_FILES["file"]["Error"]."<br/>";

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
      "z:" . $_FILES["file"]["name"]);
      echo "Stored in: " . "sunil/" . $_FILES["file"]["name"];
 


?>


</center>
</body>




</html>
