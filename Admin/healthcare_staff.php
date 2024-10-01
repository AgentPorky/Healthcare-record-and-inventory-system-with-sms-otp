<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>HEALTHCARE_STAFF</title>
</head>
<body>
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
        echo "<table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>Healthcare ID</th>
                        <th>Healthcare staff name</th>
                        <th>Position of staff</th>
                        <th>Address</th>
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
                        <button class='btn btn-success' onclick=\"window.location.href=''>Edit</button>
                        <button class='btn btn-danger' onclick=\"window.location.href=''>Delete</button>
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