<?php
echo "<h1>PHP Banner</h1>";
$d = date("w");
//echo $d;
$image_of_day = "banner/p5.jpg";
switch($d)
     {
         case 0:
         $image_of_day = "banner/p0.jpg";
         echo "<title>Today is  Sunday</title>";  
         break;
	 case 1:

         $image_of_day = "banner/p1.jpg";
         echo "<title>Today is  Monday</title>";  
         break;
	 case 2:

         $image_of_day = "banner/p2.jpg";
         echo "<title>Today is  Tuesday</title>";  
         break;
	 case 3:

         $image_of_day = "banner/p3.jpg";
         echo "<title>Today is  Wednesday</title>";  
         break;
	 case 4:

         $image_of_day = "banner/p4.jpg";
         echo "<title>Today is  Thursday</title>";  
         break;
	 case 5:

         $image_of_day = "banner/p5.jpg";
         echo "<title>Today is  Friday</title>";  
         break;
	 case 6:

         $image_of_day = "banner/p6.jpg";
         echo "<title>Today is  Saturday</title>";  
         break;
  default:
        $image_of_day = "banner/no.jpg";  
        echo "<title>Today is  Sunday</title>";  
        break;       


      }


?>




<!DOCTYPE html>
<html>
<style>
.banner{width:1000px;height:300px;box-shadow:10px 10px 10px gray;}
</style>

<body>


<div class="banner">
<img class="banner" src="<?php echo $image_of_day ?>" width="1000px" height="400px">
</div>



</body>
</html>
