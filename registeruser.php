<?php
include "header.php";
show_header('Register user','green','yellow');
show_header('Connecting User','red','yellow');
include "connect.php";
$u = $_POST["un"];
$p = $_POST["pass"];
$p = hash('sha256', $p);
echo $p;

/*
$sq = "insert into user(username,password) values('$u','$p')";

if (mysqli_query($c, $sq))
 {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/




?>
