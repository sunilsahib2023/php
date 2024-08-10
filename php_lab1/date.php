<hmlt>
<body bgColor="seagreen">
<h1>Using Data Object in PHP </h1>
<?php
include("header.php");
echo "<h1>".date ("d/m/y")."</h1>";
echo "<h1>".date ("m-d-Y")."</h1>";

$tomorrow = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
echo "Tomorrow is ".date("Y/m/d", $tomorrow)."<BR>";

echo time()."<BR>";
echo date("D F d Y")."<br>";

$t=time();



?>



</body>






</html>
