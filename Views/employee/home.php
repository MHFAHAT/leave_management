<?php
session_start();
require_once("../../Model/userModel.php");
     if(isset($_SESSION["userId"]))
    {
        if(isset($_SESSION["role"])=="employee")
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
    $policies = displaypolicy();
     //echo "<a href='../logout.php'>logout</a>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emplyee Home</title>
    <link rel="stylesheet" href="../css/adminHome.css">
</head>
<body>
    <div class="navbar">
      <h2 id="navtxt">Leave Management</h2>
      <div id="middleBtn">
        <button id="rqLeave">
        <img id="reqImg" src="../assets/quote-request.png" alt="">
        <p style="font-weight: bold">Request for leave</p> 
      </button>
      <button id="profile">
        <img id="profileImg" src="../assets/user.png" alt="" >
        <p style="font-weight: bold">Profile</p> 
      </button>

      </div>
      
      <div id="logContainer">
        <button id="logout" onclick="window.location.href='../logout.php'">
        <img id="logoutImg" src="../assets/logout.png" alt="" >
        <p style="font-weight: bold">Logout</p> 
      </button>
         
      </div>

</div>
    <div id="mainContent">
        <div id="tabel">
        <h3>Leave Policies</h3>
        <table id="policyTabel">
            <tr>
                <th>Policy ID</th> 
                <th>Description</th>
            </tr>
            <?php 
            if(!empty($policies))
            {
                foreach($policies as $policy)
                {
                    echo '<tr>
                    <td>' . htmlspecialchars($policy['policyId']) . '</td> 
                    <td>' . htmlspecialchars($policy['discription']) . '</td>
                    </tr>';
                } 
            }
            else{echo '<tr><td colspan="3">No policies found.</td></tr>';}
            ?> 
        </table>
        </div>
        <div id="requestFrom"> 
                      <p>request area</p>
        </div>
    </div>
    
</div>

</body>
</html>
