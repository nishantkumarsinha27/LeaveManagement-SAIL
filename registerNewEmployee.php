<?php
session_start();
if(!isset($_SESSION['adminSession'])){
    header("Location: adminLogin.php");
}
?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="css/style-with-prefix.css">
        <title>Document</title>
        <style>
                         select {
                                    margin-bottom: 10px;
                                    margin-top: 10px;
                                    font-family:  "Helvetica Neue";
                                    outline: 0;
                                    background:rgba(0, 0, 0, 0.2);
                                    color: #fff;
                                    border: 1px solid crimson;
                                    padding: 10px;
                                    border-radius: 9px;

                                }
                                </style>
    </head>
    <body>
    <div class="main-container">
    <div class="form-container">    
    <div class="form-body">
        <form  action="Connection_register.php" autocomplete="on" method="post" class="the-form"> 
            <h2 class="title">Add new Employee</h2>
            <br><br>
                <label for="empId">Employee Id </label>
                <input id="empId" name="empId" required="required" type="text" placeholder="eg. 1234" />
                <label for="firstName">First Name </label>
                <input id="firstName" name="firstName" required="required" type="text" placeholder="eg. Joe" />
                <label for="lastName">Last Name </label>
                <input id="lastName" name="lastName" required="required" type="text" placeholder="eg. Dash" />
                <label for="empAge">Age </label>
                <input id="empAge" name="empAge" required="required" type="number" min="25" max="60" placeholder="eg. 28" />
                <label for="empGender">Gender </label>
                <select id="empGender" name="empGender">
                   
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Others</option>
                </select>
                <input type="submit" value="Add">
            <p class="change_link">  
                Already a member ?
            <a href="adminLogin.php" class="to_register"> Go and log in </a>
            </p>
        </form>
    </div>
    </div>
    </div>
    </body>
    </html>