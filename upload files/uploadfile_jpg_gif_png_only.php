
<?php
$t = "upload/";

$tf = $t. basename($_FILES["fileToUpload"]["name"]);

$uploadsuccess = true;
$ftype  = strtolower(pathinfo($tf,PATHINFO_EXTENSION));

if($ftype  != "jpg" && $ftype   != "png" &&  $ftype   != "jpeg" && $ftype   != "gif" ) 
{
echo "<br/>Error  :- only jpg ,gif,png,jpeg are  Allowed to upload...!";
  $uploadsuccess = false;
}


if ($_FILES["fileToUpload"]["size"] > 500000) 
{
  echo "<br/>Sorry, your file is too large.";
  $uploadsuccess = false;
}

if( $uploadsuccess)
{

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $tf)) 
      {
             echo "File is uploaded successfully !";
        }
  else 
	{
   		 echo "<br/>Sorry, there was an error uploading your file.";
  	}

}
?>
