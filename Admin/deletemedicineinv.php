<?php
// DATABASE CONNECTION PARAMETERS
$servername = "localhost";
$username = "root"; 
$password = "";    
$db_name = "ths_healthcare";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the ID is passed via the URL
if (isset($_GET['id'])) {
    // Store the medicine_id in a variable
    $medicine_id = $_GET['id'];

    // SQL query to delete the record with the passed medicine_id
    $sql = "DELETE FROM admin_medicine_inventory WHERE medicine_id = $medicine_id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to the original page or show a success message
        echo "<script>alert('Medicine record deleted successfully'); window.location.href='adminmedicine.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request. No ID provided.";
}

// Close the database connection
$conn->close();
?>
