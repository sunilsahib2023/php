<?php


echo "<h1>Static Variable </h1>";



function sk()
{
STATIC $count = 0; 
$count++;
echo "<H1>No of Count = ".$count."</H1>";
}

sk();
sk();
sk();
sk();
sk();
sk();





?>




<script language="php">
echo "<h2>Working on serverside</h2>";

</script>
