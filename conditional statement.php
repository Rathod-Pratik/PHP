<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditional statement</title>
</head>
<body>
    <?php
    //if statement
    $a=10;
    if($a<12){
        echo "a is smaller then 12";
    }

    // if else statement
    if($a<11){
        echo "a is smaller then 11";
    }
    else{
        echo "s is bigger than 11";
    }

    //if else if statement
    if($a=9){
        echo "value of a is 9";
    }
    else if($a=10){
        echo "value of a is 10";
    }
    else{
        echo "value of a is 11";
    }

    //switch statement

    $day = "Monday";

    switch ($day) {
        case "Monday":
            echo "Today is Monday";
            break;
        case "Tuesday":
            echo "Today is Tuesday";
            break;
        default:
            echo "Today is neither Monday nor Tuesday";
    }

    
    ?>
</body>
</html>