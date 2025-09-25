<?php 
 session_start();
 if(isset($_SESSION["userName"]))
{
    if($_SESSION["role"]=="admin")
    {
        header("Location:admin/home.php");
    }
    elseif($_SESSION["role"]=="manager")
    {
        header("Location:manager/home.php");
    }
    else
    {
        header("Location:client/home.php");   
    }
}
    $nameErr = isset($_SESSION['nameErr']) ? $_SESSION['nameErr'] : "";
    $passErr = isset($_SESSION['passErr']) ? $_SESSION['passErr'] : "";
    $invalidUser = isset($_SESSION['invalidUser']) ? $_SESSION['invalidUser'] : "";
    unset($_SESSION['nameErr']);
    unset($_SESSION['passErr']);
    unset($_SESSION['invalidUser']);  
    // Rahat added this
    // Display success message if it exists
    $success_message = isset($_SESSION['success_message']) ? $_SESSION['success_message'] : "";
    $error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
    // Clear messages after retrieving them
    unset($_SESSION['success_message']);
    unset($_SESSION['error_message']);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Views/css/login.css">
</head>
<body>
    <!-- Rahat added -->
    <div style="text-align: center; margin-bottom: 20px;">
                <?php if (!empty($success_message)): ?>
            <div style="color: green; margin-bottom: 15px; padding: 10px; background-color: #d4edda; border: 1px solid #c3e6cb; border-radius: 5px;">
            <?php echo htmlspecialchars($success_message); ?>
            </div>
        <?php endif; ?>
        
        <?php if (!empty($error_message)): ?>
            <div style="color: red; margin-bottom: 15px; padding: 10px; background-color: #f8d7da; border: 1px solid #f5c6cb; border-radius: 5px;">
                <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>
    </div>

    <Div class="box" >
        <form method="POST" id="loginbox" action="../Control/authController.php"> 
            <h1>Login</h1>
            <div class="box1">
                <label for="username" id="nametxt">Username</label>
                <input type="text" id="UserName" name="userName">
                <span class="err" name="userIderr" style="color:red;"><?php echo htmlspecialchars($nameErr); ?></span>
            </div>
            <div class="box2">
                <label for="password" id="passtxt">Password</label>
                <input type="password" id="pass" name="password">
                <span class="err" name="passIderr" style="color:red;"><?php echo htmlspecialchars($passErr); ?></span>
            </div>
            <div class="box3">
                <a href="../Views/forgotpass.php"><u>Forgot password</u></a> 
                <a id="reg" href="../Views/register.php"><u>Register<u></a> 
            </div>
                <span class="err" name="userIderr" style="color:red;"><?php echo htmlspecialchars($invalidUser); ?></span>
            <div id="loginBtnContainer">
                <input class="err" style=" margin-top: 10px" type="submit" id="loginBtn" name="submit" value="login">
            </div>
        </form>
    </Div>
</body>
</html>