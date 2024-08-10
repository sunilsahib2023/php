<?php
$c = mysqli_connect("localhost","root","","employee");

         if($c){echo "Connected...";}
		 if(!$c){echo "Not connected".mysqli_error($c);}
 



$sq2 = "select * from emp_details";

$t2 = mysqli_query($c,$sq2);
echo "<h1>Following Record are there in Database Table </h1>";

echo "<table border='1' cellpadding='3'>";

while ($i = mysqli_fetch_array($t2))
      {
echo "<tr><td>".$i['emp_id']."</td>";
echo "<td>".$i['emp_name']."</td><td>".$i['emp_email']."</td><td>".$i['emp_gender']."</td>";
echo "<td>".$i['emp_address']."</td></tr>";
	 
	 }

echo "</table>";



if($_SERVER["REQUEST_METHOD"]=="POST")
{
$n = $e = $g = $a = "";
 
 
$n = $_POST['name'];
$e = $_POST['email'];
$g = $_POST['gender'];
$a = $_POST['address'];


$sq = "insert into emp_details(emp_name,emp_email,emp_gender,emp_address)values('$n','$e','$g','$a')";





$t = mysqli_query($c,$sq);



             if($t){echo "<br/>Record Inserted..";} 
             if(!$t){echo "</br>Error inserting..".mysqli_error($c);} 



}

mysqli_close($c);
?>




<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<h1>Insert Record</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="Post"><br>
Name  <input name="name" type="text"><br>
Email <input name="email" type="text"><br>
Gender<input name="gender" type="text"><br>
address<input name="address" type="text"><br>
</br></br>
<input name="" type="reset"><input name="" type="submit">



</form>

<body>
</body>
</html>