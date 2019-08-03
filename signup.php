<html>
<body>

<?php
include "connection.php";
session_start();
//$servername = "localhost";
//$username = "root";
//$password = "";

// Create connection
//$conn = new mysqli($servername, $username, $password);
// Check connection

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
$userName = $_POST["user"];
$passWord=$_POST["pass"];
$firstName=$_POST["first"];
$lastName=$_POST["last"];
$eMail=$_POST["email"];

$sql="INSERT INTO login(username,password,fn,ln,email) VALUES('$userName','$passWord','$firstName','$lastName','$eMail')";
$_SESSION['login_user'] = $userName;
$_SESSION['loggedIN'] = $userName;
if(!mysqli_query($conn,$sql))
{
	echo "not inserted";
}else
{
	header("location: profile.php");
	echo "inserted";
}
 }
?>

</body>
</html>
