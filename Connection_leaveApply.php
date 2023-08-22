<?php
    session_start();
    $empId = $_SESSION['emp_ID'];
    $leaveCode = $_POST['leaveCode'];
    $applDate = date('Y-m-d');
    $leaveFrom = $_POST['leaveFrom'];
    $leaveTo = $_POST['leaveTo'];
    $leaveReason = $_POST['leaveReason'];

    if($leaveReason == 'OTHER'){
        $leaveReason = $_POST['additionalInfo'];
    }

    //Database Connection
    $mysqli = mysqli_connect('localhost','root','','leavemanagementdb');
    if(!$mysqli){
        echo "$mysqli->connect_error";
		die("Connection Failed : ". $mysqli->connect_error);
    }
    $stmt = mysqli_query($mysqli, "INSERT INTO leaveapplication VALUES ('', '$empId', '$leaveCode', '$applDate', '$leaveFrom', '$leaveTo', '$leaveReason','No','')");
    if ($stmt){
        echo "Application submitted...";
    }
    else{
        echo "Failed";
    }
	$mysqli->close();
?>