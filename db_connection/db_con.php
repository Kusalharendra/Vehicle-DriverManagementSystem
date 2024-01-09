<?php
function OpenCon()
{
    $dbhost = "127.0.0.1:3308";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "vehicle_db";
    // Create connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("Connect failed: %s\n" . $conn->error);
    return $conn;
}
function CloseCon($conn)
{
    $conn->close();
}
?>