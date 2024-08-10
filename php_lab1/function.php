<HTML>

<BODY>


<?PHP
include("header.php");
echo "<h1>Funtion in php </h1>";

// function with parameter and return value


function sum($a,$b)
{
return($a+$b);
}

echo "Sum of 23 and 45 is = ".sum(23,45)."<br>";

function draw($char,$length,$co)
{

   for($i=0;$i<=$length;$i++)
     {
       echo "<span style='color:".$co."'>&".$char.";</span>";

      }

echo "<br>";

}

draw('hearts',5,"green");
draw('clubs',10,"red");
draw('diams',15,"blue");
draw('spades',20,"orange");

print "Creating bar chart<br><BR>";

function barchart($length,$co,$w,$h)
{

    for($i=0;$i<=$length;$i++)
      {  
      
           echo "<div  style='float:left;width:".$w."px;height:".$h."px;;display:inline;background-color:".$co."'><span style='float:left;width:5px;'></span></div>" ; 
   
      }



}


for($i=0;$i<=6;$i++)
{


barchart(10,rand(40,255),2,rand(40,150));



}

?>

<body>

</html>
