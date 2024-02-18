<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<body>
    <?php
    //data
    $serverName="localhost";
    $username="root";
    $password="";
    
    //connecting
    $connect=mysqli_connect($serverName,$username,$password);

    //checking 
    if(!$connect){
        die("sorry we fali to connect= " . mysqli_connect_error());
    }
    else{
        echo "connection was successful";
    }

    //create database
    $database="CREATE DATABASE Royal";
    mysqli_query($connect,$database);

    if($database){
        echo "database create successfully";
    }

    ?>
</body>
</html>