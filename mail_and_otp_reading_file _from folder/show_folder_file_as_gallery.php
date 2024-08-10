<?php

$files = glob("images/*.*");
//$files = glob("images/*.jpeg");

for ($j = 1; $j<count($files); $j++) 
{
    $image = $files[$j];

echo " <img src=' $image' width='200' height='200' style ='box-shadow:10px 10px 10px gray;margin:20px;'>";
  }

$files = glob("images/*.gif");

for ($j = 1; $j<count($files); $j++) 
{
    $image = $files[$j];

echo " <img src=' $image' width='200' height='200' style ='box-shadow:10px 10px 10px gray;margin:20px;'>";
  }


$files = glob("images/*.png");

for ($j = 1; $j<count($files); $j++) 
{
    $image = $files[$j];

echo " <img src=' $image' width='200' height='200' style ='box-shadow:10px 10px 10px gray;margin:20px;'>";
  }


?>