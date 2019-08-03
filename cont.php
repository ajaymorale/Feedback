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
$nm = $_POST["name"];
$mob=$_POST["mobile"];
$em=$_POST["email"];
$mesg=$_POST["message"];

$sql="INSERT INTO contact(fullname,mobile,email,msg) VALUES('$nm','$mob','$em','$mesg')";
if(!mysqli_query($conn,$sql))
{
	echo "not inserted";
}else
{
	header("location: contact.php");
	echo "inserted";
}
 }
?>
