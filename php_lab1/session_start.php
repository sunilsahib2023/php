<html>
<head>

<script>

<?php $b = 'prompt("Enter  background Color = ","cyan")' ;
 $_SESSION["bc"]=$b ;?>

alert(<?php  echo $b;  ?>)
document.bgColor=b

<?php echo $bc?>;
</script>
<?php
echo  "<h1>Session in PHP</h1>";
session_start();

$_SESSION['fsize']=20;
$_SESSION['name']="Raj Kumar";

echo  $_SESSION['fsize'];
print  $_SESSION['name'];





?>





</head>
<body>


</body>


</html>

