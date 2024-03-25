<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>
<body>
    <?php
    //session is super global variable so we can access it from any page of website
    session_start();
    $_SESSION['Username']="Rathod Pratik";
    $_SESSION['password']="Pratik@1432";
    echo "session is saved";
    ?>
</body>
</html>