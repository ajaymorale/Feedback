<html>
<body>
	<?php
	include "connection.php";
	session_start();
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sName = $_POST["name"];
		$reView=$_POST["review"];
		$eMail=$_POST["email"];
		$rAdio=$_POST["optradio"];
		$time=$_POST["optradio1"];
		$Sugg=$_POST["sugg"];
		$uName= $_SESSION['suser'];
		$eName= $_SESSION['evtn'];
		$imag=$_SESSION['img'];
		//$eli=$_SESSION['link'];
		$des="info about this event";
		$pub=1;
		//=====rating data========
		if($rAdio=="best")
		{
			$r1=100;
		}
		else if($radio=="better")
		{
			$r1=75;
		}
		else if($radio=="good")
		{
			$r1=50;
		}
		else if($radio=="good"){
			$r1=25;
		}
		else{

		}
		//---------------------
		if($time=="best")
		{
			$r2=100;
		}
		else if($radio=="better")
		{
			$r2=75;
		}
		else if($radio=="good")
		{
			$r2=50;
		}
		else if($radio=="worst"){
			$r2=25;
		}
		else{

		}
		echo "//=======================<br><br>";
		$eli="form.php?id=".$eName."&user=".$uName."&fil=".$imag;
		$r4=$r1+$r2;
		$r3=$r4/4;
		echo $r3;
		//=========================
		$sql="INSERT INTO events(username,ename,sname,semail,review,Overall,timely,suggestion,images,description,public,rating,elink) VALUES('$uName','$eName','$sName','$eMail','$reView','$rAdio','$time','$Sugg','$imag','$des','$pub','$r3','$eli')";
		echo 'hii well here'.$uName;
		echo 'hii'.$eName;
		if(!mysqli_query($conn,$sql))
		{
		echo "not inserted";
	}else
	{
		if($uName=='admin') {
		header("location: admin.php");
		}
		else{
		header("location: profile.php");
		echo "success";
	}
	}
}
?>

</body>
</html>
