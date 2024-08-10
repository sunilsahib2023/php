<?php
session_start();

echo "<div style='width:100%;text-align:right'>User :";
echo $_SESSION["un"] ;
echo "</div>";

echo "<body bgColor='".$_SESSION["mc"]. " '>";





?>


<hr/>

<h1>About US</h1>
<hr/>
<p style="padding:100px ;text-align:justify;color:teal;">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p>
