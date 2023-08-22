<?php
    session_start();
    $empId = $_POST['empId'];
    $password = $_POST['password'];

    //Database Connection
    $conn = new mysqli('localhost','root','','leavemanagementdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $sql = "SELECT empId, password FROM userpassword WHERE empId=$empId AND password=SHA1('$password');";
        $result = $conn->query($sql);
		if ($result->num_rows > 0){
            //Extracting first and last name of employee
            $sql = "SELECT firstName, lastName FROM employee WHERE empId=$empId";
            $res = $conn->query($sql);
            $row = $res->fetch_assoc();
            $_SESSION['emp_firstName'] = $row["firstName"];
            $_SESSION['emp_lastName'] = $row["lastName"];
            $_SESSION['emp_ID'] = $empId;
            header("Location: leaveapply.php");
        }
        else{
            echo 'Not Authorised';
        }
		$conn->close();
	}

   
?>