<?php
include "connection.php";
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($conn,$_POST['user']);
//      $myuserId = mysqli_real_escape_string($conn,$_POST['userId']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']);

      $sql = "SELECT username FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);


      $count = mysqli_num_rows($result);
      $ad="admin";
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count > 0) {
        if($myusername==$ad)
        {
            $_SESSION['admin']="log";
            header("location: admin.php");
        }else{
         $_SESSION['login_user'] = $myusername;
         $_SESSION['loggedIN'] = $myusername;
         header("location: profile.php");
         echo "success";
        }
      }else {
         $error = "Your Login Name or Password is invalid";
		 echo "Your Login Name or Password is invalid";
      }
   }




?>
