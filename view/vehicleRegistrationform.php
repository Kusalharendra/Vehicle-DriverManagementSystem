<?php
    include 'session_check.php';
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/vehicleRegistrationform.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php

            include 'navBar.php';

            ?>
            <div class="col py-3">
            <div class="Main-Container">
                <h2>Vehicle Registration Form</h2>
                <form action="vehicleSubmitForm.php" method="POST" class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <legend>Vehicle Details</legend>
                            <div class="vehicleDtls">
                                <p>Registration No</p><input type="text" name="regNo" id="regNo"
                                    placeholder="ex: WP CAA-1234" required class="form-control">

                                <p>Chassis No</p><input type="text" name="chassisNo" id="chassisNo"
                                    placeholder="ex: PM2L515001236588" required class="form-control">

                                <p>Engine No</p><input type="text" name="engineNo" id="engineNo" placeholder="ex: 4D56"
                                    required class="form-control">

                                <p>Class of Vehicle</p><input type="text" name="vehicleCls" id="vehicleCls"
                                    placeholder="ex: Car" required class="form-control">

                                <p>Make</p><input type="text" id="make" name="make" placeholder="ex: Toyota" required
                                    class="form-control">

                                <p>Model</p><input type="text" name="model" id="model" placeholder="ex: Corolla"
                                    required class="form-control">

                                <p>Country of Origin</p><input type="text" name="origin" id="origin"
                                    placeholder="ex: Japan" required class="form-control">

                                <p>Manufactured year</p><input type="text" name="manufacture" id="manufacture"
                                    placeholder="ex: 2014" required class="form-control">

                            </div>
                        </div>

                        <div class="col-4"><br><br>
                            <div class="vehicleDtls">

                                <p>Cylinder Capacity (cc)</p><input type="text" name="cc" id="cc"
                                    placeholder="ex: 1000.00cc" required class="form-control">
                                <p><label for="fuelType">Fuel Type : </label><select name="fuelType" id="fuelType"
                                        class="form-control">
                                        <option>Select Fuel Type</option>
                                        <option value="petrol">Petrol</option>
                                        <option value="petrol">Diesel</option>
                                        <option value="petrol">Hybrid</option>
                                        <option value="petrol">Electric</option>
                                        <option value="petrol">Gas</option>
                                    </select></p><br>
                                <p><label for="transmission">Transmission Type : </label><select name="transmission"
                                        id="transmission" class="form-control">
                                        <option>Transmission Type</option>
                                        <option value="auto">Auto</option>
                                        <option value="manual">Manual</option>
                                    </select></p><br>


                                <p>Colour</p><input type="text" name="colour" id="colour" placeholder="ex: Black"
                                    required class="form-control">

                                <p>Type of Body</p><input type="text" name="body" id="body" placeholder="ex: Sedan"
                                    required class="form-control">

                                <p>Seating Capacity</p><input type="text" name="capacity" id="capacity"
                                    placeholder="ex: 4" required class="form-control">

                                <p>Weight</p><input type="text" name="vehicleWeight" id="vehicleWeight"
                                    placeholder="ex: 3200kg" required class="form-control">

                                <p>Milage</p><input type="text" name="milage" id="milage" placeholder="ex: 25 000km"
                                    class="form-control">

                                <p>Tyre Size</p><input type="text" name="tSize" id="tSize" placeholder="ex: 165/85/15"
                                    required class="form-control">
                            </div>
                        </div>

                        <div class="col-4">
                            <legend>Registration Details</legend>
                            <div class="regDetails">

                                <p><label for="status">Status :</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="brandnew">Brandnew</option>
                                        <option value="registered">Registered</option>
                                        <option value="unregistered">Unregistered</option>
                                    </select><br>
                                </p>
                                <p>Registration Date (if registered only)</p><input type="text" name="regDate"
                                    id="regDate" placeholder="ex: 2012" class="form-control">

                                <p>Provincial Council (if registered only)</p><input type="text" name="provincecouncil"
                                    id="provincecouncil" placeholder="ex: Western Province" class="form-control">
                            </div>
                            <br>
                            <div class="ownerDetails">
                                <legend>Owner's Details</legend>
                                <p>Owner Name</p><input type="text" name="ownerName" id="ownerName"
                                    placeholder="Enter owner's name here" class="form-control">

                                <p>Address</p><input type="text" name="ownerAddress" id="ownerAddress"
                                    placeholder="Enter owner's address here" class="form-control">

                                <p>Contact No</p><input type="text" name="contact" id="contact"
                                    placeholder="Enter owner's contact number here" class="form-control">

                                <p>ID no</p><input type="text" name="ownerId" id="ownerId"
                                    placeholder="Enter owner's id number here" class="form-control">
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