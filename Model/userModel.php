<?php
    require_once("db.php");

    function validateUsers($name, $pass)
    {
        $conn=getConnection();
        $sql="SELECT * FROM usertabel WHERE userName='$name' AND password='$pass'";
        $result=mysqli_query($conn, $sql);
        $row=mysqli_fetch_assoc($result);
        return $row;
    }

?>