<?php
$server = "localhost";
$username = "root";
$database = "Royal";
$password = "";

$connect = mysqli_connect($server, $username, $password, $database);

// Check if the 'n' parameter is set and not empty
 if (isset($_GET['no']) && !empty($_GET['no'])) {
    $n = $_GET['no'];

//  Sanitize the input to prevent SQL injection
 $n = mysqli_real_escape_string($connect, $n);

    // Prepare the SQL query
    $sql = "SELECT * FROM `notes` WHERE `no` = $n";

    // Execute the SQL query
    $result = mysqli_query($connect, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        echo "<div class='container mt-4'>";
        echo "<table class='table table-bordered table-striped'>";
        echo "<thead class='thead-dark'>";
        echo "<tr><th>Sr. No</th><th>Name</th><th>Course</th><th>Mobile No</th></tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["no"] . "</td>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["course"] . "</td>";
            echo "<td>" . $row["mo"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        echo "</div>";
    } else {
        echo "No data found for the given parameter.";
    }
    
    
  } else {
     echo "No parameter provided.";
 }
?>
