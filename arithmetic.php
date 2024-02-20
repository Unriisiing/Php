<?php
 // Arithmetic operators 
 // + - * / ** %
 
 $x = 10;
 $y = 2;
 $z = null;

 $z = $x + $y; // Addition
 echo"{$z} <br>";
 $z = $x - $y; // Substraction
 echo"{$z} <br>";
 $z = $x * $y; // Multiplication
 echo"{$z} <br>";
 $z = $x / $y; // Division
 echo"{$z} <br>";
 $z = $x ** $y; // power
 echo"{$z} <br>";
 $z = $x % $y; // Modulus, it keeps the remainder of a division also can be used to check if a number is odd if $number % 2 is 1 then its odd
 echo"{$z} <br>";

 // Increment/Decrement operators

 $counter = 0;

 $counter = $counter + 1; //long 
 $counter++;//short
 
 $counter = $counter - 1;//long
 $counter--;//short

 $counter = $counter + 3;//long
 $counter += 3;

 echo"{$counter}";

 // Operator Precedence
 // () first
 // **
 // * / %
 // + - last


?>