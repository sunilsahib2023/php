<!Doctype HTML>
<html>
<head></head>
<body>

<?php

echo "<h1>Working with Loops";
$emp = array("Raj"=>"30000","Ravi"=>"60000","Menu"=>"80000","Ashok"=>"50000","Arju" => "89000","Mr John"=>"7596");


foreach($emp as $v => $v_value)
  {

echo "<br/>".$v." = ".$v_value;
  
 }


	
?>
</html>

