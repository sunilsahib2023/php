
<?php
$t = "upload/";

$tf = $t. basename($_FILES["fileToUpload"]["name"]);

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $tf)) 
      {
             echo "File is uploaded successfully !";
        }
  else 
	{
   		 echo "Sorry, there was an error uploading your file.";
  	}


?>
