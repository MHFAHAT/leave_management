<?php
session_start();
    if(isset($_SESSION["userId"]))
    {
        if($_SESSION["role"]=="admin")
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
