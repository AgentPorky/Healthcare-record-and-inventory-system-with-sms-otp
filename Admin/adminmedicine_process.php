<?php
 //DATABASE CONNECTION !!
include "db_conn.php";




// Get data from POST request
$medicine_id = $_POST['medicine_id'];
$medicine_name = $_POST['medicine_name'];
$medicine_quantity = $_POST['medicine_quantity'];
$date_manufactured = $_POST['date_manufactured'];
$expiration_date = $_POST['expiration_date'];

// Validate data
if (empty($medicine_id) || empty($medicine_name) || empty($medicine_quantity) || empty($date_manufactured) || empty($expiration_date)) {
    die("All fields are required.");
}

// Prepare the SQL query to check if the medicine already exists
$selectSql = "SELECT * FROM admin_medicine_inventory WHERE medicine_name = ?";
$stmt = $conn->prepare($selectSql);

if ($stmt === false) {
    die("Error preparing select statement: " . $conn->error);
}

// Bind parameters
$stmt->bind_param("s", $medicine_id);

// Execute the statement
$stmt->execute();

// Store the result
$result = $stmt->get_result();

// Check if the medicine already exists
if ($result->num_rows > 0) {
    // Medicine exists, so update the quantity
    $updateSql = "UPDATE admin_medicine_inventory SET medicine_quantity = medicine_quantity + ? WHERE medicine_name = ?";
    $stmt = $conn->prepare($updateSql);

    if ($stmt === false) {
        die("Error preparing update statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("is", $medicine_quantity, $medicine_id);
} else {
    // Medicine does not exist, so insert new record
    $insertSql = "INSERT INTO admin_medicine_inventory (medicine_id, medicine_name, medicine_quantity, date_manufactured, expiration_date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertSql);

    if ($stmt === false) {
        die("Error preparing insert statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("issss", $medicine_id, $medicine_name, $medicine_quantity, $date_manufactured, $expiration_date);
}

// Execute the statement
if ($stmt->execute()) {
    echo "Record processed successfully.";
    header("Location: adminmedicine.php");
    exit(); // Use exit after header redirection
} else {
    echo "Error executing statement: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
