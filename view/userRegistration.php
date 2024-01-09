<?php
include 'session_check.php';
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/userRegistration.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php

            include 'navBar.php';

            ?>
            <div class="col py-3">
                <div class="Main-Container">
                    <h2>User Registration Form</h2>
                    <form name="myform" action="../controller/userRegistrationAction.php" method="POST"
                        class="form-group" onsubmit="return validateform()">
                        <div class="regDetails">

                            <p>First Name</p><input type="text" name="fname" id="fname"
                                placeholder="Enter your first name" class="form-control">

                            <p>Last Name</p><input type="text" name="lname" id="lname"
                                placeholder="Enter your last name" class="form-control">

                            <p>E-mail Address</p><input type="text" name="email" id="email"
                                placeholder="Enter an valid email address" class="form-control">

                            <p>Division</p><select name="division" id="division" class="form-control">
                                <option value="">Select your division</option>
                                <?php

                                while ($row = mysqli_fetch_array($result)) {
                                    $division_id = $row["division_Id"];
                                    echo "<option value='" . $division_id . "'>" . $row["division_name"] . "</option>";
                                }

                                ?>
                            </select><br>

                            <p>User Type</p><select name="userType" id="userType" class="form-control">
                                <option value="">Select User Type</option>
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select><br>

                            <p>Password</p><input type="password" name="password" id="password"
                                placeholder="Enter a valid password" class="form-control">

                            <p>Confirm Password</p><input type="password" name="confirmpassword" id="confirmpassword"
                                placeholder="Re-enter the password" class="form-control">

                        </div>

                        <div class="error-msg" id="errorMsg">

                        </div>

                        <br>
                        <div class="Buttons">
                            <button class="btn btn-primary" type="submit">Register</button>
                            <button class="btn btn-primary" type="reset">Clear</button>
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