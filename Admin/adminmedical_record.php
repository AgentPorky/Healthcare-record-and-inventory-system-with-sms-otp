<?php

require 'db_conn.php';

if (!$conn) {
    echo "Connection failed!";
    exit();
}

// Query to select data from the table
$sql = "SELECT * FROM medical_record";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Records</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    
</head>
<body>

<div class="container table-container">
    <?php
    // Check if there are results and display them
    if ($result->num_rows > 0) {
        echo "<table class='table table-striped table-hover table-bordered'>
                <thead>
                    <tr>
                        <th>Consultation ID</th>
                        <th>Health ID</th>
                        <th>Patient ID</th>
                        <th>Patient Name</th>
                        <th>Medicine ID</th>
                        <th>Medicine Name</th>
                        <th>Quantity</th>
                        <th>Time</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['consultation_id'] . "</td>
                    <td>" . $row['healthcare_id'] . "</td>
                    <td>" . $row['patient_id'] . "</td>
                    <td>" . $row['patient_name'] . "</td>
                    <td>" . $row['medicine_id'] . "</td>
                    <td>" . $row['medicine_name'] . "</td>
                    <td>" . $row['quantity'] . "</td>
                    <td>" . $row['time_'] . "</td>
                    <td>" . $row['date_'] . "</td>
                    <td class='btn-container'>
                        <button class='btn btn-success' onclick=\"window.location.href='?medicineId=" . $row['medicine_id'] . "'\">Edit</button>
                        <button class='btn btn-danger' onclick=\"window.location.href='?id=" . $row['medicine_id'] . "'\">Delete</button>
                    </td>
                </tr>";
        }
               
    

        echo "</tbody></table>";
    } else {
        echo "<div class='alert alert-warning'>No records found.</div>";
    }

    // Close the database connection
    $conn->close();
    ?>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<div class="text-center">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <button type="reset" class="btn btn-info">RESET</button>
                    <button type="button" onclick="window.location.href='adminhomepage.php'" class="btn btn-warning">MENU</button>
                    <button type="button" onclick="window.location.href='adminconsultation.php'" class="btn btn-danger"> CONSULTATION</button>
                </div>
</body>
</html>
