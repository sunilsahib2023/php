<head>
  <link    rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>




<?php
session_start();
$p = $_POST["clpass"];

   if($p=="a")
      {
     file_put_contents( $_SESSION["chatFile"], "");
     echo "<h1>Chat box is clear </h1>"; 
   //header("Location: chat1.php"); // Refresh the page
     }

  else
   {
  echo "<h1   style=' width:70%; margin:auto;margin-top:200px;color:red' class= 'animate__animated animate__bounce' >Not A Valid Password ! only Admin can clear the Chat  </h1><br/>";
   }

 
?>
<br/>
<a href="chat1.php">Cont.. Chat </a>