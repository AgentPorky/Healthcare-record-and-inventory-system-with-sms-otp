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
    <link rel="stylesheet" href="../Css/patientrecordstyles.css">

    <title>ADMIN_PATIENT_RECORD</title>
</head>
<body>
<body class="body">
    <!-- Sidebar for navigation links -->
    <aside>
        <div id="sidenav" class="col-2">
                <li class="nav-item">
                    <a href="adminconsultation.php" class="nav-link">
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

<!-- The Modal -->
<div class="modal fade" id="addPatientModal" tabindex="-1" aria-labelledby="addPatientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPatientModalLabel">Add Patient Here</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="adminpatientrec_process.php" method="post">
                    <div class="mb-3">
                        <label for="patient_id" class="form-label">Patient ID:</label>
                        <input type="text" class="form-control" id="patient_id" name="patient_id" placeholder="Enter patient ID" required>
                    </div>

                    <div class="mb-3">
                        <label for="patient_name" class="form-label">Patient Name:</label>
                        <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Enter patient name" required>
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age:</label>
                        <input type="number" class="form-control" id="age" name="age" placeholder="Enter Patient Age" required>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Gender:</label>
                        <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter Patient Gender" required>
                    </div>

                    <div class="mb-3">
                        <label for="birthdate" class="form-label">Birthday:</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="address" class="form-label">Address:</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Input Patient Address" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" form="patientForm" class="btn btn-primary">SAVE</button>
                <button type="reset" form="patientForm" class="btn btn-info">RESET</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <main>
    <div class="container col-10 bg-light">
        <h3>Add Patient Record</h3>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addPatientModal">
            Add Patient
        </button>
    </div>
    <?php
    require 'db_conn.php';
    // Check connection
    if (!$conn) {
        echo "Connection failed!";
        exit();
    }

    // Query to select data from the table
    $sql = "SELECT * FROM adminpatient_record";
    $result = $conn->query($sql);
    ?>
   
    <!-- Responsive Table List -->
    <div class="table-responsive">
    <?php
    // Check if there are results and display them
    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Patient ID</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Birthday</th>
                        <th>Address</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['patient_id'] . "</td>
                    <td>" . $row['patient_name'] . "</td>
                    <td>" . $row['age'] . "</td>
                    <td>" . $row['gender'] . "</td>
                    <td>" . $row['birthdate'] . "</td>
                    <td>" . $row['address'] . "</td>
                    <td class='btn-container'>
                        <button class='btn btn-success' onclick=\"window.location.href='editpatientrec.php?id=" . $row['patient_id'] . "'\">Edit</button>
                        <button class='btn btn-danger' onclick=\"window.location.href='deletepatientrec.php?id=" . $row['patient_id'] . "'\">Delete</button>
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
    </div> <!-- End of Responsive Table -->
    
    </main>

</body>
</html>