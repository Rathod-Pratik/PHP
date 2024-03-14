<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include php file</title>
</head>
<body>
    <?php
        include "18.file for include.php";//if the file is not found the page is  showing worning
        echo "<br>";
        require "18.file for include.php";//if the file is not found the page is showing fatal error
    ?>
</body>
</html>