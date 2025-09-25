<?php
    require_once("../Model/userModel.php");

    function validateUser($name, $pass)
    {
        return validateUsers($name, $pass);
    }
    function addUser($useR)
    {
        return insertUser($useR);
    }
    
    function  leavePolicies() {
    return displaypolicy();
}

    function verifyUserCredentials($userName, $email, $phone) 
    {
    return verifyUser($userName, $email, $phone);
    }
    
    function updatePassword($userData) 
    {
    return updateUserPassword($userData);
    }
    
?>