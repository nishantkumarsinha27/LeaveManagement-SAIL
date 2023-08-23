<?php

    $conn = mysqli_connect('localhost','root','','leavemanagementdb');
    if(!$conn){
        echo "Connection Error";
    }
    $leaveApprovedOn = date('Y-m-d');

    //Reject code
    if(isset($_GET['rejectId'])){
        $id = $_GET['rejectId'];
        

        $query = "UPDATE leaveapplication SET leaveApproved='REJECTED', leaveApprovedOn='$leaveApprovedOn' WHERE ApplicationId = $id";
        echo $query;
        $result = mysqli_query($conn,$query);

        if($result){
            header("Location: leaveApprove.php");
            echo 'alert("Approved")';
        }
        else{
            echo "Failed";
        }
    }

    //Approve code
    if(isset($_GET['approveId'])){
        $id = $_GET['approveId'];
        

        $query = "UPDATE leaveapplication SET leaveApproved='YES', leaveApprovedOn='$leaveApprovedOn' WHERE ApplicationId = $id";
        echo $query;
        $result = mysqli_query($conn,$query);

        if($result){
            header("Location: leaveApprove.php");
            echo 'alert("Approved")';
        }
        else{
            echo "Failed";
        }
    }
?>