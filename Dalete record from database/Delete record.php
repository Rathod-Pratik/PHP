<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete record in php</title>
</head>
<body>
    <?php
    $server="localhost";
    $username="root";
    $database="Royal";
    $password="";
    
    $connect=mysqli_connect($server,$username,$password,$database);

    //delete records from mysql
     $sql="DELETE FROM `college` WHERE `college`.`sno` = 3";
    $result=mysqli_query($connect,$sql);

    $effect=mysqli_affected_rows($connect);
    echo $effect ."Row are deleted";
    ?>
</body>
</html>