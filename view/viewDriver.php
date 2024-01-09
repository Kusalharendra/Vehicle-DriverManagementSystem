<?php
    include 'session_check.php';
?>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/viewDriver.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <?php

            include 'navBar.php';

            ?>
            <div class="col py-3">
                <div class="Main-Container">

                    <h2>Driver Details</h2><br>
                    <form action="../controller/viewDriverAction.php" method="post" class="form-group">

                        <P>Port ID</P><input type="text" name="portId" class="form-control" placeholder="Enter Port ID"
                            required><br>
                        <br><button class="btn btn-primary" type="submit">View</button>

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