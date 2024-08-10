
<?php

$c = mysqli_connect("localhost","root","","php");
  if($c)
    {
        echo "<h1>Connected ...</h1>";
       }   
        
    else
    {
        echo "could not Connected.....";
      die("Error :- ".mysqli_connect_error());
	exit();
    }
            






?>

