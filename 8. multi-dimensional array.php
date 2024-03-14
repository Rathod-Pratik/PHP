<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-dimensional array</title>
</head>
<body>
    <?php
    $a=array(
        array(1,2,3,4,5),
        array(6,7,8,9,10),
        array(11,12,13,14,15),
        array(16,17,18,19,20),
        array(21,22,23,24,25),
    );
    for ($b=0; $b<5; $b++){
        for ($c=0; $c<5; $c++){
            echo $a[$b][$c];
            echo " ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>