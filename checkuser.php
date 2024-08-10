<h1>Checking user </h1>
<?php
$u = $_POST['un'];
$p = $_POST['upass'];
$c = mysqli_connect("localhost","root","","php");
  if($c)
    {
        echo "<h1>Connected ...";

        $sq = "select *  from user where username = '$u' and password ='$p'  ";

            $r = mysqli_query($c,$sq);
           if(mysqli_num_rows($r) > 0) 
            {
             echo "valid user Connected...." ;
              echo "<a href='index2.php'>Click to visit home </a>";

          }   
          else  
          {
             echo "<h1>Login Fail : Invalid   user or Password </h1>";
             echo '<br/><a href="login.html">Try Again </a>';
          }    
    }
    else
    {
        echo "could not Connected.....";
      die("Error :- ".mysqli_connect_error());

    }
            






?>

