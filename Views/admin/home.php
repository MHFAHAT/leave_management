<?php
session_start();
    if(isset($_SESSION["userId"]))
    {
        if(isset($_SESSION["role"])=="admin")
        {
            
        }

        else
        {
            header("Location:../login.php");
        }

        

    }

    else
    {
        header("Location:../login.php");
    }


    echo "<h1>Welcome Admin. Name: ".$_SESSION["fullName"]."</h1><br>";

    echo "<a href='../logout.php'>logout</a>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home</title>
</head>
<body>
    
</body>
</html>
