<html>
    <head>
 <h1>Displaying Images From Folder </h1>     
    </head>
<?php
$files = glob("uploads/*.*");
echo "<table cellpadding='10px' border='1';>";
for ($j = 1; $j<count($files); $j++) 
{
    $image = $files[$j];
echo "<tr>";
echo "<td> <img src=' $image' width='200' height='200' style ='box-shadow:10px 10px 10px gray;margin:20px;'><br/>$files[$j]</td>";
echo "<tr>";
  }
echo "</table>";
//$f = glob("images/*.*");
$f = "images/";
/*
$n = (count(scandir($f)) - 2);
//$n = 5;
for($i=1;$i<=$n;$i++)
{
echo "<img src='images/b$i.jpg' width='200' height='200' style ='box-shadow:10px 10px 10px gray;margin:20px;'>";


}
*/


?>
