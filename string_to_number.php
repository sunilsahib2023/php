<?php
echo "<h1>Working with Array...</h1>";
//$st = array("101"=>"Raj","Math"=>34,"Eng"=>44,"sci"=>78,"comp"=>76);
//echo $st["Math"];

$st = array("st1"=>array("roll"=>101,"name"=>"Ravi Kumar","Math"=>45),"st2"=> array("roll"=>102,"name"=>"Amit kumar","Math"=>34),"st3"=> array("roll"=>"103","name"=>"Harri","Math"=>67));

echo "<Table border='1' cellpadding='10' >";
$mt=0;
foreach($st as $i)
{ 
echo "<tr>";
echo "<td>".$i['roll']."</td>";
echo "<td>".$i['name']."</td>";
echo "<td>".$i['Math']."</td>";

$mt+= var_dump($i['Math']);

//$mt=$mt+$i['Math'];

echo "</tr>";

}
echo "<tr>";
echo "<td colspan='2' >Total</td>";
echo "<td>$mt</td>";
echo "</tr>";
echo "</table>";
?>