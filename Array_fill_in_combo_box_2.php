<?php



//$c = array("red","cyan","blue","green","orange","lime");

$c = array();
for($t = 0;$t<=1000;$t++)
{
$mycolor = dechex(rand(0x000000,0xFFFFFF));
$c[$t]=$mycolor;
}


$i=0;

echo "<select id='sk'  style='background:black; color:#FFF;font-size:30px;onChange='this.style.background=this.value'> ";

for($i=0;$i<sizeof($c);$i++)
{
echo "<option style='width:160px;font-size:30px' value=$c[$i] selected >$c[$i]</option>";
}

echo "</select>";
/*

<?php $color = dechex(rand(0x000000, 0xFFFFFF)); ?>
<body style="background-color: <?php echo $color; ?>;">
<h1><?php echo $color ?></h1>

*/


?>

<!doctype>
<html>
<body>



<?php //echo $c[3]; ?>

<script>
d = document.getElementById("sk")
d.onchange = ch
function ch()
{

document.title = d.value
document.bgColor= d.value
d.style.color = ""+d.value



}

</script>






</body>



</html>
