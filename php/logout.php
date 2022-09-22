<?php
session_start();
unset($_SESSION['userid']);
header('location:../php/login.php');
?>