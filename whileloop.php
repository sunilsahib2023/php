<?php
$t = count(scandir('images/')) - 2;
//$color = dechex(rand(0x000000,0xFFFFFF));
echo $t;
$d = 0;
  while($d<=$t)
     {
echo "<a href='images/p$d.jpg'> <img  width='100px' height='100px'  style='margin:10px;box-shadow:10px 10px 10px gray' src='images/p$d.jpg'></a>";
$d++;
    }
echo "<br/>";
echo "<br/>";echo "<br/>";echo "<br/>";

//echo "<select onChange='document.bgColor = this.value'>";
echo "<select style='border:0px;cursor:pointer;box-shadow:10px 10px 10px gray' onChange='document.body.style.background = this.value'>";
$a = 1;
 while($a<=255)
      {
//$color = dechex(rand(0x000000,0xFFFFFF));
$r=rand(0,255);$g=rand(0,255);$b=rand(0,255);
$color ="rgb($r,$g,$b)";
// $color = dechex(rand(0x000000, 0xFFFFFF));

   echo "<option style='box-shadow:10px 10px 10px gray;width:200px;font-size:30px;background:$color'>$color</option>";

$a++;
    }
echo "</select>";






?>
