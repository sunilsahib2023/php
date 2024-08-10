<?php
session_start();
$c = mysqli_connect("localhost", "root", "","customer");


if (!$c) {

    die("Connection failed:".mysqli_connect_error());
           }

$cc = $_POST['user'];
$p = $_POST['pass'];

$sql = "SELECT custid,custname FROM custdetail where custname = '$cc' And custpass = '$p' ";

$result = mysqli_query($c, $sql);



if (mysqli_num_rows($result) > 0) 
{
        while($row = mysqli_fetch_assoc($result)) 
	{
  		echo "<h1 style='color:green'>id: " . $row["custid"]. " - Name: " .$row["custname"]. "<br>";

             $_SESSION["user"] = $cc;
 
echo "<script>location.href='index3.php'</script>";
          }
}
 else {
    echo "<h1 style='color:red'> No Such Customer </h1>";
	}


mysqli_close($c);
?>
