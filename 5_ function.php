<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
   <?php
    function sum($a,$b){
    return $a+$b;    
   }
    echo sum(12,52);
    echo  "<br>";

   function average($a,$b,$c){
    $d= ($a+$b+$c)/3;
    echo "average of three number is ".$d;
   }
   echo average(100,200,300);
   ?>
</body>
</html>