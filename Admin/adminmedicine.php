

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formdesign.css">

    <title>Medicine Form and List</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <form class="form" action="adminmedicine_process.php" method="post">
                <h2>Medicine</h2>

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
                </div>
            </form>
        </div>
    </div>
    <?php
    // DATA BASE CONNECTION PARAMETERS
    $servername= "localhost";
    $unmae= "root";
    $password = "";

    $db_name = "ths_healthcare";

    $conn = mysqli_connect($servername, $unmae, $password, $db_name);

    if (!$conn) {
	    echo "Connection failed!";
    }   
    ?>
    
    <!-- Medicine Table List -->
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <h2>Medicine List</h2>

            <table class="table table-bordered">
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
                <tbody>
                    <tr>
                       <td>

                       </td>
                            <button class="btn btn-success" onclick="window.location.href='edit_medicine.php?id=001'">Edit</button>
                            <button class="btn btn-danger" onclick="window.location.href='delete_medicine.php?id=001'">Delete</button>
                        </td>
                    </tr>
                    <!-- Additional rows populated dynamically from the database -->
                </tbody>
            </table>

         
        </div>
    </div>

</div>

</body>
</html>
