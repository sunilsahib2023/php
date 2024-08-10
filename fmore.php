<HTML>
<HEAD>
</HEAD>
<BODY bgColor="pink">

<?php



function Mymath($n1,$n2,$op)
{

$ch = $op;
   

   if($ch=="+")
         {

          $t=$n1+$n2;
          echo "<h1>Math  $n1+$n2 = $t </h1>";

          //return($n1+$n2);
         
          
          }

  if($ch=="-")
         {
          $t=$n1-$n2;
          echo "<h1>Math  $n1-$n2 = $t </h1>";
           //return($n1-$n2);
          
          }


    if($ch=="*")
         {

         $t=$n1*$n2;
          echo "<h1>Math  $n1*$n2 = $t </h1>";           

       //return($n1*$n2);

          }


  if($ch=="/")
         {

 
   $t=$n1/$n2;
          echo "<h1>Math  $n1/$n2 = $t </h1>";

        
    // return($n1/$n2);

    


          }


}



//$a = Mymath(40,40,"*");
//echo "<h1>$a</h1>";

 Mymath(14,7,"-");



?>


</BODY>






</HTML>
