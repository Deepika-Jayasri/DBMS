
<?php
session_start();

include("connection.php");
include("function.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {

        //read from database
        $query = "select * from users where user_name = '$user_name' limit 1";
        $result = mysqli_query($con, $query);

        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {

                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.html");
                    die;
                }
            }
        }
        
        echo "wrong username or password!";
    }else
    {
        echo "wrong username or password!";
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
    <section class="main-container">
    
    <div class="bg-bubbles">
            <span class="one"></span> 
            <span class="two"></span>
            <span class="three"></span>
            <span class="four"></span>
            <span class="five"></span>
            <span class="six"></span>
            <span class="seven"></span>
            <span class="eig"></span>
            <span class="nin"></span>
            <span class="ten"></span>
            <span class="lev"></span>
            <span class="twe"></span>
            <span class="thre"></span>
            <span class="for"></span>
            <span class="fif"></span>
            <span class="sixten"></span>
    </div>
    <form method="post">
    <div class="container">
        <div class="login-bg-1"></div>
        <div class="login-bg-2"></div>
        <div class="login-container">
            <div class="icon-wrapper">
                <i class="ri-user-fill icon-big"></i>
            </div>
            <h2 class="sign-in">Sign In</h2>
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
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="remember-forgot">
                <div class="checkbox-wrapper">
                    <input type="checkbox" id="lbl">
                    <label class="lbl-remember" for="lbl">Remember</label>
                </div>
                <a href="#" class="forgot">Forgot password?</a>
            </div>
            <div class="login-wrapper">
                
                <button type="submit" class="login">LOGIN</button>
                <div class="no-account">
                    <span class="forgot">Dont' have account?</span>
                    <a href="signup.html" class="sign-up">Sign Up</a>
                </div>
            </div>
        </div>
        <div class="shadow"></div>
    </div>
    </form>
    
    </section>
</body>

</html>