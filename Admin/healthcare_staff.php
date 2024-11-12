<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom style -->
    <link rel="stylesheet" href="../Css/adminhealthcarestuffstyless.css">
    <title>HEALTHCARE_STAFF</title>
</head>

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
 <!-- Button to Open the Modal -->
 

    <!-- The Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Healthcare Staff</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="healthcare_staff_process.php" method="post">
                        <div class="form-group">
                            <label for="healthcare_id">Health ID:</label>
                            <input type="text" class="form-control" id="healthcare_id" name="health_id" placeholder="Enter Healthcare ID" required>
                        </div>
                        <div class="form-group">
                            <label for="healthcarestaff_name">Healthcare Staff Name:</label>
                            <input type="text" class="form-control" id="healthcarestaff_name" name="healthcarestaff_name" placeholder="Input Staff name" required>
                        </div>
                        <div class="form-group">
                            <label for="position_of_staff">Position of Staff:</label>
                            <input type="text" class="form-control" id="position_of_staff" name="position_of_staff" placeholder="Position of the staff" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Input Patient Address" required>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">SAVE</button>
                            <button type="reset" class="btn btn-info">RESET</button>
                            <button type="button" class="btn btn-warning" data-dismiss="modal">CLOSE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <main>
    <div class="container col-10 bg-light">
            <h3>Add Healthcare Staff</h3>
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal">Click to add medicine</button>
            
        </div>

        <!-- Medicine Table List -->
        <div class="table-container table-responsive text-center">  
            <div class="table-responsive">
                <div class="search-container">
                    <input type="text" id="search-box" placeholder="Search..." class="search-box">
                </div>
            <?php
            require 'db_conn.php';
            // Check connection
            if (!$conn) {
                echo "Connection failed!";
                exit();
            }

            // Query to select data from the table
            $sql = "SELECT * FROM admin_healthcare_unit";
            $result = $conn->query($sql);

            // Check if there are results and display them
            if ($result->num_rows > 0) {
                echo "<table class='table table-bordered table-sm' style='max-width: 100%;'>
                        <thead>
                            <tr>
                                <th>Select</th>
                                <th>Healthcare ID</th>
                                <th>Healthcare Staff Name</th>
                                <th>Position of Staff</th>
                                <th>Address</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td><input type='checkbox' class='row-checkbox'></td>
                            <td>" . $row['healthcare_id'] . "</td>
                            <td>" . $row['healthcarestaff_name'] . "</td>
                            <td>" . $row['position_of_staff'] . "</td>
                            <td>" . $row['address'] . "</td>
                            <td>
                                <button class='btn btn-success btn-xs' onclick=\"window.location.href='edithealthcarestaff.php?id=" . $row['healthcare_id'] . "'\">Edit</button>
                                <button class='btn btn-danger btn-xs' onclick=\"window.location.href='deletehealthcarestaff.php?healthcare_id=" . $row['healthcare_id'] . "'\">Delete</button>
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
    </main>
</body>
</html>
