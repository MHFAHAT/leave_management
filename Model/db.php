<?php 
    $host="localhost";
    $user="root";
    $pass="";
    $db="leave_management";
    $port="3306";

    function getConnection()
    {
        global $host;
        global $user;
        global $pass;
        global $db;
        global $port;

        $conn=mysqli_connect($host,$user,"",$db,$port);
        return $conn;
    }

?>