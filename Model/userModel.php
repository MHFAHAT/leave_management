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

    function verifyUser($userName, $email, $phone) 
    {
    $conn = getConnection();
    $sql = "SELECT * FROM usertabel WHERE userName = '$userName' AND email = '$email' AND phone = '$phone'";
    $result = mysqli_query($conn, $sql);
    $userExists = (mysqli_num_rows($result) > 0);
    mysqli_close($conn);
    return $userExists;
    }
    
    function updateUserPassword($userData) 
    {
    $conn = getConnection();
    $sql = "UPDATE usertabel SET password = '{$userData['newPassword']}' 
            WHERE userName = '{$userData['userName']}' 
            AND email = '{$userData['email']}' 
            AND phone = '{$userData['phone']}'";
    $result = mysqli_query($conn, $sql);
    $affectedRows = mysqli_affected_rows($conn);
    mysqli_close($conn);
    return $affectedRows > 0;
    }
    function displaypolicy()
    {
        $conn=getConnection();
        $sql = "SELECT policyId, leaveId, discription FROM leavepolicy_tabel";
        $result= mysqli_query($conn, $sql);
        $policies = [];
        if ($result && mysqli_num_rows($result) > 0) 
        { 
            while ($row = mysqli_fetch_assoc($result)) 
           {
            $policies[] = $row;
           }
        }
    return $policies;

    }
?>