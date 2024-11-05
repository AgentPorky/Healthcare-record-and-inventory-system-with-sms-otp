<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formdesign.css">
    <link rel="stylesheet" href="../css/adminmedicinestyles.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css">
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Medicine Form and List</title>
</head>
<body>
<aside>
    <!-- SIDEBAR NAVIGATOR -->
    <div id="sidenav" class="col-2">
        <i class="fa-solid fs-4 me-2"></i>
        <span class="fs-4 text-white h4">DASHBOARD</span>
        <hr class="text-white">
        <ul class="nav nav-pills flex-column mb-auto">
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
                <a href="adminmedical_record.php" class="nav-link">
                    <i class="fa-solid fa-file-medical me-2"></i>
                    <span class="d-none d-sm-inline text-white">Medical Record</span>
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a href="adminlogin.php" class="nav-link">
                    <i class="fa-solid fa-file-medical me-2"></i>
                    <span class="d-none d-sm-inline text-white">LOG OUT</span>
                </a>
            </li>
            <hr>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fa-solid fa-file-medical me-2"></i>
                    <span class="d-none d-sm-inline text-white">ACTIVITY LOG</span>
                </a>
                <hr>
            </li>
            <li class="nav-item">
                <a href="adminlogin.php" class="nav-link">
                    <i class="fa-solid fa-file-medical me-2"></i>
                    <span class="d-none d-sm-inline text-white">REPORT</span>
                </a>
            </li>
            <hr>
        </ul>
    </div>
</aside>

<header>
    <!-- HEADER NAVIGATION BAR -->
    <nav class="navbar navbar-expand-sm ">
        <div class="container-fluid d-flex justify-content-center align-items-center">
            <h5 class="text-white">PANGHIAWAN BARANGAY HEALTHCARE</h5>
        </div>
    </nav>
</header>

<!-- MODAL BUTTON -->
<div class="container mt-4">
    <h2 class="text-center">Medicine Inventory Management</h2>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#medicineModal">
        Add Medicine
    </button>
</div>

<!-- The Modal for Adding Medicine -->
<div id="medicineModal" class="modal fade" tabindex="-1" aria-labelledby="medicineModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="medicineModalLabel">ADD MEDICINE HERE</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="medicineForm" action="adminmedicine_process.php" method="post">
                    <div class="form-group">
                        <label for="medicine_id">Medicine Id:</label>
                        <input type="number" class="form-control" id="medicine_id" name="medicine_id" placeholder="Enter medicine ID" required>
                    </div>

                    <div class="form-group">
                        <label for="medicine_name">Medicine Name:</label>
                        <input type="text" class="form-control" id="medicine_name" name="medicine_name" placeholder="Enter medicine name" required>
                    </div>

                    <div class="form-group">
                        <label for="medicine_quantity">Medicine Quantity:</label>
                        <input type="number" class="form-control" id="medicine_quantity" name="medicine_quantity" placeholder="Enter quantity" min="1" required>
                    </div>

                    <div class="form-group">
                        <label for="date_manufactured">Date Manufactured:</label>
                        <input type="date" class="form-control" id="date_manufactured" name="date_manufactured" required>
                    </div>

                    <div class="form-group">
                        <label for="expiration_date">Expiration Date:</label>
                        <input type="date" class="form-control" id="expiration_date" name="expiration_date" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" form="medicineForm">SAVE</button>
                <button type="reset" class="btn btn-info" form="medicineForm">RESET</button>
                <button type="button" class="btn btn-warning" data-bs-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>

<?php
// Include the database connection
require 'db_conn.php';

if (!$conn) {
    echo "Connection failed!";
    exit();
}

// Query to select data from the medicine inventory table
$sql = "SELECT * FROM admin_medicine_inventory";
$result = $conn->query($sql);
?>

<!-- Medicine Table List -->
<div class="table-container">
    <?php
    // Check if there are results and display them
    if ($result->num_rows > 0) {
        echo "<table class='table table-striped table-hover table-bordered'>
                <thead>
                    <tr>
                        <th>Medicine Id</th>
                        <th>Medicine Name</th>
                        <th>Quantity</th>
                        <th>Date Manufactured</th>
                        <th>Expiration Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['medicine_id'] . "</td>
                    <td>" . $row['medicine_name'] . "</td>
                    <td>" . $row['medicine_quantity'] . "</td>
                    <td>" . $row['date_manufactured'] . "</td>
                    <td>" . $row['expiration_date'] . "</td>
                    <td class='btn-container'>
                        <button class='btn btn-success' onclick=\"window.location.href='editmedicineinv.php?medicineId=" . $row['medicine_id'] . "'\">Edit</button>
                        <button class='btn btn-danger' onclick=\"window.location.href='deletemedicineinv.php?id=" . $row['medicine_id'] . "'\">Delete</button>
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

</body>
</html>
