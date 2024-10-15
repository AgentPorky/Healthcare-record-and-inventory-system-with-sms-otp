<?php

require 'db_conn.php';


// Get data from post request
$health_id = $_POST['health_id'];
$healthcarestaff_name = $_POST['healthcarestaff_name'];
$position = $_POST['position_of_staff'];
$address = $_POST['address'];

$sql = "INSERT INTO admin_healthcare_unit (healthcare_id, healthcarestaff_name, position_of_staff, address ) 
        VALUES ('$health_id ','$healthcarestaff_name', '$position','$address ')";

if ($conn->query($sql) === TRUE) {
    echo '
        <script type = "text/javascript">
            alert("Saved Record");
            window.location = "healthcare_staff.php";
        </script>
    ';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
