<?php

    // if statement = if some condition is true, do something
    //                if condition is false, don't do it 
    // $age = 99;

    // if ($age >= 100) {
    //     echo "You are too old!";
    // }
    // elseif ($age >= 18) {
              
    //     echo"You may enter :)";
    // }
    // elseif ($age <= 0) {
    //     echo "Not a valid age";
    // }
    // elseif ($age == 0) {
    //     echo "You were just born";
    // }
    // else{
    //     echo "You must be 18+ to enter";
    // }

    // $adult = false;

    // if($adult == true){
    //     echo "You may enter";
    // }
    // else{
    //     echo "Yuu must be an adult";
    // }

    $hours = 50;
    $rate = 15;
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate *40) + (($hours - 40) * ($rate * 1.5));
    }

    echo"You made \${$weekly_pay} this week";

?>