<?php


$format = "margin:2px;display:inline-block;box-shadow:10px 10px 10px gray;padding:10px;color:yellow;background:red;color:white;text-decoration:none;transition:1s;position:relative;";

$format2="box-shadow:10px 10px 10px black;padding:10px;color:yellow;background:green;text-decoration:underline;transform:scale(1.2);z-index:10;";


echo "<style>a:link{".$format."}
     a:visited{".$format."}
     a:hover{".$format2."}</style>";




$menuitem = array("home"=>"HOME","producr"=>"PRODUCT","services"=>"SERVICES","Yahoo");

$link =  array("index.html","product.html","services.html","http://yahoo.com");
$L=0;
foreach($menuitem as $i)
   {

   echo "<a href='$link[$L]'>$i</a>";
  $L++;

    }

 


?>