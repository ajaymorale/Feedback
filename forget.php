<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
      <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="form">
        
        <div id="login">   
			<img src="logo.png" alt="logo" width="530" height="150"><br><br>
          
		  <?php /*
		  if(isset($_POST['submit'])){
			  $pass1= $_POST['passw'];
			  $pass2= $_POST['repassw'];
			  if($pass1 == $pass2){
				 	header("location: index.html"); 
			  }
			  else
			  {
				  header("location: forget.php");
			  }
			  
		  }
		  
		  */
		  ?>  
          <form action="forget2.php" method="Post">
          
            <div class="field-wrap">
            <label>
              New password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" id="passw" name="passw"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Retype Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" id="repassw" name="repassw"/>
          </div>
          <button type="submit" value="submit" class="button button-block"/>Set Password</button>
          
          </form>

        </div>
      
</div> <!-- /form -->

</body>
</html>
