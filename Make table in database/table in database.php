<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    $server="localhost";
    $username="root";
    $database="Royal";
    $password="";
    
    $connect=mysqli_connect($server,$username,$password,$database);
    //crate table using query
    $data=" CREATE TABLE .`college` (`Email` VARCHAR(30) NOT NULL , `Password` VARCHAR(13) NOT NULL ) ";
    mysqli_query($connect,$data);
?>
</body>
</html>