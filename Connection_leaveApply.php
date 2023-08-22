<?php
    session_start();
    $empId = $_SESSION['emp_ID'];
    $leaveCode = $_POST['leaveCode'];
    $applDate = date('Y-m-d');
    $leaveFrom = date('Y-m-d', strtotime($_POST['leaveFrom']));
    $leaveTo = date('Y-m-d', strtotime($_POST['leaveTo']));
    $leaveReason = $_POST['leaveReason'];

    //Database Connection
    $conn = new mysqli('localhost','root','','leavemanagementdb');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    } 
    else {
        $stmt = $conn->prepare("insert into leaveapplication(empId, leaveCode, applDate, leaveFrom, leaveTo, leaveReason) 
        values(?, ?, FROM_UNIXTIME(?), ?, ?, ?)");
        $stmt->bind_param("isiiis", $empId, $leaveCode, $applDate, $leaveFrom, $leaveTo, $leaveReason);
        $execval = $stmt->execute();
        echo "Application submitted...";
		$stmt->close();
		$conn->close();
    }
?>