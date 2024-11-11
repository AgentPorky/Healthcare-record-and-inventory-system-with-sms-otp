  <!-- Medicine Inventory Table -->
   <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="sampletable.css" class="href">

    <title>Tablesample</title>
   </head>
   <body>
    
   </body>
   </html>
  <div class="table-responsive">
            <?php
            require '../Admin/db_conn.php';
            $sql = "SELECT * FROM admin_medicine_inventory";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table class='table table-bordered table-hover text-center'>
                        <thead class='table-dark'>
                            <tr>
                                <th>Select</th>
                                <th>Medicine ID</th>
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
                            <td><input type='checkbox'></td>
                            <td>{$row['medicine_id']}</td>
                            <td>{$row['medicine_name']}</td>
                            <td>{$row['medicine_quantity']}</td>
                            <td>{$row['date_manufactured']}</td>
                            <td>{$row['expiration_date']}</td>
                            <td>
                                <button class='btn btn-sm btn-success'><i class='fa-solid fa-edit'></i> Edit</button>
                                <button class='btn btn-sm btn-danger'><i class='fa-solid fa-trash'></i> Delete</button>
                            </td>
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<div class='alert alert-warning'>No records found.</div>";
            }
            ?>
        </div>
    </main>