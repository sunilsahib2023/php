<html>

<body bgColor="<?=$_SESSION['usercolor'] ?>" >

<?php

echo $_SESSION['usercolor'];


$con = mysql_connect("localhost","root","");

mysql_select_db("abc",$con);

$sq = "select * from emp where salary!=7000";

$d = mysql_query($sq,$con);

echo  "<table width='300' height='100' style='text-align:center;color:gold;background-color:black' border='2' cellpadding='5' cellspacing='5' bordercolor='gold'>";

echo "<tr style='background-color:red'><th>Code</th><th>Name</th><th>Salary</th></tr>";
$t=0;

 while($i=mysql_fetch_array($d))
     {
       
          if($i['salary']==9000)
           {
         
          echo "<tr style='background-color:pink;color:black'><td>".$i['code']."</td><td>".$i['name']."</td><td>".$i['salary']."</td></tr>";
          
           }

           else
            {

       echo "<tr><td>".$i['code']."</td><td>".$i['name']."</td><td>".$i['salary']."</td></tr>";

            }
          
        $t+=$i['salary'];

     }
echo "<tr style='background-color:green'><th></th><th>Total</th><th>$t</th></tr>";
echo "</table>";

?>

</body>


</html>