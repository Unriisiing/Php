<?php
    // variable = a reusable container that holds data
    // int , strings , boolean

    $name = "Michael"; //String
    $age = 24; // integer whole number;
    $price = 17.5; // float
    $adult = true; // boolean
    $email = "michael123@gmail.com";
    $quantity = "4";

    //echo $name;
    echo "Hello my name is {$name} and i'm {$age}<br>";
    echo "This is your mail {$email}<br>";
    echo "The price tag is \${$price}<br>"; // \$ escape sequence
    echo "Hello i'm a {$adult} <br>";    

    $total = null;

    echo "You have ordered {$quantity} x \${$price} <br>";

    $total = $quantity * $price;

    echo "The total is \${$total}";
    
?>