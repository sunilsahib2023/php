<html>
<body>
<h1>File Handling in PHP </h1>
<pre>
<?php

//$h = fopen("maildata.txt","w+");

$h = fopen("maildata.txt","a+");


//echo  $_REQUEST["uname"];

$m =  "My Name =  ". $_POST["uname"]. "\n"."Date = : ".date("d/m/Y:h:m:s")."\nMessage = ".$_POST["mes"];


if($h)
       {
    // rewind($h);
      fwrite($h,$m); 
    echo "File is created .................!";
     }

if(!$h)
   {
     die("Error :- File  is not created");
 }








?>


</body>




</html>
