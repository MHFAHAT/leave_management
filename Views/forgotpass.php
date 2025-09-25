<?php
session_start();
$userNameErr = isset($_SESSION['userNameErr']) ? $_SESSION['userNameErr'] : "";
$newPasswordErr = isset($_SESSION['newPasswordErr']) ? $_SESSION['newPasswordErr'] : "";
$emailErr = isset($_SESSION['emailErr']) ? $_SESSION['emailErr'] : "";
$phoneErr = isset($_SESSION['phoneErr']) ? $_SESSION['phoneErr'] : "";
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
// Clear only the error messages after retrieving
unset($_SESSION['userNameErr']);
unset($_SESSION['newPasswordErr']);
unset($_SESSION['emailErr']);
unset($_SESSION['phoneErr']);
unset($_SESSION['error_message']);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Views/css/regis.css">
</head>
<body>
    <div class="container">
        <h2>Forgot Password</h2>
        <!-- used for forgot pass error -->
                <?php if (!empty($error_message)): ?>
            <div style="color: red; margin-bottom: 15px; padding: 10px; background-color: #f8d7da; border: 1px solid #f5c6cb;">
                <?php echo htmlspecialchars($error_message); ?>
            </div>
        <?php endif; ?>

        <form action="../Control/forgotValidation.php" method="POST">

            <label for="userName">Enter your username:</label>
            <input type="text" id="userName" name="userName">
            <span style="color:red;" name="userNameErr"><?php echo htmlspecialchars($userNameErr); ?></span>

            <label for="email">Enter your registered email:</label>
            <input type="email" id="email" name="email" >
            <span style="color:red;" name="emailErr"><?php echo htmlspecialchars($emailErr); ?></span>

            <label for="phone">Enter your registered phone number:</label>
            <input type="text" id="phone" name="phone" >
            <span style="color:red;" name="phoneErr"><?php echo htmlspecialchars($phoneErr); ?></span>

            <label for="newPassword">Enter your new password:</label>
            <input type="password" id="newPassword" name="newPassword">
            <span style="color:red;" name="newPasswordErr"><?php echo htmlspecialchars($newPasswordErr); ?></span>

            <div style="display: flex; justify-content:space-between ;">
                <button type="button" name="login" onclick="location.href='../Views/login.php'">Log in</button>
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>

    
</body>
</html>