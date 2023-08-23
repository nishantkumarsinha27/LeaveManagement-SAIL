<?php
session_start();

session_unset();

header("Location: employeeLogin.php");
?>