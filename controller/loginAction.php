<?php

$username = $_POST['username'];
$password = md5($_POST['password']);

include '../db_connection/db_con.php';


$conn = OpenCon();
$query = "SELECT * from user where email='$username' and password='$password' limit 1";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
CloseCon($conn);

if($row){
    session_start();
    $session_array['user_id']=$row['user_id'];
    $session_array['firstname']=$row['firstname'];
    $session_array['lastname']=$row['lastname'];
    $session_array['usertype']=$row['usertype'];
    $session_array['email']=$row['email'];
    $_SESSION['logingSt'] = $session_array;
    header("location:../view/home.php");
}else{
    header("location:../view/login.php");
}
?>