<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>global and local variable</title>
</head>
<body>
    <?php
 $a1=78;
 $a2=14;
function Rathod(){
    //declare $a as a global variable
    global $a1;//global variable
    echo $a1;
}
Rathod();
echo "<br>";
echo $a2;//local variable
    ?>
</body>
</html>