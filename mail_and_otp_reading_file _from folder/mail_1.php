 <?php
// the message
$msg = "Hello Dear Student , This is a Test Message From my side to Test Mail services is working or not .\n Mail May be delivered in spam folder check it . ";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
$header = "From:sunilsahib2000@gmail.com \r\n";
         $header .= "Cc:sunilsahib2016@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         


$retval = mail("sunilsahib2000@gmail.com","Sunil Test-Message",$msg,$header);


//$retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Mail Send  sent successfully...";
         }else {
            echo "Could No Sent Mail...!!!!!!!";
         }
         


?> 
<br/>
<a href="index.php">HOME</a>