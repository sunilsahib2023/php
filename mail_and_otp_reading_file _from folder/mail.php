<?php
// My lib

$s = "Trial Mail ";
$m="Testing the Message";

$header = "From sunil "."\r\n"."CC:sunilsahib2000@gmail.com";

$r = mail("http://sunilsahib2000@yahoo.com",$s,$m,$header);


if($r)
{
echo "<h1>mail is sended</h1>";
}
else
{

echo "<h1>Colod not send mail </h1>";

}





?>
