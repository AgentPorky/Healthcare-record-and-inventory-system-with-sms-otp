<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>HEALTHCARE_STAFF</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-7">
                <form class="form" action="healthcare_staff_process.php" method="post">
                    <h1>ADD_HEALTHCARE_STAFF</h1>
                    <div class="form-group">
                        <label for="healthcare_id">Health ID:</label>
                        <input type="text" class="form-control" id="healthcare_id" name="health_id" placeholder="Enter Healthcare ID" required>
                    </div>
                    <div class="form-group">
                        <label for="healthcarestaff_name">Healthcare Staff Name:</label>
                        <input type="text" class="form-control" id="healthcarestaff_name" name="healthcarestaff_name" placeholder="Input Staff name" required>
                    </div>
                    <div class="form-group">
                        <label for="position_of_staff">Position of staff:</label>
                        <input type="text" class="form-control" id="position_of_staff" name="position_of_staff" placeholder="Position of the staff" required>
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
    $sql = "SELECT * FROM admin_healthcare_unit";
    $result = $conn->query($sql);
    ?>
   
    <!-- Medicine Table List -->
    <?php
    // Check if there are results and display them
    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered table-sm' style='max-width: 100%;'>
                <thead>
                    <tr>
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
    </body>
</html>
