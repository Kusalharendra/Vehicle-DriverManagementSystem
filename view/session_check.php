<?php
session_start();

if (!isset($_SESSION['logingSt'])) {
    header("location:../view/login.php");
}

?>