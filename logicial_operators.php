<?php
    // Logical operators = combine conditional statements 
    // if(condition1 && condition2)


    // && = true if both conditions are true
    // || = true if at least one condition is true
    // ! = true if false. false if true

   $temp = 31;

   if($temp >=0 && $temp <= 30){
    echo"The weather os good <br>";
   }else{
    echo"The weather is horrible <br>";
   }
  
   $second_temp = 15;
   $cloudy = false;

   if($cloudy){
    echo"Its cloudy <br>";
   }
   else{
    echo "Its sunny <br>";
   }

   $age = 17;
   $citizen = true;

   if($age >= 18 && $citizen){
    echo "You can vote";
   }
   else{
    echo "You can't vote";
   }

   $child = true;
   $senior = false;
   $ticket = null;

   if($child || $senior){
    $ticket = 10;
   }
   else{
    $ticket = 15;
   }

   echo"The ticker price is \${$ticket}";

?>