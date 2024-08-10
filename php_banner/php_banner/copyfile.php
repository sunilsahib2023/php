


<?php
/*

In your “php.ini” file, search for the file_uploads directive, and set it to On:
file_uploads = On

*/



$td = "banner/";

$tf = $td.basename($_FILES["fname"]["name"]);

//print_r($_FILES);



if (move_uploaded_file($_FILES["fname"]["tmp_name"], $tf))
 {
 echo "<br/>file is uploaded";
 } 
else
{
echo "<br/>Could not upload the file";
}

echo "<br/> <a href='uploadimg.php'>Back</a>";

?>
