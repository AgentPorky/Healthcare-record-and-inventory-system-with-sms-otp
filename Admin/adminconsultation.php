<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS for styling -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    
    <!-- Bootstrap JavaScript bundle for modal and other components -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script For toggleAll in the table -->
    
    <!-- Custom CSS file for additional styles -->
    <link rel="stylesheet" href="../Css/adminconsultationstyles.css">
    <title>TESTING_KIT_CONSULTATIONt</title>
</head>
<body>
<body class="body">
    <!-- Sidebar for navigation links -->
    <aside>
        <div id="sidenav" class="col-2">
                <li class="nav-item">
                    <a href="adminhomepage.php" class="nav-link">
                        <i class="fa-solid fa-hospital me-2"></i>
                        <span class="d-none d-sm-inline text-white">DASHBOARD</span>
                    </a>
                </li>
                <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <!-- Each list item represents a link to a different page -->
                <li class="nav-item">
                    <a href="adminconsultation.php" class="nav-link">
                        <i class="fa-solid fa-stethoscope me-2"></i>
                        <span class="d-none d-sm-inline text-white">Consultation</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="adminmedicine.php" class="nav-link">
                        <i class="fa-solid fa-pills me-2"></i>
                        <span class="d-none d-sm-inline text-white">Medicine Inventory</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="healthcare_staff.php" class="nav-link">
                        <i class="fa-solid fa-user-nurse me-2"></i>
                        <span class="d-none d-sm-inline text-white">Healthcare Staff</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="adminpatientrec.php" class="nav-link">
                        <i class="fa-solid fa-user me-2"></i>
                        <span class="d-none d-sm-inline text-white">Patient Record</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-chart-line me-2"></i>
                        <span class="d-none d-sm-inline text-white">Report</span>
                    </a>
                 <hr>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-history me-2"></i>
                        <span class="d-none d-sm-inline text-white">Activity Log</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="adminlogin.php" class="nav-link">
                        <i class="fa-solid fa-sign-out-alt me-2"></i>
                        <span class="d-none d-sm-inline text-white">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Header Navigation Bar -->
    <header>
        <nav class="navbar navbar-expand-sm" > <!-- Offset for sidebar -->
            <div class="logo-text-container">
                <img src="../Photos/logo.png" alt="Healthcare Logo" class="logo">
                <p class="logo-text text-white h3">Panghiawan Barangay Healthcare</p>
            </div>
        </nav>
    </header>

    <main>
            <!-- Button to Open the Consultation Modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addConsultationModal">
        Add Consultation
    </button>

<!-- Add Consultation Modal -->
<div class="modal fade" id="addConsultationModal" tabindex="-1" aria-labelledby="addConsultationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addConsultationModalLabel">Add Consultation Here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Consultation Form -->
                <form id="consultationForm" method="post" action="adminconsultation_process.php">
                    <div class="mb-3">
                        <label for="consultationId" class="form-label">Consultation ID:</label>
                        <input type="number" class="form-control" id="consultationId" name="consultation_id" placeholder="Enter Consultation ID" required>
                    </div>

                    <div class="mb-3">
                        <label for="healthcare_id" class="form-label">Health Staff ID:</label>
                        <input type="text" class="form-control" id="healthcare_id" name="healthcare_id" placeholder="Enter Health Staff ID" required>
                    </div>

                    <div class="mb-3">
                        <label for="userpatient_id" class="form-label">Patient ID:</label>
                        <input type="text" class="form-control" id="userpatient_id" name="userpatient_id" placeholder="Enter Patient ID" required>
                    </div>

                    <div class="mb-3">
                        <label for="patient_name" class="form-label">Patient Name:</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Enter Patient Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="medicine_id" class="form-label">Medicine ID:</label>
                        <input type="text" class="form-control" id="medicine_id" name="medicine_id" placeholder="Enter Medicine ID" required>
                    </div>

                    <div class="mb-3">
                        <label for="medicine_name" class="form-label">Medicine Name:</label>
                        <input type="text" class="form-control" id="medicine_name" name="medicine_name" placeholder="Enter Medicine Name" required>
                    </div>

                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity:</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" min="1" required>
                    </div>

                    <div class="mb-3">
                        <label for="time" class="form-label">Time:</label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>

                    <div class="mb-3">
                        <label for="date" class="form-label">Date:</label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="consultationForm" class="btn btn-primary">Save</button>
                <button type="reset" form="consultationForm" class="btn btn-info">Reset</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
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

<div class="container table-container ">
    <?php
    // Check if there are results and display them
        if ($result->num_rows > 0) 
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
            ?>

    </main>

    
</body>
</html>