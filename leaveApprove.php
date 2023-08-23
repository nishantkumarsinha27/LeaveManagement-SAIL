<?php
include "Connection_adminLogin.php"; 
if(!isset($_SESSION['adminSession'])){
    header("Location: adminLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="nofollow" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <a href="registerNewEmployee.php" class="btn btn-primary">Add New Employee</a> 
                <a href="logout.php" class="btn btn-danger">Logout</a> 
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">Pending Leave Request</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <th>Application Id</th>
                                <th>Employee Id</th>
                                <th>Leave Code</th>
                                <th>Application Date</th>
                                <th>Leave From</th>
                                <th>Leave To</th>
                                <th>Leave Reason</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                            <?php
                                while($row = mysqli_fetch_assoc($result))
                                {
                            ?>
                                <td><?php echo $row['ApplicationId']; ?></td>
                                <td><?php echo $row['empId']; ?></td>
                                <td><?php echo $row['leaveCode']; ?></td>
                                <td><?php echo $row['applDate']; ?></td>
                                <td><?php echo $row['leaveFrom']; ?></td>
                                <td><?php echo $row['leaveTo']; ?></td>
                                <td><?php echo $row['leaveReason']; ?></td>
                                <td><a href="Connection_AdminApproval.php?approveId='<?php echo $row['ApplicationId']; ?>'" class="btn btn-success">Approve</a> 
                                    &nbsp&nbsp 
                                    
                                    <a href="Connection_AdminApproval.php?rejectId='<?php echo $row['ApplicationId']; ?>'" class="btn btn-danger">Reject</a>
                                </td>
                            </tr>
                            <?php
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>