<?php
session_start();
require_once("../Control/userController.php");



$hasErr=false;
$userName="";
$fullName="";
$password="";
$email="";
$phone="";
$address="";
$gender="";
$role="";


$userNameErr="";
$fullNameErr="";
$passwordErr="";
$emailErr="";
$phoneErr="";
$addressErr="";
$genderErr="";
$roleErr="";

unset($_SESSION["userNameErr"]);
unset($_SESSION["fullNameErr"]);
unset($_SESSION["passwordErr"]);
unset($_SESSION["emailErr"]);
unset($_SESSION["phoneErr"]);
unset($_SESSION["addressErr"]);
unset($_SESSION["genderErr"]);
unset($_SESSION["roleErr"]);

if(($_SERVER["REQUEST_METHOD"]=="POST") && isset($_POST["register"]))
{

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


    if (empty($_POST["fullName"])&&!preg_match("/^[a-zA-Z ]+$/", $_POST["fullName"])) {
        $hasErr = true;
       // $fullNameErr = "*Full Name Required";
        $_SESSION["fullNameErr"] = "*Full Name Required";
    } else {
        $fullName = $_POST["fullName"];
    }

    if (empty($_POST["password"])) 
    {
    $hasErr = true;
   // $passwordErr = "*Password Required contain at least 1 uppercase letter and 1 number";
    $_SESSION["passwordErr"] = "*Password Required must contain at least 1 uppercase letter and 1 number";
    } 
    else if (!preg_match($pattern, $_POST["password"])) {
        $hasErr = true;
        $_SESSION["passwordErr"] = "*Password must contain at least 1 uppercase letter and 1 number";
    }
    else {
    $password = $_POST["password"];
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


    if (empty($_POST["address"])) {
        $hasErr = true;
       // $addressErr = "*Address Required";\
        $_SESSION["addressErr"] = "*Address Required";
    } else {
        $address = $_POST["address"];
    }

    if(empty($_POST["gender"])) 
    {
        $hasErr = true;
        //$genderErr = "*Gender Required";
        $_SESSION["genderErr"] = "*Gender Required";
    }
    else 
    {
        $gender = $_POST["gender"];
    }

    if($_POST["role"]=="empty") 
    {
        $hasErr = true;
        //$roleErr = "*Role Required";
        $_SESSION["roleErr"] = "*Role Required";
    }
    else 
    {
        $role = $_POST["role"];
    }   
    // if errors, redirect back to registration so register.php can read session errors
    if ($hasErr) {
        header("Location: ../Views/register.php");
        exit();
    }




    
if(!$hasErr)
{
    
    $useR = [
        'userName' => $_POST["userName"],
        'fullName' => $_POST["fullName"],
        'password' => $_POST["password"],
        'email' => $_POST["email"],
        'phone' => $_POST["phone"],
        'address' => $_POST["address"],
        'gender' => $_POST["gender"],
        'role' => $_POST["role"],
        'status' => 'active',
    ];
    
    if (addUser($useR)) {
        //session_destroy();
        unset($_SESSION["userNameErr"]);
        unset($_SESSION["fullNameErr"]);
        unset($_SESSION["passwordErr"]);
        unset($_SESSION["emailErr"]);
        unset($_SESSION["phoneErr"]);
        unset($_SESSION["addressErr"]);
        unset($_SESSION["genderErr"]);
        unset($_SESSION["roleErr"]);
        // Set success message in session
        $_SESSION['success_message'] = "Registered successfully!";
        header("Location:../Views/login.php");
        exit();
    } 
    else {
        echo "Registration Failed!";
    
    }
}

}


?>