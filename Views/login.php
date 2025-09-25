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
    elseif($_SESSION["role"]=="employee")
    {
        header("Location:employee/home.php");   
    }
}
    $nameErr = isset($_SESSION['nameErr']) ? $_SESSION['nameErr'] : "";
    $passErr = isset($_SESSION['passErr']) ? $_SESSION['passErr'] : "";
    $invalidUser = isset($_SESSION['invalidUser']) ? $_SESSION['invalidUser'] : "";
 
    unset($_SESSION['nameErr']);
    unset($_SESSION['passErr']);
    unset($_SESSION['invalidUser']);  
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
                <a href=""><u>Foget password</u></a> 
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