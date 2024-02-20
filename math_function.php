<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="index.php" method="post">
        <label>x</label>
        <input type="text" name="x">
        <label>y</label>
        <input type="text" name="y">
        <label>z</label>
        <input type="text" name="z">
        <input type="submit" value="total">
    </form>     -->

    <form action="index.php" method="post">
        <label>radius :</label>
        <input type="text" name="radius">
        <input type="submit" value="calculate">
    </form>
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null;
    $volume = null;

    $circumference = 2 * pi() * $radius;
    $circumference = round($circumference,2);

    $area = pi() * pow($radius,2);
    $area = round($area,2);

    $volume = 4/3 * pi() * pow($radius,3);
    $volume = round($volume,2);

    echo"Circumference = {$circumference}cm <br>";
    echo"Area = {$area} cm^2 <br>";
    echo"Volume = {$volume} cm^3 <br>";

    // $x = $_POST["x"];
    // $y = $_POST["y"];
    // $z = $_POST["z"];

    $power = null;
    $absolute = null; 
    $round = null;
    $floor = null;
    $ceil = null;
    $max = null;
    $min = null;
    $pi = null;
    $random = null;

    // $absolute = abs($x);
    // $round = round($x);
    // $floor = floor($x);
    // $ceil = ceil($x);
    // $power = pow($x, $y);
    // $max = max($x,$y,$z);
    // $min = min($x,$y,$z); 
    // $pi = pi();
    // $random = rand(0,100);

    // echo"absolute is $absolute <br>"; //if -2 echo 2
    // echo"round is $round <br>"; // if 15.2 echo 15 or 15.6 echo 16
    // echo"floor is $floor <br>"; // if 15.6 echo 15
    // echo"ceil is $ceil <br>"; // if 15.2 echo 16
    // echo"power is $power <br>"; // if 15.2 echo 16
    // echo"max is $max <br>"; // echo the max number
    // echo"min is $min <br>"; // echo the min number
    // echo"pi is $pi <br>"; // echo pi
    // echo"random is $random <br>"; // echo a random number rand(min,max)

?>