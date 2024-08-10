<h1>Working with Cookies </h1>
<?php
session_start();
echo date('H:i:s Y-m-d');

if($_SERVER["REQUEST_METHOD"] == "POST") 
{
setcookie("myname","Ravi",time()-3600);
setcookie("mycolor","yellow",time()-3600);

echo "<h1 style='color:green' >Cookies  myname is  cleard now..... ....</h1>";
print_r($_COOKIE);
//header("refresh: 1");
}
else
{
echo "<h1 style='color:teal'>Cookies is setted.....!<br/></h1>";
setcookie("myname","Ravi",time()+3600);
setcookie("mycolor","yellow",time()+3600);

$c = $_COOKIE["mycolor"];
echo "<body bgColor='$c'>";
print_r($_COOKIE);
}








if(count($_COOKIE)>0)
{	
echo "<h1>Cookies are enabled...!</h1>";

}
else
{
echo "<h1>Cookies are disabled....! </h1>";
}





?>


<form  Method="post"  action="delme.php">

<!--
 action= "<?php echo $_SERVER[" PHP_SELF "];?>">

 action= "<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>">

-->

<h1>Remove Saved name in Cookie <input type="button" value="clear Cookie"></h1>

<input type="submit"  >

</form>



