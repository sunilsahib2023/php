<?php


$c = array("red","cyan","blue","green","orange","lime");


$i=0;
echo "<select id='sk' style='background:red;box-shadow:10px 10px 10px gray'>";

for($i=0;$i<sizeof($c);$i++)
{

echo "<option style='background:pink;font-size:20px;color:blue' value='$c[$i]'>$c[$i]</option>";
}

echo "</select>";




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

document.title= d.value
document.bgColor= d.value




}

</script>






</body>



</html>
