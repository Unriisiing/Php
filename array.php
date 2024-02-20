<?php

    // array = "variable" wich can hod more than one value at a time

    $foods = array("apple", "orange", "pineaple", "ananas");
    
    
    // $foods[0] = "banana";
    // array_push($foods,"coconut","kiwi"); //add at the end 
    // array_pop($foods);
    // array_shift($foods);
    // $foods = array_reverse($foods);
    // number_array = count($foods);
    // echo $foods[0] . "<br>";
    // echo $foods[1] . "<br>";
    // echo $foods[2] . "<br>";

    foreach( $foods as $food){

        echo $food . "<br>";
         
        
    }

?>