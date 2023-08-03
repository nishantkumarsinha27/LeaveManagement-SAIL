<?php
    $adminId = $_POST['adminId'];
    $adminPassword = $_POST['adminPassword'];

    if($adminId == "admin" && $adminPassword == "pass"){
        echo "Login success";
    }
    else{
        echo "Login denied";
    }

?>