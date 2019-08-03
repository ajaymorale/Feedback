<?php
SESSION_START();
if(isset($_SESSION['loggedIN']))
{
  unset($_SESSION['loggedIN']);
  session_destroy();
  header("location: index.html");
}
header("location: index.html");
?>
