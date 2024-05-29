<?php
// Set the cookie
setcookie("category", "books", time() + 86400, "/");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Set Cookie</title>
</head>
<body>
    <p>Cookie has been set. <a href="read_cookie.php">Go to next page to read the cookie.</a></p>
</body>
</html>
