<?php
require 'db_conn.php';

header('Content-Type: application/json');

if (!$conn) {
    echo json_encode(['error' => 'Database connection error']);
    exit;
}

$searchTerm = isset($_GET['term']) ? $conn->real_escape_string($_GET['term']) : '';

// Query to get patient data, using LIKE for partial matching
$query = "SELECT patient_id AS id, patient_name AS text FROM adminpatient_record WHERE patient_name LIKE '%$searchTerm%' LIMIT 10";
$result = $conn->query($query);

$patients = [];
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $patients[] = $row;
    }
}

// Return the results as JSON
echo json_encode($patients);
?>
