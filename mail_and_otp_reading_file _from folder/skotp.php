<?php
//echo "<h1>". substr("Welcome to my web",1,6),"<h1>";
//echo  "<h1>".rand(1,100)."</h1>";
//echo "<h1>".strlen("abcdef"),"</h1>";
//$t = 5%10;
//echo  "<h1> $t </h1>";


/*
The modulo operator, denoted by %, is an arithmetic operator. The modulo division operator produces the remainder of an integer division. ... produces the remainder when x is divided by y
*/



// UDF
function create_new_otp($n)
 {
	$numsequence = "1357902468";
	$newotp = "";
	for ($i = 1; $i <= $n; $i++) 
		{
		$newotp .= substr($numsequence, (rand()%(strlen($numsequence))), 1);
		}


  
	return $newotp;
}


$n = 6;
print_r(create_new_otp($n));

?>
