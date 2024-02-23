<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display data from mysql to php</title>
</head>
<body>
<?php
  $server="localhost";
  $username="root";
  $database="Royal";
  $password="";
  
  $connect=mysqli_connect($server,$username,$password,$database);

         $sql="SELECT * FROM `college`";
         $result=mysqli_query($connect,$sql);

         while($row=mysqli_fetch_assoc($result)){
         echo "hello ".  $row['Name']." your course is ". $row['Course'];
         echo "<br>";
         }
         //course and name row is exist in database
    ?>
</body>
</html>