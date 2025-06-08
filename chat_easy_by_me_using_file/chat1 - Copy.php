
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>


 <div class="container mt-2 p-5">

<?php
session_start();

$chatFile = "chat.txt";


if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = "User_" . rand(1000, 9999);
}




if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["message"]))
 {
$message = htmlspecialchars($_POST["message"]);

$newData = $_SESSION["user"] . ": " . $message . "\n"; // New message
$existingData = file_get_contents($chatFile); // Read current file contents

file_put_contents($chatFile, $newData . $existingData); // Prepend new data



   // file_put_contents($chatFile, $_SESSION["user"] . ": ". $message."\n" ,FILE_APPEND);




}


// displaying message


$chat = file_exists($chatFile) ? file_get_contents($chatFile) : "";
?>



<!DOCTYPE html>
<html>
<head>
    <title>Easy Chat</title>
</head>
<body>
    <h2 style='color:teal;'>Public Chat Room</h2>

    <div >
<iframe  id="main" src="show.php" width="100%" style="behavior: smooth; border:1px solid #000; padding:10px;  overflow:auto;"></iframe>
        <?php
//echo nl2br($chat);

    ?>
    </div>
    <form method="post">
        <input type="text" name="message" placeholder="Type a message..." required>
        <button type="submit" class="btn  btn-primary btn-sm btn-lg">Send</button>
    </form>

    <form method="post" onsubmit="ch()">
        <button id="b1" class="btn btn-danger btn-sm btn-lg" type="submit" name="clear" value="1">Clear Chat</button>
    </form>
</body>
</html>

<?php
// Clear chat if button clicked

if (isset($_POST["clear"])) {
 //file_put_contents($chatFile, " ");
   header("Location: chat1.php"); // Refresh the page
}
?>
<script>
function ch()
{
upass = prompt("Admin Password ....!")
  if(upass=="Ram")
   {
   alert("Chat will be erased or deleted")
<?php 
//file_put_contents($chatFile, " "); 

?>

   }
  else
   {
  alert("Only Admin can delete")
  }

}
</script>


</div>


























<!--
******************************************************************************
file_put_contents("filename.txt", "Welcome to Chat..!");


The htmlspecialchars() function in PHP is used to convert special characters into their HTML entity equivalents, helping to prevent security vulnerabilities like cross-site scripting (XSS).

How It Works
It converts characters like:

< to &lt;

> to &gt;

& to &amp;

" to &quot;

' to &#39; (if ENT_QUOTES is used)


A security vulnerability is a weakness or flaw in a system that can be exploited by an attacker to gain unauthorized access or cause harm

echo nl2br($chat); ensures that messages appear on separate lines when displayed in the browser, rather than being all in one continuous block.


file_put_contents("example.txt", "Message\n", FILE_APPEND | LOCK_EX);
This ensures the file is locked while appending data.

file_put_contents("example.txt", "Test Data\n", FILE_USE_INCLUDE_PATH);


-->

