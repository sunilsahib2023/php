<?php
echo "<h1>Working with Date in PHP </h1>";
date_default_timezone_set("Asia/Kolkata");

  $d = mktime(0,0,0,01,1,18) ;

echo  date("D d-m-y ", $d);

$m  = date("D",$d);



echo " <h1>$m</h1>";

$imageof_the_day = null;
//echo $m;


  switch($m)
           {
             case "Mon":
                        $imageof_the_day = "images/p2.jpg";
             break;
            case "Tue":
                        $imageof_the_day = "images/p3.jpg";
             break;

           case "Wed":
                        $imageof_the_day = "images/p4.jpg";
             break;

            case "Thu":
                       $imageof_the_day = "images/p5.jpg";
             break;


                  case "Fri":
                        $imageof_the_day = "images/p6.jpg";
             break;


               case "Sat":
                  $imageof_the_day = "images/p7.jpg";
             break;
            
               case "Sun":
                       $imageof_the_day = "images/p8.jpg";
             break;


               }



echo "<img src='$imageof_the_day'  style='width:1000;height:400px'>";
?>
