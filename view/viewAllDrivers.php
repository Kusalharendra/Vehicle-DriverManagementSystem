<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Driver Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../css.viewAllDrivers.css">
</head>

<body>
    <div class="row">
        <!-- <div>
            <?php

            include 'navigation.php';

            ?>
        </div> -->

        <div>
            <div class="Main-Container">
            <h2 class="display-6">List of Drivers</h2>
            <br>

            <table class="table table-hover table-bordered border-primary">
                <thead>
                    <tr>
                        <th>Port ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>DOB</th>
                        <th>Contact</th>
                        <th>E-mail</th>
                        <th>NIC</th>
                        <th>Division</th>
                        <th>Driving Licence ID</th>
                        <th>Driving Licence Issued Date</th>
                        <th>Driving Licence Expiry Date</th>
                        <th>Current Address</th>
                        <th>Permenant Address</th>
                        <th>District</th>
                        <th>Province</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php

                    $connection = mysqli_connect("127.0.0.1:3308", "root", "", "vehicle_db");

                    $result = mysqli_query($connection, "SELECT * from driver");

                    while ($row = mysqli_fetch_array($result)) {

                        echo "<tr>
                <td>" . $row["portId"] . "</td>
                <td>" . $row["firstName"] . "</td>
                <td>" . $row["middleName"] . "</td>
                <td>" . $row["lastName"] . "</td>
                <td>" . $row["gender"] . "</td>
                <td>" . $row["dob"] . "</td>
                <td>" . $row["contact"] . "</td>
                <td>" . $row["email"] . "</td>
                <td>" . $row["nic"] . "</td>
                <td>" . $row["division"] . "</td>
                <td>" . $row["drivingLicenceId"] . "</td>
                <td>" . $row["drivingLicenceIssuedDate"] . "</td>
                <td>" . $row["drivingLicenceExpiryDate"] . "</td>
                <td>" . $row["currentAddressLine1"] . "" . $row["currentAddressLine2"] . "" . $row["currentAddressLine3"] . "</td>
                <td>" . $row["permenantAddressLine1"] . "" . $row["permenantAddressLine2"] . "" . $row["permenantAddressLine3"] . "</td>
                <td>" . $row["district"] . "</td>
                <td>" . $row["province"] . "</td>
                <td>
                    <a class='btn btn-primary btn-sm' href='update'>Update</a>
                    <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                </td>

            </tr>";
                    }

                    ?>
                </tbody>
            </table>
            <a class="btn btn-primary" href="home.php" role="button">Home</a>
        </div>
            </div>
            
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>