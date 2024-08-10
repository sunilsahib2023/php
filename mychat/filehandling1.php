<?php
session_start();
echo '<link href="main.css" rel="stylesheet" >';

$u = $_SESSION["cuser"] ;
//echo "Hello ".$u;
if(empty($u))
{
header('Location:login.html');
}

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$d = date(" h:i:s  d - m - y");

$n = $_POST["uname"];
$r =  $_POST["remark"];



$f = fopen("remark.html","a+") or die("Error:-Could Not Save Data ");

if(!empty($r))
{
$m =   "<br/>On Date : $d <br/> Name:".$n."<br/>Message :".$r;

fwrite($f,$m);
$m="";
$r="";
}
else
{
$r="";
}

header('Location:filehandling1.php');

//$file = fopen('remark.html','r');
//$content = fread($file,filesize("remark.html"));

fclose($f);

}
echo "
<form method='post' action = 'filehandling1.php'>

<h1>Lets Do Public Chating </h1><br/>
<h4>
 Name :<input type='text' name='uname' value='$u' readonly> <br/>
 Message To send <br/><br/>
<textarea cols='30' rows='5' placeholder='type remark herer' name='remark'>

</textarea>
<br/>

<input type='submit' value='send'><input type='reset'>




</form>
";


?>
<div style="position:absolute;top:150px;left:450px">

<h1>Chating Message </h1> 
<iframe  frameborder="0" width="450" height="400" src="chatingmessage.php"></iframe> 
</div>

<br/>


<!--
Not Allowed
<a href="deletmessage.php">Del File </a>
-->


