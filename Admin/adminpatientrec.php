<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>ADMIN_PATIENT_RECORD</title>
</head>
<body>
    <?php
// DATABASE CONNECTION PARAMETERS
    $servername = "localhost";
    $username = "root"; // Note: Change to your database username
    $password = "";     // Note: Change to your database password
    $db_name = "ths_healthcare";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $db_name);

    // Check connection
    if (!$conn) {
        echo "Connection failed!";
        exit();
    }

    // Query to select data from the table
    $sql = "SELECT * FROM adminpatient_record";
    $result = $conn->query($sql);
    ?>
   
    <!-- Medicine Table List -->
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
                        <th>Birthdate</th>
                        <th>address</th>
                    </tr>
                </thead>
                <tbody>";
        
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['patient_id'] . "</td>
                    <td>" . $row['patient_name'] . "</td>
                    <td>" . $row['age'] . "</td>
                    <td>" . $row['gender'] . "</td>
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