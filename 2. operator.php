<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operator in php</title>
</head>
<body>
    <?php
    echo "arithmetic operator";
    $a=5;
    $b=6;
    echo "<br>";
    echo "a + b = ".$a+$b;         //addition operator     
    echo "<br>";
    echo "a - b = ".$a-$b;         //substiction operator
    echo "<br>";
    echo "a * b = ".$a*$b;         //multiplication operator
    echo "<br>";
    echo "a / b = ".$a/$b;         //division operator
    echo "<br>";
    echo "a % b = ".$a%$b;         //module operator
    echo "<br>";
    echo "<br>";
    echo  "logical operator";
    $c=12;
    $e=true;
    $d=10;
    echo "<br>";
    if ($c > $d && $c > $d) {
        echo "two condition is true";       // logical AND
    }

    echo "<br>";
    if ($c > $d || $c < $d) {               //logical OR
        echo "one condition is true";
    }

    echo "<br>";
    echo !$e;                               //logical NOT
    
    echo "<br>";
    echo "<br>";
    echo "assignment operator";
    $f=5;
    
    echo "<br>";
    echo $f+=10;             //add 10             
    echo "<br>";
    echo $f-=10;             //minus 10 
    echo "<br>";
    echo $f*=10;             //multipli 10 
    echo "<br>";
    echo $f/=10;             //divide 10 
    echo "<br>";
    echo $f%=10;             //module 10 
    echo "<br>";
    echo "<br>";
    
    echo "conditional operator";
    $a = 10;
    $b = 5;
    $c = 20;
    echo "<br>";
    // Greater than
    if ($a > $b) echo "a is greater than b\n"; 
    echo "<br>";

    // Less than
    if ($b < $c) echo "b is less than c\n";
    echo "<br>";
    
    // Equal to
    if ($a == 10) echo "a is equal to 10\n";
    echo "<br>";
    
    // Not equal to
    if ($b != $c) echo "b is not equal to c\n";
    echo "<br>";
    
    // Greater than or equal to
    if ($c >= $a) echo "c is greater than or equal to a\n";
    echo "<br>";
    
    // Less than or equal to
    if ($b <= $a) echo "b is less than or equal to a\n";
    echo "<br>";

?>
</body>
</html>