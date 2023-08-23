<?php
    session_start();
    if(isset( $_POST['adminId'])){
        $adminId = $_POST['adminId'];
        $adminPassword = $_POST['password'];

        if($adminId == "admin" && $adminPassword == "pass"){
            header("Location: leaveApprove.php");
            $_SESSION['adminSession'] = 'true';
        }
        else{
            echo "Login denied";
        }
    }

    $conn = mysqli_connect('localhost','root','','leavemanagementdb');
    if(!$conn){
        echo "Connection Error";
    }

    $query = "SELECT ApplicationId, empId,leaveCode,applDate,leaveFrom, leaveTo,leaveReason FROM leaveapplication WHERE leaveApproved='NO'";
    $result = mysqli_query($conn,$query);

?>