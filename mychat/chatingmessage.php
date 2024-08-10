<meta http-equiv="refresh" content="10">

<style>
#box{color:red;border:1px black solid;overflow:scroll;width:400px;height:300px;}

</style>
<!--
display_errors : This determines whether errors should be printed to the screen as part of the output or if they should be hidden from the user. echo ini_get('display_errors'); ini_set('display_errors', '0')
-->


<?php
ini_set( "display_errors", 0); 

header("Refresh:2; url = chatingmessage.php");

 

if(file_exists("remark.html"))
{

	$file = fopen('remark.html','a+') or die("Could not Read file");

	$content = fread($file,filesize("remark.html"));

	echo '<div id="box" >'.$content.'</div>';
	fclose($file);
}

?>


<script>
d = document.getElementById("box")
d.scrollTop = d.scrollHeight;
document.title =Math.random()*300

</script>