<html>
<body bgColor="cyan">

<h1>File handling in PHP</h1>

<?php
//include("header.php");

$file = fopen("data.txt", "r") or exit(" open file!");
//Output a line of the file until the end is reached
echo "<br><br><div style='width:500;height:250;overflow:scroll;color:yellow;font-family:arial;font-size:10;text-align:justify;padding:5px;background-color:black'><br>";
while(!feof($file))
  {
  echo fgets($file). "<br />";
  }
fclose($file);
?>
</div>
</body>

</html>
