<?php

//get values from the form

$regNo = $_POST["regNo"];
$chassisNo = $_POST["chassisNo"];
$engineNo = $_POST["engineNo"];
$vehicleCls = $_POST["vehicleCls"];
$make = $_POST["make"];
$model = $_POST["model"];
$origin = $_POST["origin"];
$manufacture = $_POST["manufacture"];
$cylinderCapacity = $_POST["cc"];
$transmission = $_POST["transmission"];
$colour = $_POST["colour"];
$body = $_POST["body"];
$capacity = $_POST["capacity"];
$vehicleWeight = $_POST["vehicleWeight"];
$milage = $_POST["milage"];
$tSize = $_POST["tSize"];
$Regstatus = $_POST["status"];
$regDate = $_POST["regDate"];
$provincecouncil = $_POST["provincecouncil"];
$ownerName = $_POST["ownerName"];
$ownerAddress = $_POST["ownerAddress"];
$ownerId = $_POST["ownerId"];

//db connection

$connection = mysqli_connect("127.0.0.1:3308","root","","vehicle_db");
// if($connection){
//     echo "connection Is success";
// }else{
//     echo "connection failed";
// }

//save data to db

$result = mysqli_query($connection, "INSERT into vehicle (regNo,chassisNo,engineNo,vehicleCls,make,model,origin,manufacture,cylinderCapacity,transmission,colour,
body,capacity,vehicleWeight,milage,tSize,Regstatus,regDate,provincecouncil,ownerName,ownerAddress,ownerId)
values('$regNo','$chassisNo','$engineNo','$vehicleCls','$make',
'$model','$origin','$manufacture','$cylinderCapacity','$transmission','$colour','$body','$capacity','$vehicleWeight','$milage','$tSize','$Regstatus','$regDate',
'$provincecouncil','$ownerName','$ownerAddress','$ownerId')");

if($result){
    echo "<script>alert('Successfully Saved!!');</script>";
}else{
    echo "<script>alert('Error! Please try again.');</script>";
}

?>