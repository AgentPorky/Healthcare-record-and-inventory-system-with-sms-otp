<?php

require 'db_conn.php';

// Get data from post request
$patient_id = $_POST['patient_id'];
$patient_name = $_POST['patient_name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];

$sql = "INSERT INTO adminpatient_record (patient_id, patient_name, age, gender, birthdate, address) 
        VALUES ('$patient_id','$patient_name', '$age', '$gender', '$birthdate','$address')";

if ($conn->query($sql) === TRUE) {
    echo '
        <script type = "text/javascript">
            alert("Saved Record");
            window.location = "7healthcare.php";
        </script>
    ';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
