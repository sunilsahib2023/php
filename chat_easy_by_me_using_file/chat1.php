
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>

<head>
  <link    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<!--
<h1 class="animate__animated animate__bounce">An animated element</h1>
-->





 <div class="container  p-5 mx-auto d-block  fs-1 ">

<?php
session_start();

$chatFile = "chat.html";
  $_SESSION["chatFile"] = "chat.html";

if (!isset($_SESSION["user"])) {
    $_SESSION["user"] = "User_" . rand(1000, 9999);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["message"]))
 {
$message = htmlspecialchars($_POST["message"]);

$newData = "<font size='23'>". $_SESSION["user"] . ": " . $message . "\n"; // New message
$existingData = file_get_contents($chatFile); // Read current file contents

file_put_contents($chatFile, $newData . $existingData); // Prepend new data


   // file_put_contents($chatFile, $_SESSION["user"] . ":  $message."</h1>\n" ,FILE_APPEND);

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
<iframe  id="main" src="show.php" width="100%" height="400" style="behavior: smooth; border:1px solid #000; padding:10px;  overflow:auto;"></iframe>
        <?php
//echo nl2br($chat);

    ?>
    </div>
    <form method="post">
        <input type="text" name="message" placeholder="Type a message..." required>
        <button type="submit" class="btn  btn-primary  btn-lg">Send</button>
    </form>

    <form method="post"   action="clear.php" >
  <input type ="password" name="clpass" required>
        <button id="b1" class="btn btn-danger  btn-lg" type="submit" name="clear" value="0">Clear Chat</button>
    </form>
</body>
</html>

<?php
// Clear chat if button clicked


if (isset($_POST["clear"])) 
{
 //file_put_contents($chatFile, " ");
  // header("Location: chat1.php"); // Refresh the page
}


?>


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

