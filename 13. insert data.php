<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data using php to mysql</title>
</head>
<body>
    <?php
    $server="localhost";
    $username="root";
    $database="Royal";
    $password="";
     
    $connect=mysqli_connect($server,$username,$password,$database);

    $data=" CREATE TABLE .`college` (`Email` VARCHAR(30) NOT NULL , `Password` VARCHAR(13) NOT NULL ) ";
    mysqli_query($connect,$data);
    
  //insert data using php
   $insertdata="INSERT INTO `college` (`Email`, `Password`) VALUES ('Rathodrathul1928@gmail.com', 'rathul@1234')";
   mysqli_query($connect,$insertdata);
    ?>
</body>
</html>