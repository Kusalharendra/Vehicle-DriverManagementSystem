<link rel="stylesheet" href="../css/navBar.css">
<div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <span class="fs-5 d-none d-sm-inline">SLPA Driver & Vehicle Management System</span>
        </a>
        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
            <!-- Navbar -->
            <li class="nav-item">
                <a href="home.php" class="nav-link align-middle px-0">
                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="division.php" class="nav-link px-0 align-middle">
                    <i class="bi bi-building" style='font-size:24px'></i> <span
                        class="ms-1 d-none d-sm-inline">Divisions</span> </a>
            </li>

            <li class="nav-item">
                <a href="dashboard.php" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
            </li>
            <li>
                <a href="reserve.php" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Vehicle Reservation</span></a>
            </li>
            <li>
                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                    <i class="bi bi-car-front-fill" style='font-size:24px'></i> <span
                        class="ms-1 d-none d-sm-inline">Vehicle Details</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="vehicleRegistrationform.php" class="nav-link px-0"> <span
                                class="d-none d-sm-inline">Vehicle
                                Registration</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">View Vehicle
                                Details</span></a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">View Vehicle Service
                                Records</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Driver Details</span> </a>
                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="driverRegistrationForm.php" class="nav-link px-0"> <span
                                class="d-none d-sm-inline">Driver
                                Registration</span></a>
                    </li>
                    <li>
                        <a href="viewDriver.php" class="nav-link px-0"> <span class="d-none d-sm-inline">View Driver
                                Details</span></a>
                    </li>
                    <li>
                        <a href="viewAllDrivers.php" class="nav-link px-0"> <span class="d-none d-sm-inline">View All
                                Driver
                                Details</span></a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#" class="nav-link px-0 align-middle">
                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Administrative Support</span>
                </a>
            </li>

            <li>
                <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                    <i class="bi bi-person-circle" style="font-size:24px"></i> <span
                        class="ms-1 d-none d-sm-inline">User</span></a>
                <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                    <li class="w-100">
                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">User List</span></a>
                    </li>
                    <li>
                        <a href="userRegistration.php" class="nav-link px-0"> <span class="d-none d-sm-inline">Add new
                                User</span></a>
                    </li>
                </ul>
            </li>

        </ul><br><br>
        <div>
            <section>
                <header class="major">
                    <h4>Get in touch...</h4>
                </header>
                <div class="info-box">

                    <ul class="contact">
                        <li class="icon solid fa-envelope">Official site - <a
                                href="https://www.slpa.lk/">info@slpa.lk</a></li>
                        <li class="icon solid fa-phone">Tel - +94-11 242 12 01</li><br>
                        <li class="icon solid fa-home">
                            <h6>Sri Lanka Ports Authority Head Office Address - </h6><br>
                            Level 7, <br>HQ Colombo, <br>No. 464, <br>T.B. Jaya Mawatha, <br>Colombo 10.<br />
                        </li>
                    </ul>
                    <div class="icon-box no-border">
                        <i class="icon icon-FileBox"></i>
                        <center> <a href="tel:1984"><img
                                    src="https://www.slpa.lk/application_resources/images/tel-1984.png" height="60"
                                    alt=""></a></center>
                    </div>
            </section>
        </div>

        <hr>
        <div class="dropdown pb-4">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                <span class="d-none d-sm-inline mx-1">

                    <?php
                    if (isset($_SESSION['logingSt'])) {
                        echo $_SESSION['logingSt']['firstname'] . " " . $_SESSION['logingSt']['lastname'];
                    }
                    ?>
                </span>
            </a>

            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="../controller/logout.php">Sign out</a></li>
            </ul>

        </div>
    </div>

</div>