<h1>Send OTP ......</h1>

<form action= "<?php echo $_SERVER["PHP_SELF"]?>" method="post">

<h1>Mail Address to Send OTP = <input type="email"  name = "mail_address" required> </h1>
<h1>CC - Mail Address to Send OTP = <input type="mail" name = "cc_mailaddress" value=""> </h1>
<h1><input type ="submit" value="mail"><input type="reset"></h1> 
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$maddress=$_POST["mail_address"];
$ccaddress=$_POST["cc_mailaddress"];
//echo $maddress;
//echo "-------------".$ccaddress;



function create_new_otp($n) 
	{$numsequence = "1357902468";
	$newotp = "";
	for ($i = 1; $i <= $n; $i++) 
	{$newotp .= substr($numsequence, (rand()%(strlen($numsequence))), 1);	}
	return $newotp;}
$n = 6;
//print_r(create_new_otp($n));

$mes = "<h2>Your OTP  =  ".create_new_otp($n)."</h2>";
//echo $mes;

$header = "From:".$maddress."\r\n";
        $header.= $ccaddress.= " \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";


//$retval = mail($maddress,"OPT",$mes,$header);


$retval = mail ($maddress,"OTP",$mes,$header);
         
         if( $retval == true ) {
            echo "<h1  style='color:green'>OPT had Mailed  Successfully...</h1>";
         }else {
            echo "<h1  style='color:red'>Could Not  Mail OTP ...!!!!!!!</h1>";
         }

}

?> 

<br/>
<h1>
<a href="index.php">HOME</a>
</h1>

