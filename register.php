<?php
    $empId = $_POST['empId'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $empAge = $_POST['empAge'];
    $empGender = $_POST['empGender'];

    //Database Connection
    $conn = new mysqli('localhost','root','','leavemanagementdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $stmt = $conn->prepare("insert into employee(empId, firstName, lastName, empAge, empGender) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("issis", $empId, $firstName, $lastName, $empAge, $empGender);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

   
?>