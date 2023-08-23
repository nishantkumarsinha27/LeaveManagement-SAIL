<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style-with-prefix.css">
</head>
<body>

    <div class="main-container">
        <div class="form-container">

            <div class="form-body">
                <h2 class="title">Log in for</h2>
                <div class="social-login">
                    <ul>
                        <li class="google"><a href="#" onclick="alert('You are already on Employee Login Page.')">Employee</a></li>
                        <li class="fb"><a href="adminLogin.php">Admin</a></li>
                    </ul>
                </div>

                <div class="_or">Login as Employee</div>

                <form  action="Connection_empLogin.php" autocomplete="on" method="post" class="the-form"> 

                    <label for="email">Employee Id</label>
                    <input type="text" name="empId" id="empId" placeholder="Enter your Employee ID">

                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password">

                    <input type="submit" value="Log In">

                </form>

            </div><!-- FORM BODY-->

        </div><!-- FORM CONTAINER -->
    </div>

</body>
</html>