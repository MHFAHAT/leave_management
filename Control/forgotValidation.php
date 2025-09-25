<?php
session_start();
require_once("../Control/userController.php");

$hasErr=false;
$userName="";
$email="";
$phone="";
$newPassword="";

$userNameErr="";
$emailErr="";
$phoneErr="";
$newPasswordErr="";


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $userName = $_POST["userName"] ?? "";
    $pattern = '/^(?=.*[A-Z])(?=.*\d)[A-Za-z\d]+$/'; 
    if (empty($userName)) {
        $hasErr = true;
        $_SESSION["userNameErr"] = "*Username Required";
    } elseif (!preg_match($pattern, $userName)) {
        $hasErr = true;
        $_SESSION["userNameErr"] = "*Username must contain at least 1 uppercase letter and 1 number";
    } else {
        $userName = $_POST["userName"];
    }

    if (empty($_POST["email"])) {
        $hasErr = true;
       // $emailErr = "*Valid Email Required";
        $_SESSION["emailErr"] = "*Valid Email Required";
    } 
    else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $hasErr = true;
       // $emailErr = "*Valid Email Required";
        $_SESSION["emailErr"] = "*Valid Email Required";
    }
    else {
        $email = $_POST["email"];
    }

    if (empty($_POST["phone"])) {
        $hasErr = true;
        //$phoneErr = "*Valid 11-digit Phone Number Required";
        $_SESSION["phoneErr"] = "*Valid 11-digit Phone Number Required";
    } 
    else if (!preg_match("/^[0-9]{11}$/", $_POST["phone"])) {
        $hasErr = true;
        //$phoneErr = "*Valid 11-digit Phone Number Required";
        $_SESSION["phoneErr"] = "*Valid 11-digit Phone Number Required";
    }
    else {
        $phone = $_POST["phone"];
    }

    if (empty($_POST["newPassword"])) 
    {
    $hasErr = true;
   // $passwordErr = "*Password Required contain at least 1 uppercase letter and 1 number";
    $_SESSION["newPasswordErr"] = "*Password Required must contain at least 1 uppercase letter and 1 number";
    } 
    else if (!preg_match($pattern, $_POST["newPassword"])) {
        $hasErr = true;
        $_SESSION["newPasswordErr"] = "*Password must contain at least 1 uppercase letter and 1 number";
    }
    else {
    $newPassword = $_POST["newPassword"];
    }

        if ($hasErr) {
        header("Location: ../Views/forgotpass.php");
        exit();
    }


    if(!$hasErr)
    {
        $userData = [
            'userName' => $userName,
            'email' => $email,
            'phone' => $phone,
            'newPassword' => $newPassword
        ];
            
        if (verifyUserCredentials($userName, $email, $phone)) 
        {
        if (updatePassword($userData)) {
        // Set success message for login page
        $_SESSION['success_message'] = "Password updated successfully! Please login with your new password.";
        // Clear all error messages from session
        unset($_SESSION['userNameErr']);
        unset($_SESSION['newPasswordErr']);
        unset($_SESSION['emailErr']);
        unset($_SESSION['phoneErr']);
        unset($_SESSION['error_message']);
        // Ensure redirect is working
        header("Location: ../Views/login.php");
        exit();
        } 
        else {
        $_SESSION['error_message'] = "Password update failed. Please try again.";
        header("Location: ../Views/forgotpass.php");
        exit();
        }
        }   
        else 
        {
        // Credentials don't match
        $_SESSION['error_message'] = "Invalid credentials. Please check your username, email, and phone number.";
        header("Location: ../Views/forgotpass.php");
        exit();
        }

    }
}
 

?>