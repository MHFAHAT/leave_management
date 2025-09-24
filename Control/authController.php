<?php  
  session_start();
  require_once("userController.php");
 
  $hasErr=false;
  $username="";
  $pass="";
  $nameErr="";
  $passErr="";

  unset($_SESSION['nameErr']);
  unset($_SESSION['passErr']);
  unset($_SESSION['invalidUser']);

  if(($_SERVER["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
  {
      if(empty($_POST["userName"]))
      { 
        //$nameErr= "Username cannot be empty";
        $_SESSION['nameErr'] = "Username cannot be empty"; 
        $hasErr=true;
      }
      else
      {
        $username=$_POST["userName"];
      }
       
      if(empty($_POST["password"]))
      {
        //$passErr="Password cannot be empty";
        $_SESSION['passErr'] = "Password cannot be empty";
        $hasErr=true; 
      }

      else
      {
        $pass=$_POST["password"];
      }

      if($hasErr)
      {
        //header("Location:../Views/login.php?nameErr=$nameErr&passErr=$passErr");
        header("Location: ../Views/login.php");
        exit();
      }
      else
      {
        $value= validateUser($username,$pass);
        if(!$value)
        {
          //header("Location:../Views/login.php?invalidUser='Invalid User.'");
          $_SESSION['invalidUser'] = "Invalid User.";
          header("Location: ../Views/login.php");
          exit();
        }
        else
        {
            
            $_SESSION["userName"]=$value["userName"];
            $_SESSION["fullName"]=$value["fullName"];
            $_SESSION["userId"]=$value["userId"];
            $_SESSION["role"]=$value["role"];
            if($value["role"]=="admin")
            {
                header("location:../Views/admin/home.php");
            }
            elseif($value["role"]=="manager")
            {
                header("location:../Views/manager/home.php");
            }
            else
            {
                header("location:../Views/emplyee/home.php");
            }
            exit();
        }

      }



  }


?>