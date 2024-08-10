<html>
<body>

<?php
function set_body()
{
$b = rand(0,1000000);

echo "<body style='text-align:center;margin-top:0;background-color:$b'>";
	
}


function draw_outerbox($f,$w,$h,$c,$bs,$bc)
{
echo "<div style='position:relative;float:left;z-index:$f;margin-top:0;margin-left:auto;margin-right:auto;margin-top:0;width:$w;height:$h;background-color:$c;border:$bs $bc solid'></div>";
}

set_body( );
echo "<div>";
draw_outerbox(2,80,60,"gray",1,"red");
echo "<div>";  
	draw_outerbox(0,780,200,"yellow",1,"red");
  echo "</div>";
echo "<div>";       


?>



</body>


</html>
