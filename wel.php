<!--
<meta http-equiv="refresh" content="1">
-->
<?php
$u ="Amit";
$p = "abdc";

$dbname = "php";


$c = new mysqli("localhost","root","",$dbname) ;
if($c->connect_error)
{
  die("Connection Error...".$c->connect_error);

}
echo "<h1>Connected Successfully</h1>";
$sq="select username,password from user where username='$u' and password='$p'";
$r = $c->query($sq);
  if($r->num_rows>0)
     {
    
        echo "<h1>user Found...</h1>";
               

     }
     else
     {
        echo "<h1>No  such User Found ...</h1>";

     }

echo "<h1>";
  if(($u=="Amit")&&($p =="abc"))
    {
        echo "Valid User";

    }
    else    
    {
        echo "Not  a  Valid user";

    }




?>
