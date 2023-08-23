<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-with-prefix.css">
    <style>
        .srouce{
            text-align: center;
            color: #ffffff;
            padding: 10px;
        }
    </style>
</head>
<body>

    <div class="main-container">
        <div class="form-container">

            <div class="form-body">
                <h2 class="title">Log in for</h2>
                <div class="social-login">
                    <ul>
                        <li class="google"><a href="employeeLogin.php" >Employee</a></li>
                        <li class="fb"><a href="#" onclick="alert('You are already on Employee Login Page.')">Admin</a></li>
                    </ul>
                </div>

                <div class="_or">Login as Admin</div>

                <form  action="Connection_adminLogin.php" autocomplete="on" method="post" class="the-form"> 

                    <label for="email">Admin ID</label>
                    <input type="text" name="adminId" id="adminId" placeholder="Enter Admin ID">

                    <label for="password">Admin Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Admin Password">

                    <input type="submit" value="Log In">

                </form>

            </div><!-- FORM BODY-->

        </div><!-- FORM CONTAINER -->
    </div>

</body>
</html>