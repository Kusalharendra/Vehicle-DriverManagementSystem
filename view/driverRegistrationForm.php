<?php
include 'session_check.php';
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/driverRegistrationForm.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php

            include 'navBar.php';

            ?>
            <div class="col py-3">
                <div class="Main-Container">

                    <h2>Driver Registration</h2>

                    <form action="../controller/driverSubmitFormAction.php" method="POST" class="form-group">

                        <div class="row">
                            <div class="col-4">
                                <legend>Personal Details</legend>

                                <div class="Name-Fields">
                                    <p>First Name</p> <input class="form-control" type="text" name="first-name"
                                        placeholder="Enter your first name" required>
                                    <p>Middle Name</p> <input class="form-control" type="text" name="middle-name"
                                        placeholder="Enter your middle name">
                                    <p>Last Name</p> <input class="form-control" type="text" name="last-name"
                                        placeholder="Enter your last name" required>
                                </div>

                                <div class="Gender">
                                    <label><b>Gender : </b></label>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio-male" name="gender"
                                            value="male" checked>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input type="radio" class="form-check-input" id="radio-female" name="gender"
                                            value="female">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                </div><br>

                                <div class="DOB-Field">
                                    <p>Date of Birth</p><input class="form-control" type="date" name="dob" required>
                                </div>

                                <div class="Email-Field">
                                    <p>E-mail Address</p><input class="form-control" type="text" name="email"
                                        placeholder="Enter your e-mail">
                                </div>
                            </div>

                            <div class="col-4">
                                <legend>Identity Details</legend>

                                <div class="Mobile-Num-Field">
                                    <p>Contact Number</p><input class="form-control" type="text" name="contactNo"
                                        required placeholder="Enter your mobile number">
                                </div>

                                <div class="NIC-Field">
                                    <p>NIC Number</p><input class="form-control" type="text" name="nic" required
                                        placeholder="Enter your NIC number ">
                                </div>

                                <div class="Port-Id-Num">
                                    <p>Port ID Number</p><input class="form-control" type="text" name="portId" required
                                        placeholder="Enter your port id number ">
                                </div>

                                <div class="Division">
                                    <p>Current Division</p><select name="division" id="division" class="form-control">
                                        <option value="1">Select your division</option>
                                    </select>
                                </div>
                                
                                <div class="Driving-Licence-Issued-Date">
                                    <p>Driving Licence Issued Date</p><input class="form-control" type="date"
                                        name="drivingLicenceIssuedDate" required>
                                </div>

                                <div class="Driving-Licence-Expiry-Date">
                                    <p>Driving Licence Expiry Date</p><input class="form-control" type="date"
                                        name="drivingLicenceExpiryDate" required>
                                </div>

                                <div class="Driving_licence">
                                <p>Driving License Number</p>
                                <input class="form-control" type="text" name="drivingLicenceId" required placeholder="Enter your driving license number">
                                </div>

                            </div>

                            <div class="col-4">
                                <legend>Residential Details</legend>


                                <div class="CurrentAddress">
                                    <p>Current Address</p>
                                    <input class="form-control" type="text" name="currentAddressLine1" required
                                        placeholder="Address Line 01" required>
                                    <input class="form-control" type="text" name="currentAddressLine2" required
                                        placeholder="Address Line 02" required>
                                    <input class="form-control" type="text" name="currentAddressLine3" required
                                        placeholder="Address Line 03">
                                </div>

                                <div class="PermenantAddress">
                                    <p>Permenant Address</p>
                                    <input class="form-control" type="text" name="permenantAddressLine1" required
                                        placeholder="Address Line 01">
                                    <input class="form-control" type="text" name="permenantAddressLine2" required
                                        placeholder="Address Line 02">
                                    <input class="form-control" type="text" name="permenantAddressLine3"
                                        placeholder="Address Line 03">
                                </div>

                                <div class="District">
                                    <p>District</p>
                                    <input class="form-control" type="text" name="district" required
                                        placeholder="Enter your district">
                                </div>

                                <div class="Province">
                                    <p>Province</p>
                                    <input class="form-control" type="text" name="province" required
                                        placeholder="Enter your Province">
                                </div>


                            </div>

                        </div>
                        <div class="submitResetButtons">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                            <button class="btn btn-primary" type="reset">Reset form</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</footer>

</html>