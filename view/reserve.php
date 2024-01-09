<?php
include 'session_check.php';
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/reserve.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php

            include 'navBar.php';

            ?>
            <div class="col py-3">
                <div class="Main-content">
                    <form action="#" class="form-group">
                        <h2>Vehicle Reservation</h2>

                        <div class="vehicleType">
                            <label for="vehicleType"><b>Vehicle Type</b></label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select a type of vehicle</option>
                                <option value="1">Car</option>
                                <option value="2">Van</option>
                                <option value="3">Motot Cycle</option>
                                <option value="4">Three Wheeler</option>
                                <option value="5">A/C Bus</option>
                                <option value="6">Non A/C Bus</option>
                                <option value="7">Crew Cab</option>
                                <option value="8">Double Cab</option>
                            </select>
                        </div>


                        <div class="dateTime">
                            <label for="date"><b>Date</b></label>
                            <input class="form-control" type="date" name="date" id="date">

                            <label for="time"><b>Time</b></label>
                            <input class="form-control" type="time" name="time" id="time">
                        </div>

                        <div class="destination">
                            <label for="destination"><b>Destination</b></label>
                            <input class="form-control" type="destination" name="destination" id="destination">
                        </div>
                        <br>
                        <div class="submitButton">
                            <button type="button" class="btn btn-primary">Submit</button>
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