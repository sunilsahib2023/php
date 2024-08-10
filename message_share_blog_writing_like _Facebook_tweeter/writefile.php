

<?php


$u = $_POST['uname'];
$h =$_POST['post_heading'];
$t = $_POST['postdata'];

/* Programe to u[Lpad file  */








if($_FILES["file"] ["error"] > 0)
    {
      echo "Error ! ".$_FILES["file"]["Error"]."<br/>";

    }
  else
  {
echo "<br>";
//echo "Upload :".  $_FILES["file"]["name"]."<br>";
//echo "Type :".  $_FILES["file"]["type"]."<br>";
//echo "Size:".( $_FILES["file"]["size"] /1024)."kb</br>";
//echo "Stored in :".  $_FILES["file"]["tmp_name"];
echo "<h1>File Name is $mfile</h1>";

 }
  
move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
      
      echo "Stored in: " . "images/".$_FILES["file"]["name"];
 
 







// *************************************************

$mfile = "images/".$_FILES["file"]["name"];
$ondate = date("d-m-y h:i:s a");
echo $u	." ".$h." ".$t;
$m ="<br/>";


$m .= "<div style='margin:auto;text-align:center;background:teal;color:white;font-size:25;box-shadow:10px 10px 10px black;paddin:10px;width:600px;height:auto;'><br/><br/>";

$m .= "<img src='$mfile' width='300' height='300' style='box-shadow:10px 10px 10px black;border-radius:30px'>";


$m .="<br/><h1>$h</h1><br/>Sender  :$u on :- $ondate  <br/>Blog/Message:";
$m .= "<br/><p style='text-align:justify;font-size:20px;padding:10px;'> $t</p><br/>";
$m .="<a href='http://localhost/php/create_post.html'>Write Blog </a></div>";






$f = fopen("blog.html", "a") or die("Error :- Could not save or Unable to open file!");
if($f)
{
fwrite($f, $m);
echo "<script>alert('Posted your message')</script>";
header("Location:create_post.html");
}

fclose($f);


?>