<?php
// DATABASE CONNECTION !!
require 'db_conn.php';


// Check if the ID is passed via the URL
if (isset($_GET['id'])) {
    // Store the patient_id in a variable
    $patient_id = $_GET['id'];

    // SQL query to delete the record with the passed medicine_id
    $sql = "DELETE FROM adminpatient_record WHERE patient_id = $patient_id";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        // Redirect to the original page or show a success message
        echo "<script>alert('patient record deleted successfully'); window.location.href='adminpatientrec.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request. No ID provided.";
}

// Close the database connection
$conn->close();
?>
