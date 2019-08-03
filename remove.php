<?php
session_start();
if(isset($_SESSION['admin'])) {
if($_SESSION['admin']=="log"){
  //$uName="admin";
  $um=$_GET['id'];
  include "connection.php";
  $sql="DELETE FROM login WHERE username='$um'";
  if(mysqli_query($conn,$sql))
  {
    header("location:admin.php");
  }
  else {
    echo "Error in removing user";

  }
}
else{
  header("location: index.html");
}
}
else{
  header("location: index.html");
       echo "success";
}

?>
