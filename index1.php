<?php
session_start();
$u = $_POST['uname'];
$c = $_POST['ucolor'];
$_SESSION["un"] = $u;
$_SESSION["mc"] = $c;

print_r($_SESSION);

	if($_SERVER["REQUEST_METHOD"] == "POST")
		{
		echo "<h1>Hello ". $_SESSION['un'] ."  !  Welcome to My website ... view website  by user setting  </h1>";	
		echo "<body bgColor='".$_SESSION["mc"]. "'>";		
		                                  
		}
		else
		{
		  echo "<body style='background:yellow'>";

		echo "<h1>Welcome to My website ... view website by Default setting </h1>";

		}


?>
<br/>
<a href="about.php">About </a>

