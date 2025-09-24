<?php  
  require_once("userController.php");
  $hasErr=false;
  $username="";
  $pass="";
  $nameErr="";
  $passErr="";

  if(($_SERVER["REQUEST_METHOD"]=="POST") && isset($_POST["submit"]))
  {
      if(empty($_POST["userName"]))
      { 
        $nameErr= "userName cannot be empty";
        $hasErr=true;
      }
      else
      {
        $username=$_POST["userName"];
      }
      //add more requrement
      if(empty($_POST["password"]))
      {
        $passErr="password cannot be empty";
        $hasErr=true;

      }

      else
      {
        $pass=$_POST["password"];
      }

      if($hasErr)
      {
        header("Location:../Views/login.php?nameErr=$nameErr&passErr=$passErr");
      }
      else
      {
        $value= validateUser($username,$pass);
        if(!$value)
        {
            header("Location:../Views/login.php?invalidUser='Invalid User.'");
        }
        else
        {
            session_start();
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
        }

      }



  }


?>