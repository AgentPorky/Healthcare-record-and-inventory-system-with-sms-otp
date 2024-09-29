
<!DOCTYPE html>
  <html lang="en">
  <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ADMIN_CONSULTATION</title>
  </head>
  <body>
    
  <div class="container">
    <div class="row">
      <div class="col-md-offset-4 col-md-4">
        <form class="form" method="post" action="5consultation_process.php" id="myForm">
          <h2>Consulation ID</h2>
          <div class="form-group">
            <label for="id">Consulation ID:</label>
            <input type="number" class="form-control" id="consultationId" placeholder="Consulation ID" name="consultation_id" required="required">
          </div>
          <div class="form-group">
            <label for="first">Patient ID:</label>
            <input type="text" class="form-control" id="patientId" placeholder="Patient ID" name="patient_id" required="required">
          </div>
          <div class="form-group">
            <label for="first">Medicine ID:</label>
            <input type="text" class="form-control" id="medicineId" placeholder="Medicine ID" name="medicine_id" required="required">
          </div>
          <div class="form-group">
            <label for="first">Medicine Name:</label>
            <input type="text" class="form-control" id="medicine_name" name="medicine_name" placeholder="Medicine ID" required="required">
          </div>
          <div class="form-group">
            <label for="age">Date:</label>
            <input type="text" class="form-control" id="date" placeholder="Date" name="date_" required="required">
          </div>
         <div class="form-group">
            <label for="age">Time:</label>
            <input type="text" class="form-control" id="time" placeholder="Time" name="time_" required="required">
          </div>
          <div class="text-center">
          <button type="submit" class="btn btn-primary" ><span></span>SAVE</button>
          <button type="reset"  class="btn btn-info"><span></span>RESET</button>
          <button onclick="window.location.href='menu.php'" type="button" class="btn btn-warning"><span></span>MENU</button>
        </div>
        </form>
      </div>
    </div>
  </div>

   
  </body>
  </html>