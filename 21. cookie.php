<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie in php</title>
</head>
<body>
    <?php
    setcookie("catagory","books",time()+86400,"/");
    $cat=$_COOKIE["catagory"];
    echo $cat;
    ?>
</body>
</html>