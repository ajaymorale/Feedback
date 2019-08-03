<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>profile</title>
      <link rel="stylesheet" href="css/style.css">
<style>
.form1
{background: rgba(19, 35, 47, 0.5);
  padding: 40px;
  max-width: 70%;
  height: auto;
  margin: 40px auto;
  border-radius: 25px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
  }
  .field-wrap2 {
  position: relative;
  max-width: 50%;
  margin-bottom: 40px;
}
  .button1 {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 1rem;
  font-weight: 200;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.button1:hover, .button1:focus {
  background: #179b77;
}

.button-block1 {
	border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 1.5rem;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
  display: block;
  width: 30%;

}
.table1{
	width: 100%;
}

.tr1{
	border: 0;
  outline: none;
  border-radius: 0;
  padding: 8px 0;
  margin-left: 40px;
  font-size: 1.5rem;
  font-weight: 300;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}
.w3-example {
    background-color: #f1f1f1;
    padding: 0.01em 16px;
    margin: 20px 0;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;
}
</style>

</head>

<body>
  <div class="form1" float="left">

    <img src="logo.png" alt="logo" width="530" height="150">
	  <div class="field-wrap2">
            <label>
      <?php
  //include "connection.php";
	session_start();
	if(isset($_SESSION['login_user'])) {
		echo 'welcome,'.$_SESSION['login_user'];
	}
	else{
		header("location: index.html");
         echo "success";
	}
//	$username= $_SESSION['login_user'];
  ?>
  </label>
          </div>

	<?php
	include "connection.php";
 $uName= $_SESSION['login_user'];
 echo "ok here";
$sql = "SELECT ename,images FROM events where username = '$uName' group by (ename)";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
	?>
	<br><br><br><br>
	<?php
	while($row = mysqli_fetch_array($result)){
		$link_address= $row['ename'];
		echo "<table><tr><td>";
        //echo  "<a href='review.php?id=$link_address'>  " .$row['ename'] . " </a> </td></tr>";
        echo  "<a href='review.php?id=$link_address'> <img src='images/$row[1].jpg' height='150px' width='300px'></a> </td></tr>";

		echo "</table>";
		 mysqli_free_result($result);
 }
 echo "ok 3";
}
}
	else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
	}

?>



</div> <!-- /form -->
<div style="background: rgba(19, 35, 47, 0.5);
  padding: 40px;
  max-width: 30%;
  height: auto;
  margin: 40px auto;
  border-radius: 25px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);" float="right">
  <form action="<?php echo "form3.php?id=$ename&user=$u" ?>" method="Post" enctype="multipart/form-data">
            Event Name<span class="req">*</span>
          <input type="text" required autocomplete="off" id="ename" name="ename"/>
          <input type="file" name="image" id="image">
          <?php


          ?>
          <button type="submit" value="submit">Create Form</button>
</form>
</div>
</body>
</html>
