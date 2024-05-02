<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database in php</title>
</head>
<body>
    <?php
    $server="localhost";
    $username="root";
    $password="";
    
    $connect=mysqli_connect($server,$username,$password);
    
      //create database using php
     $database="CREATE DATABASE Rathod";
     mysqli_query($connect,$database);
  
    ?>
</body>
</html>