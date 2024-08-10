<?php
function show_header($m='User Management',$bc='black',$tc='white')
{
$d = date("d-m-y");
echo  "<div style='width:100%; background:$bc;color:$tc;font-size:50px;padding:20px;box-shadow:10px 10px gray;text-aling:center;'>$m
<div  style='display:inline-block;width:65%;text-align:right;background:ed;'>$d</div>
</div>";
}

?>
