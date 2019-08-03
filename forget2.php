

		  <?php 
		     if($_SERVER["REQUEST_METHOD"] == "POST"){
		  if(isset($_POST['submit'])){
			  $pass1= $_POST['passw'];
			  $pass2= $_POST['repassw'];
			  if($_POST['passw'] == $_POST['repassw']){
				 	header("location: index.html"); 
					echo "sucessful";
			  }
			  else
			  {
				  header("location: forget.php");
				  echo "fail";
			  }
			  
		  }
			 }
			 else
			 {
				  header("location: forget.php");
				  echo "fail second";
			 }
		 
		  ?>  
