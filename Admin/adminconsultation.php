<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formdesign.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>ADMIN_CONSULTATION</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-offset-3 col-md-7">
            <form class="form" method="post" action="adminconsultation_process.php" id="myForm">
                <h1>ADD CONSULTATION HERE</h1>

                <div class="form-group">
                    <label for="consultationId">Consultation ID:</label>
                    <input type="number" class="form-control" id="consultationId" name="consultation_id" placeholder="Enter Consultation ID" required>
                </div>

                <div class="form-group">
                    <label for="healthcare_id">Health Staff ID:</label>
                    <input type="text" class="form-control" id="healthcare_id" name="healthcare_id" placeholder="Enter Health staff ID" required>
                </div>

                <div class="form-group">
                    <label for="userpatient_id">Patient ID:</label>
                    <input type="text" class="form-control" id="userpatient_id" name="userpatient_id" placeholder="Enter Patient ID" required>
                </div>

                <div class="form-group">
                    <label for="patient_name">Patient Name:</label>
                    <input type="text" class="form-control" id="patient_name" name="patient_name" placeholder="Enter Patient Name" required>
                </div>

                <div class="form-group">
                    <label for="medicine_id">Medicine ID:</label>
                    <input type="text" class="form-control" id="medicine_id" name="medicine_id" placeholder="Enter Medicine ID" required>
                </div>

                <div class="form-group">
                    <label for="medicine_name">Medicine Name:</label>
                    <input type="text" class="form-control" id="medicine_name" name="medicine_name" placeholder="Enter Medicine Name" required>
                </div>

                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter Quantity" min="1" required>
                </div>

                <div class="form-group">
                    <label for="time">Time:</label>
                    <input type="time" class="form-control" id="time" name="time" required>
                </div>

                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>

                <!-- Separate buttons with space -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">SAVE</button>
                    <button type="reset" class="btn btn-info" style="margin-left: 10px;">RESET</button>
                    <button type="button" onclick="window.location.href='adminhomepage.php'" class="btn btn-warning" style="margin-left: 10px;">MENU</button>
                    <br><br>
                    <button type="button" onclick="window.location.href='adminmedicine.php'" class="btn btn-danger" style="margin-left: 10px;">CHECK AVAILABLE MEDICINE</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
