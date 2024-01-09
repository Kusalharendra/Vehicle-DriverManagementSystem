<?php
session_start();
unset($_SESSION['logingSt']);
header("location:../view/login.php");
?>