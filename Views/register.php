<?php
session_start();

$userNameErr = isset($_SESSION['userNameErr']) ? $_SESSION['userNameErr'] : "";
$fullNameErr = isset($_SESSION['fullNameErr']) ? $_SESSION['fullNameErr'] : "";
$passwordErr = isset($_SESSION['passwordErr']) ? $_SESSION['passwordErr'] : "";
$emailErr = isset($_SESSION['emailErr']) ? $_SESSION['emailErr'] : "";
$phoneErr = isset($_SESSION['phoneErr']) ? $_SESSION['phoneErr'] : "";
$addressErr = isset($_SESSION['addressErr']) ? $_SESSION['addressErr'] : "";
$genderErr = isset($_SESSION['genderErr']) ? $_SESSION['genderErr'] : "";
$roleErr = isset($_SESSION['roleErr']) ? $_SESSION['roleErr'] : "";   

unset($_SESSION['userNameErr']);
unset($_SESSION['fullNameErr']);
unset($_SESSION['passwordErr']);
unset($_SESSION['emailErr']);
unset($_SESSION['phoneErr']);
unset($_SESSION['addressErr']);
unset($_SESSION['genderErr']);
unset($_SESSION['roleErr']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../Views/css/regis.css">

</head>
<body>
    <div class="container">
    <h2>User Registration</h2>
    <form action="../Control/regisValidation.php"method="POST">
        <label for="userName" id="userNameLabel">Username</label>
        <input type="text" id="userName" name="userName" ><br>
        <span style="color:red;" name="userNameErr"><?php echo htmlspecialchars($userNameErr); ?></span>

        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName"> <br>
        <span style="color:red;" name="fullNameErr"><?php echo htmlspecialchars($fullNameErr); ?></span>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"> <br>
        <span style="color:red;" name="passwordErr"><?php echo htmlspecialchars($passwordErr); ?></span>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" > <br>
        <span style="color:red;" name="emailErr"><?php echo htmlspecialchars($emailErr); ?></span>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" > <br>
        <span style="color:red;" name="phoneErr"><?php echo htmlspecialchars($phoneErr); ?></span>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" > <br>
        <span style="color:red;" name="addressErr"><?php echo htmlspecialchars($addressErr); ?></span>

        <label>Gender</label>
        <div class="gender" style="display:inline;">
            <input type="radio" id="male" name="gender" value="male" >
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            <span style="color:red;" name="genderErr"><?php echo htmlspecialchars($genderErr); ?></span>
        </div>
        <br>

        <label for="role">Role</label>
        <select id="role" name="role" style="width:auto; margin-left:10px;">
            <option value="empty">Please select one</option>                                                                      
            <option value="admin">Admin</option>
            <option value="manager">Manager</option>
            <option value="employee">Employee</option>
        </select> <span style="color:red;" name="roleErr"><?php echo htmlspecialchars($roleErr); ?></span> <br>

        <!-- <label for="departmentId">Department ID</label>
        <input type="number" id="departmentId" name="departmentId" required><br>  -->

        <div style="display: flex; justify-content:space-between ;">
            <button name="login">Log in</button>
            <button type="submit"name="register">Register</button>
        </div>
    </form>        


    </div>
</body>
</html>