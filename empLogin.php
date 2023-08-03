<?php
    $empId = $_POST['empId'];
    $password = $_POST['password'];

    //Database Connection
    $conn = new mysqli('localhost','root','','leavemanagementdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
        $sql = "SELECT empId, password FROM userpassword
        WHERE empId=$empId AND password=SHA1('$password');";
        $result = $conn->query($sql);
        //$row = mysqli_fetch_array($result);
		if ($result->num_rows > 0){
            echo 'Authorised';
        }
        else{
            echo 'Not Authorised';
        }
		$conn->close();
	}

   
?>