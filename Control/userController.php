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

?>