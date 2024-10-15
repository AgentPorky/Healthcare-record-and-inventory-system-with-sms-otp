<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>ADMIN_PATIENT_RECORD</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-7">
            <form class="form" action="adminpatientrec_process.php" method="post">
               <h1>ADD PATIENT HERE</h1>

                <div class="form-group">
                    <label for="patient_id">Patient ID:</label>
                    <input type="text" class="form-control" id="patient_id" name="patient_id" placeholder="Enter patient ID" required>
                </div>

                <div class="form-group">
                    <label for="patient_name">Patient Name:</label>
                    <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Enter patient name" required>
                </div>

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age" name="age" placeholder="Enter Patient Age" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <input type="text" class="form-control" id="gender" name="gender" placeholder="Enter Patient Gender" required>
                </div>

                <div class="form-group">
                    <label for="birthdate">Birthday:</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" required>
                </div>
                
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Input Patient Address" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <button type="reset" class="btn btn-info">RESET</button>
                    <button type="button" onclick="window.location.href='adminhomepage.php'" class="btn btn-warning">MENU</button>
                </div>
            </form>
        </div>
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
                        <button class='btn btn-success' onclick=\"window.location.href='edit.php?id=" . $row['patient_id'] . "'\">Edit</button>
                        <button class='btn btn-danger' onclick=\"window.location.href='delete.php?id=" . $row['patient_id'] . "'\">Delete</button>
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
</div>
</body>
</html>
