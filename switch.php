<?php

//switch = replacement of using to many elseif;
 
    $grade = "X";

    switch($grade) {
    
        case "A": 
            echo"Thats a good grade <br>";
            break;
        case "B":
            echo"Thats normal <br>";
            break;
        case "C":
            echo"You did okay <br>";
            break;
        case "D":
            echo"You did poorly <br>";
            break;
        case "F":
            echo"You failed <br>";
            break;
        default:
            echo"$grade is not valid <br>";
    }

    $date = date("l");

    switch($date){
        case "Monday":
            echo "I hate mondays <br>";
            break;
        case "Tuesday":
            echo "Its taco tuesday <br>";
            break;
        case "Wednesday":
            echo "Half week <br>";
            break;
        case "Thirsday":
            echo "Nearly there <br>";
            break;
        case "Friday":
            echo "Its almost the week end <br>";
            break;
        case "Saturday":
            echo "Its the week-end <br>";
            break;
        case "Sunday":
            echo "Its the week-end <br>";
            break;
        default: 
            echo "$date is not valid !";
            break;
    }

?> 