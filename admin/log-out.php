<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['level']);
session_destroy();
    header("Location:../page-login.php");
?>