<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operator in php</title>
</head>
<body>
    <?php
    //arithmetic operator
    $a=5;
    $b=6;
    echo "a + b = ".$a+$b;         //addition operator     
    echo "a - b = ".$a-$b;         //substiction operator
    echo "a * b = ".$a*$b;         //multiplication operator
    echo "a / b = ".$a/$b;         //division operator
    echo "a % b = ".$a%$b;         //module operator

    // logical operator

    $c=12;
    $d=10;
    $e=true;

    if ($c > $d && $c > $d) {
        echo "two condition is true";
    }

    if ($c > $d || $c < $d) {
        echo "one condition is true";
    }

    echo !$e;


    ?>
</body>
</html>