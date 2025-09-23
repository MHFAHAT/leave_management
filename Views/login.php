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
        
        <form method="POST" id="loginbox" action=""> 
            <h1>Login</h1>
             <div class="box1">
                <label for="username" id="nametxt">Username</label>
                <input type="text" id="UserName" name="userName">
             </div>
             <div class="box2">
                <label for="password" id="passtxt">Password</label>
                <input type="text" id="pass" name="password">
             </div>
             <div class="box3">
                <p><u>Foget password</u></p>
                <p id="reg"><u>Register<u></p>
             </div>
             <input type="submit" id="loginBtn" name="submit" value="login">
        </form>
    </Div>
</body>
</html>