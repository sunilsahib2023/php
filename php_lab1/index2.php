<?php
if(isset($_POST['btnSubmit'])) {
	$to = "rajoo.sharma@gmail.com";
	$subject = "Test mail";
	$message_body = $_POST['txtmessage'];
	$from = $_POST['emailid'];
	$headers = "From:" . $from;
	mail($to,$subject,$message_body,$headers);
	$message = "Mail Sent.";
} else {
	$message = "Fill the form below to send the email";
}


?> 
<html>
<head>
</head>
<body>
<div style="float:left;width:100%;"><?php echo $message;?></div>
<form method="post" id="frmEmail" name="frmEmail">
	Enter Your email id:<input type="text" name="emailid" id="emailid" /></br>
	Enter Your message:<textarea id="txtmessage" name="txtmessage"></textarea>
	<input type="submit" value="Submit" name="btnSubmit" id="btnSubmit" />
</form>

<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
 mysql_select_db("sunil", $con);

 $result = mysql_query("SELECT * FROM myfirstable");

while($row = mysql_fetch_array($result))
  {
  echo $row['email'] . " " . $row['name'];
  echo "<br />";
  }

mysql_close($con);
// some code
?> 
</body>
</html>
