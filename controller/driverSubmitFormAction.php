<?php

include '../db_connection/db_con.php';

$firstName = $_POST["first-name"];
$middleName = $_POST["middle-name"];
$lastName = $_POST["last-name"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$contact = $_POST["contactNo"];
$email = $_POST["email"];
$nic = $_POST["nic"];
$portId = $_POST["portId"];
$division = $_POST["division"];
$drivingLicenceId = $_POST["drivingLicenceId"];
$drivingLicenceIssuedDate = $_POST["drivingLicenceIssuedDate"];
$drivingLicenceExpiryDate = $_POST["drivingLicenceExpiryDate"];
$currentAddressLine1 = $_POST["currentAddressLine1"];
$currentAddressLine2 = $_POST["currentAddressLine2"];
$currentAddressLine3 = $_POST["currentAddressLine3"];
$permenantAddressLine1 = $_POST["permenantAddressLine1"];
$permenantAddressLine2 = $_POST["permenantAddressLine2"];
$permenantAddressLine3 = $_POST["permenantAddressLine3"];
$district = $_POST["district"];
$province = $_POST["province"];

$conn = OpenCon();

$query = "INSERT into driver values ('$firstName','$middleName','$lastName','$gender','$dob','$contact','$email','$nic',
'$portId','$division','$drivingLicenceId','$drivingLicenceIssuedDate','$drivingLicenceExpiryDate',
'$currentAddressLine1','$currentAddressLine2','$currentAddressLine3','$permenantAddressLine1','$permenantAddressLine2','$permenantAddressLine3',
'$district','$province')";

$result = mysqli_query($conn, $query);

CloseCon($conn);

if($result){
    echo "<script>alert('Successfully Saved!!');</script>";
    header("location:driverRegistrationForm.html");
}else{
    echo "<script>alert('Error! Please try again.');</script>";
}
?>