<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get data from session</title>
</head>
<body>
    <?php
    session_start();

      if(isset($_SESSION['Username'])){
         echo "username is ". $_SESSION['Username'];
         echo "<br>";
         echo "password is ". $_SESSION['password'];
      }
      else{
          echo "login to continue";
      }
    ?>
</body>
</html>