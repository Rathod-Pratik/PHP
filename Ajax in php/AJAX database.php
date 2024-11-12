<?php 
$server = "localhost";
$username = "root";
$database = "Royal";
$password = "";

// Create connection
$connect = mysqli_connect($server, $username, $password, $database);

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the 'no' parameter is set
if (isset($_GET['no']) && !empty($_GET['no'])) {
    $n = $_GET['no'];

    // Use prepared statements to prevent SQL injection
    $stmt = $connect->prepare("SELECT * FROM `notes` WHERE `no` = ?");
    $stmt->bind_param("s", $n);  // "s" means the parameter is a string

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if any row is returned
   if ($result && $result->num_rows > 0) {
    echo "<div class='container mt-4'>";
    echo "<table class='table table-bordered table-striped'>";
    echo "<thead class='thead-dark'>";
    echo "<tr><th>Sr. No</th><th>Name</th><th>Course</th><th>Mobile No</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row["no"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["name"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["course"]) . "</td>";
        echo "<td>" . htmlspecialchars($row["mo"]) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
} else {
    echo "No data found for the given parameter.";
}

    // Close the statement
    $stmt->close();
} else {
    echo "No parameter provided.";
}

// Close the connection
mysqli_close($connect);
?>
