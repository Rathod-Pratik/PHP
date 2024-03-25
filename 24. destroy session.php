<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>distroy session</title>
</head>
<body>
    <?php
    session_start();
   session_unset();
    session_destroy();
    echo "you have been logout";
    ?>
</body>
</html>