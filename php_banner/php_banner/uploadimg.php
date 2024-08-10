<?php
echo "
<h1>ENTER The <u>JPG/PNG</u> FILE NAME TO SAVE FILE NAME FOR  BANNER </h1>
<h5 style='color:gray;font-family:verdana'>Copy the File in root Folder also </h5>

";

?>




<!DOCTYPE html>
<html>
<body>

<form action="copyfile.php" method="post" enctype="multipart/form-data">
    Select image to Name to upload:
    <input type="file" name="fname" id="fname">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
