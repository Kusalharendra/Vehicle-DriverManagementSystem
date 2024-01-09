<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

include '../db_connection/db_con.php';


$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$division_id = $_POST['division'];
$usertype = $_POST['userType'];
$password = md5($_POST['password']);        //md5() - encrypt password using php

$conn = OpenCon();
$query = "INSERT into user (`firstname`, `lastname`, `password`, `usertype`, `division_Id`, `email`)
    value('$firstname','$lastname','$password','$usertype','$division_id','$email')";
$result = mysqli_query($conn, $query);
CloseCon($conn);

if ($result) {
    session_start();
    $_SESSION['status'] = "Registration Successful!";

    header("location:../view/login.php");
} else {
    header("location:../view/userRegistration.php");
}
?>