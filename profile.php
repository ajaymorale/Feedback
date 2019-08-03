<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>

  <body>
    <?php
      //include "connection.php";

    	session_start();
    	if(isset($_SESSION['loggedIN'])) {
    	$uName= $_SESSION['login_user'];
    	}
    	else{
    		header("location: index.html");
             echo "success";
    	}
      include "connection.php";

    //	$username= $_SESSION['login_user'];
      ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">FeedBack</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="profile.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link btn btn-danger" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-5">Welcome, <?php echo $_SESSION['login_user'];?></h1>
        <p class="lead">You can view your events here. You can easily view and submit feedback to events down below.</p>

          <!-- <form action="<?php //echo "form.php?unm=$uName" ?>" method="Post" enctype="multipart/form-data">
        <ul class="list-inline intro-social-buttons">
          <li class="list-inline-item"><input type="text" class="form-control" required autocomplete="off" id="ename" name="ename" placeholder="Enter Event Name"/></li>
          <li class="list-inline-item"><input type="file" class="form-control" name="image" id="image"></li>
          <li class="list-inline-item"><button type="submit" class="btn btn-secondary btn-lg" value="submit">Create Form</button></li>
        </ul>
          </form> -->
      </header>

          <label><h4>Here are your events:</h4></label>
          <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Events Feedback</a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Teachers Feedback</a>

        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <div class="row text-center">
            <?php
    $sql = "SELECT ename,images,elink FROM events where public=1 group by (ename)";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
      $link_address= $row['ename'];
      $imge=$row['images'];
      $link_event=$row['elink'];
            echo "<div class='col-lg-5 col-md-6 mb-4'>";
              echo "<div class='card'>";
                echo "<img class='card-img-top' src='images/$imge.jpg' alt='$link_address' height='320px' width='325px'>";
                echo "<div class='card-footer'>";
                  echo "<a href='review.php?id=$link_address' class='btn btn-primary'>$link_address</a>";
                  echo "&nbsp;&nbsp;<a href='$link_event' class='btn btn-primary'>Submit</a>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
             }
             mysqli_free_result($result);
            }
            }
            	else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            	}

            ?>


          </div>

        </div>

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
          <div class="row text-center">
            <?php
    $sql = "SELECT ename,images,elink FROM events where public=2 group by (ename)";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
      $link_address= $row['ename'];
      $imge=$row['images'];
      $link_event=$row['elink'];
            echo "<div class='col-lg-5 col-md-6 mb-4'>";
              echo "<div class='card'>";
                echo "<img class='card-img-top' src='images/$imge.jpg' alt='$link_address' height='320px' width='325px'>";
                echo "<div class='card-footer'>";
                  echo "<a href='review.php?id=$link_address' class='btn btn-primary'>$link_address</a>";
                  echo "&nbsp;&nbsp;<a href='$link_event' class='btn btn-primary'>Submit</a>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
             }
             mysqli_free_result($result);
            }
            }
            	else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
            	}

            ?>


          </div>

        </div>
      </div>

          <!-- /.row -->
        </div>
    </div>
    <!-- /.container --> -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="index.html">Home</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="about.php">About</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="service.php">Services</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="contact.php">Contact</a>
          </li>
          <li class="footer-menu-divider list-inline-item">&sdot;</li>
          <li class="list-inline-item">
            <a href="privacy.php">  Privacy</a>
          </li>
        </ul>
        <p class="m-0 text-center text-white">Copyright &copy; FEeD Me BACk!</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/popper/popper.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
