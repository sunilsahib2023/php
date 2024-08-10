<html>
    <head>
 <h1>Displaying Images From Folder </h1>     
    </head>
 <?php
$files = glob("uploads/*.*");
//$files = glob("images/*.jpeg");
for ($j = 1; $j<count($files); $j++) 
{
    $image = $files[$j];

echo " <img src=' $image' width='200' height='200' style ='box-shadow:10px 10px 10px gray;margin:20px;'>";
  }





/*
$f = "uploads/";
$n = (count(scandir($f)) - 2);

for($i=1;$i<=$n;$i++)
{
echo "<img src='uploads/b$i.jpg' width='200' height='200' style ='box-shadow:10px 10px 10px gray;margin:20px;'>";

}
*/



?>
