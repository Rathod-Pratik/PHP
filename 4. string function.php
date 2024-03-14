<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String function</title>
</head>
<body>
    <?php
    $a="hello world";
    $b="hello india";
    echo strlen($a);  //use for find length
    echo "<br>";
    echo str_word_count($a);//use to count word
    echo "<br>";
    echo strtolower($a);//use for write string in lowercase
    echo "<br>";
    echo strtoupper($a);//use for write string uppercase
    echo "<br>";
    echo str_replace("world","india",$a); //use to replace string
    echo "<br>";
    echo  $a ." " . $b;//use to concat string
    echo "<br>";
    echo substr($a,6,5);//use to slice string
    echo "<br>";





    ?>
</body>
</html>