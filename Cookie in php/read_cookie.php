<?php
// Check if the cookie is set
if(isset($_COOKIE["category"])) {
    $cat = $_COOKIE["category"];
    echo "Category: " . $cat;
} else {
    echo "Cookie is not set.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Read Cookie</title>
</head>
<body>
    <p><a href="Cookie.php">Back to set cookie page</a></p>
</body>
</html>
