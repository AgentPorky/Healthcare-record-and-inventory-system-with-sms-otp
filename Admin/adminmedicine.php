<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formdesign.css">
    <!-- Link the external table style CSS -->
    <link rel="stylesheet" href="../css/tableStyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Medicine Form and List</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-7">
            <form class="form" action="adminmedicine_process.php" method="post">
               <h1>ADD MEDICINE HERE</h1>

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

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <button type="reset" class="btn btn-info">RESET</button>
                    <button type="button" onclick="window.location.href='adminhomepage.php'" class="btn btn-warning">MENU</button>
                    <br><br>
                    <button type="button" onclick="window.location.href='adminconsultation.php'" class="btn btn-danger"> CONSULTATION</button>
                </div>
            </form>
        </div>
    </div>

    <?php
    
    require 'db_conn.php';
    
    if (!$conn) {
        echo "Connection failed!";
        exit();
    }

    // Query to select data from the table
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
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
