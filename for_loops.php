<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">

    <label>Enter a number to count to:</label>
    <input type="text" name="counter">
    <input type="submit" value="start">

    </form>
</body>
</html>
<?php

    $counter = $_POST["counter"];

    for ($i = $counter; $i > 0; $i--) {
        echo $i . "<br>";
    }


//for loop = repeat some code a certain # of times

// for ($i = 0; $i<5;$i++){

//     echo"Hello world <br>";
// }
// $y = 0;
// for($i = 0; $i<5; $i++){
//     $y++;
//     echo str_repeat("*", $y);
//     echo "<br>";
// } 
?>
