<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="../Css/adminhomepagestyles.css">
    <title>ADMIN_HOME_PAGE</title>

</head>
<body class="body">
    <aside>
        <!--SIDEBAR NAVIGATOR-->
        <div id="sidenav" class="col-2">
            <i class="fa-solid fs-4 me-2"></i>
            <span class="fs-4 text-white h4">DASHBOARD</span>
            <hr class="text-white">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="adminconsultation.php" class="nav-link">
                        <i class="fa-solid fa-stethoscope me-2"></i>
                        <span class="d-none d-sm-inline text-white">Consultation</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="adminmedicine.php" class="nav-link">
                        <i class="fa-solid fa-pills me-2"></i>
                        <span class="d-none d-sm-inline text-white">Medicine Inventory</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="healthcare_staff.php" class="nav-link">
                        <i class="fa-solid fa-user-nurse me-2"></i>
                        <span class="d-none d-sm-inline text-white">Healthcare Staff</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="adminpatientrec.php" class="nav-link">
                        <i class="fa-solid fa-user me-2"></i>
                        <span class="d-none d-sm-inline text-white">Patient Record</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="adminmedical_record.php" class="nav-link">
                        <i class="fa-solid fa-file-medical me-2"></i>
                        <span class="d-none d-sm-inline text-white">Medical Record</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="adminlogin.php" class="nav-link">
                        <i class="fa-solid fa-file-medical me-2"></i>
                        <span class="d-none d-sm-inline text-white">LOG OUT</span>
                    </a>
                </li>
                <hr>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-solid fa-file-medical me-2"></i>
                        <span class="d-none d-sm-inline text-white">ACTIVITY LOG</span>
                    </a>
                <hr>
                </li>
                <li class="nav-item">
                    <a href="adminlogin.php" class="nav-link">
                        <i class="fa-solid fa-file-medical me-2"></i>
                        <span class="d-none d-sm-inline text-white">REPORT</span>
                    </a>
                </li>
                <hr>
            </ul>
        </div>
        
    </aside>
    <header>
        <!--HEADER NAVIGATION BAR-->
        <nav class="navbar navbar-expand-sm ">
            <div class="container-fluid d-flex justify-content-center align-items-center">
                <h5 class="text-white ">PANGHIAWAN BARANGAY HEALTHCARE</h5>

                <!-- <ul class="navbar-nav mx-auto"> <!-- Use mx-auto for centering 
                    <li class="nav-item">
                        <a class="nav-link" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ABOUT US</a>
                    </li>
                </ul> -->
            </div>
        </nav>
    </header>

        <!--MAIN CONTENT OF THE HOME PAGE-->
    <main>
        <div class="main-content "> <!-- Main content area for the card -->
            <div id="maincard"class="card" style="width:50 18rem;">
                <div class="card-body">
                    <h5 class="card-title fa-solid fa-ghost"></h5>
                    <p class="card-text h5">WELCOME ADMINISTRATOR.</p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
             
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
