<?php

require 'db_conn.php';

if(!$conn){
   echo 'Connection failed!';
   exit();
}

// Get data from the form
$consultation_id = $_POST['consultation_id'];
$health_id = $_POST['healthcare_id'];
$patient_id = $_POST['userpatient_id'];
$patient_name = $_POST['patient_name'];
$medicine_id = $_POST['medicine_id'];
$medicine_name = $_POST['medicine_name'];
$quantity = $_POST['quantity'];
$time_ = $_POST['time'];
$date_ = $_POST['date'];

// Check if the medicine exists in the medicine table
$selectMedicineQuery = "SELECT medicine_quantity FROM admin_medicine_inventory WHERE medicine_name = '$medicine_name'";
$resultMedicine = $conn->query($selectMedicineQuery);

if ($resultMedicine && $resultMedicine->num_rows > 0) {
   // Medicine exists, proceed with subtraction and insertion

   // Get the current quantity from the medicine table
   $rowMedicine = $resultMedicine->fetch_assoc();
   $currentQuantity = $rowMedicine['medicine_quantity'];

   // Check if there are enough medicines in stock
   if ($currentQuantity >= $quantity) {
      // Perform subtraction in the medicine table
      $updateMedicineQuery = "UPDATE admin_medicine_inventory SET medicine_quantity = medicine_quantity - $quantity WHERE medicine_name = '$medicine_name'";
      $conn->query($updateMedicineQuery);

      // Insert data into the consultation table
      $insertConsultationQuery = "INSERT INTO medical_record (consultation_id, healthcare_id, patient_id, patient_name, medicine_id, medicine_name, quantity, time_, date_) 
                                  VALUES ('$consultation_id', '$health_id', '$patient_id', '$patient_name', '$medicine_id', '$medicine_name', '$quantity', '$time_', '$date_')";

      if ($conn->query($insertConsultationQuery) === TRUE) {
         echo '
            <script type="text/javascript">
               alert("Saved Record");
               window.location = "adminmedical_record.php"; 
            </script>
         ';
      } else {
         echo "Error: " . $insertConsultationQuery . "<br>" . $conn->error;
      }
   } else {
      // Not enough medicines in stock
      echo '
      <script type="text/javascript">
         alert("Error: Not enough medicines in stock.");
         window.location = "adminmedicine.php"; 
      </script>
   ';
      exit();
   }
} else {
   // Medicine does not exist in the medicine table
   echo "Error: Medicine not found.";
}

$conn->close();
?>
