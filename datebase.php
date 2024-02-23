<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
    <style>
      .containar{
        background-color: #dbdbf0;
        border: 2px solid black;
        display: block;
        margin: auto;
        width: 31%;
        height: 350px;
      }
      #forms{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        margin: 50px 24px;
      }      

        input{
            height: 28px;
            width: 310px;
        }
        .btns input{
            width: 80px;
            margin: 26px 10px;
        }
        </style>
</head>
<body>
  <?php
  $server="localhost";
  $username="root";
  $database="Royal";
  $password="";
  
  $connect=mysqli_connect($server,$username,$password,$database);
  
  //inesrt data using form
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $Name= $_POST['Name'];
    $Course = $_POST['Course'];
    
    $data="INSERT INTO `college` (`Name`, `Course`) VALUES ('$Name', '$Course');";
    mysqli_query($connect,$data);
    
  }
  
  //create database using php
  // $database="CREATE DATABASE Rathod";
  // mysqli_query($connect,$database);
  
  //crate table using query
  //let data=" CREATE TABLE .`college` (`Email` VARCHAR(30) NOT NULL , `Password` VARCHAR(13) NOT NULL ) ";
  //mysqli_query($connect,$data);
  
  
  //insert data using php
  // $insertdata="INSERT INTO `college` (`Email`, `Password`) VALUES ('Rathodrathul1928@gmail.com', 'rathul@1234')";
  // mysqli_query($connect,$insertdata);
  

  //Display data from mysql

  $sql="SELECT * FROM `college`";
  $result=mysqli_query($connect,$sql);

  while($row=mysqli_fetch_assoc($result)){
    echo "hello ".  $row['Name']." your course is ". $row['Course'];
    echo "<br>";
  }
  
  ?>

  <!-- form for input data -->
    <!-- <div class="containar">
            <form action="/PHP/PHP/datebase.php" id="forms" method="post">
              <h2>Login now</h2>
              <label for="Name`">Name</label>
              <input type="text" name="Name" requested>
        
              <label for="Course">Course</label>
              <input type="text" name="Course" requested>
        
              <div class="btns">
              <input type="submit" value="Submit">
              <input type="reset" value="Reset">
            </form>
          </div> -->
    

</body>
</html>