<?php
    require_once("../Model/usermodel.php");

    function validateUser($name, $pass)
    {
        return validateUsers($name, $pass);
    }

?>