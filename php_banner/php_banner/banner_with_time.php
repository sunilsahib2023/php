<?php
header("Refresh:10; url=banner_with_time.php");
echo "<h1>PHP Banner</h1>";
$d = date("s");
//echo $d;

date_default_timezone_set("Asia/Kolkata");
//echo date_default_timezone_get();

//echo "The time is " . date("h:i:sa");

echo "The time is " . date("s");

$i =  date("s");

echo "<title>".date('s')."</title>";  

$image_of_day = "banner/p5.jpg";

switch($i)
     {
         case 13:
         $image_of_day = "banner/p0.jpg";
         
         break;
	 case 1:

         $image_of_day = "banner/p1.jpg";
         echo "<title>Today is  Monday</title>";  
         break;
	 case 23:

         $image_of_day = "banner/p2.jpg";
         echo "<title>Today is  Tuesday</title>";  
         break;
	 case 33:

         $image_of_day = "banner/p3.jpg";
         echo "<title>Today is  Wednesday</title>";  
         break;
	 case 43:

         $image_of_day = "banner/p4.jpg";
         echo "<title>Today is  Thursday</title>";  
         break;
	 case 53:

         $image_of_day = "banner/p5.jpg";
         echo "<title>Today is  Friday</title>";  
         break;
	 case 3:

         $image_of_day = "banner/p6.jpg";
         echo "<title>Today is  Saturday</title>";  
         break;
  default:
        $image_of_day = "banner/p5.jpg";  
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
