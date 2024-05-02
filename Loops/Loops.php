<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
<?php // Using for loop
         echo "Using for loop: ";
           for ($i = 1; $i <= 10; $i++) {
                                echo $i . " ";
                                       }
         echo "<br>";

        // Using while loop
    echo "Using while loop: ";
    $j = 1;
    while ($j <= 10) {
        echo $j . " ";
        $j++;
    }
    echo "<br>";

    // Using do-while loop
    echo "Using do-while loop: ";
    $k = 1;
    do {
        echo $k . " ";
        $k++;
    } while ($k <= 10);
    echo "<br>";
    
    //using foreach loop 
    $a = array(
        "Rathod" => "91",
        "Mohit" => "83",
        "Rohit" => "74",
        "karn" => "84"
    );
    
    foreach ($a as $key => $value) {
        echo "Mark of ".$key." is ".$value;
        echo "<br>";
    }
    ?>
</body>
</html>