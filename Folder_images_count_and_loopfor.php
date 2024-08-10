<?php



// we use -2  in function beceause  PHP include (.) and (..) among the file and directory returned by scandir()



function file_count($foldername)
 
{
 

return (count(scandir($foldername)) - 2)

;
}




$t = file_count('images/');

$a=0;

echo '<img id = "sk" src="images/p0.jpg"  width="900" height="900"  style="position:relative;left:400px;transition:2s;box-shadow:10px 10px 10px gray;"> <br/>';

echo "<table border='1' >";

$f = print "<script>e = document.getElementById('sk')</script>";

//echo "<script>alert(e.src)</script>";


for($i=1;$i<=$t;$i++)
{

//echo "<tr>";
    
              
                 //echo "<td><img  src='images/p$a.jpg' width='50' height='50' onClick='e.src= this.src;transform:scale(1.2)' style='cursor:pointer'><td>";

 echo "<td><img  src='images/p$a.jpg' width='50' height='50' onmousemove = 'e.src = this.src;e.style.transform=scale(1.2)' style='cursor:pointer'><td>";

             

             
//echo "<tr>";
$a++;

}



echo "<tr>";
echo "</table>";



echo "<h1>For Loop </h1>";



?>
