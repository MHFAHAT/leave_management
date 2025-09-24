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

    function insertUser($useR)
    {
        $conn=getConnection();
        $sql="INSERT INTO usertabel (userName, fullName, password, email, phone, address, role, status,gender)
        VALUES (
                '{$useR['userName']}',
                '{$useR['fullName']}',
                '{$useR['password']}',
                '{$useR['email']}',
                '{$useR['phone']}',
                '{$useR['address']}',
                '{$useR['role']}',
                '{$useR['status']}',
                '{$useR['gender']}'
                
            )";
            return mysqli_query($conn, $sql);
    }
?>