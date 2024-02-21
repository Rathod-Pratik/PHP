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
     $databasename="Royal";
    $password="";
    
    //connecting
    $connect=mysqli_connect($serverName,$username,$password,$databasename);

    //checking 
    if(!$connect){
        die("sorry we fali to connect= " . mysqli_connect_error());
    }
    else{
        echo "connection was successful";
    }

    //create database
    //  $database="CREATE DATABASE Royal";
    //  mysqli_query($connect,$database);
    
    // if($database){
    //     echo "database create successfully";
    // }
    
    //create table
    //  $table="CREATE TABLE `college` (`Name` VARCHAR(13) NOT NULL , `Course` VARCHAR(6) NOT NULL , `Roll No` INT NOT  NULL AUTO_INCREMENT , `12th percentage` FLOAT NOT NULL , PRIMARY KEY (`Roll No`))";
    //  mysqli_query($connect,$table);
     
     
     //add data into table
    //  $data="INSERT  `college` (`Name`, `Course`, `Roll No`, `12th percentage`) VALUES ('VATASAL', 'BBA', '1',   '99')";
    //   mysqli_query($connect,$data);
    ?>
</body>
</html>