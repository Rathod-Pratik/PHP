<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert data using form php to mysql</title>
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
        $title= $_POST['title'];
        $discription = $_POST['description'];
        
        $data="INSERT INTO `college` (`title`, `discription`) VALUES ('$title', '$discription');";
        mysqli_query($connect,$data);
        
      }
    ?>
<div class="containar">
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
          </div>
</body>
</html>