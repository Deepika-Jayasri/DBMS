<?php

session_start();
include("connection.php");
include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values('$user_id','$user_name','$password')";

        mysqli_query($con , $query);

        header("Location: signup.html");
        die;
      
    }else
    {
        echo "Please enter some valid information ";
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd Login Form | theuicode.com</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form method="post">
    <div class="container">
        <div class="login-bg-1"></div>
        <div class="login-bg-2"></div>
        <div class="login-container">
            <div class="icon-wrapper">
                <i class="ri-user-fill icon-big"></i>
            </div>
            <h2 class="sign-in">Sign Up</h2>
            <div class="input-holder">
                <div class="input-icon-wrapper-bg">
                    <div class="input-icon-wrapper">
                        <i class="ri-user-fill input-icon"></i>
                    </div>
                </div>
                <input type="text" name="user_name" placeholder="Username">
            </div>
            <div class="input-holder">
                <div class="input-icon-wrapper-bg">
                    <div class="input-icon-wrapper">
                        <i class="ri-lock-fill input-icon"></i>
                    </div>
                </div>
                <input type="password" name="password" placeholder="password">
            </div>
            <div class="remember-forgot">
                <div class="checkbox-wrapper">
                    <input type="checkbox" id="lbl">
                    <label class="lbl-remember" for="lbl">Remember</label>
                </div>
                <a href="#" class="forgot">Forgot password?</a>
            </div>
            <div class="login-wrapper">
            <button type="submit" class="login">REGISTER</button>
                <div class="no-account">
                    <span class="forgot">Already  have an account?</span>
                    <a href="login1.php" class="sign-up">Login</a>
                </div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
</form>
</body>

</html>