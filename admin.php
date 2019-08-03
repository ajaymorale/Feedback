<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

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
  if(isset($_SESSION['admin'])) {
    if($_SESSION['admin']=="log"){
      $uName="admin";
    }
    else{
      header("location: index.html");
    }
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
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Admin
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
      <h1 class="display-4">Welcome, Admin</h1>
      <p class="lead">We're glad you're here.   </p>

      <p class="lead">You can create manage your events here. You can create your event by just giving your event name and your events image in following form. You can easily access to your events feedback down below.</p>
      <form action="<?php echo "form.php?unm=$uName" ?>" method="Post" enctype="multipart/form-data">
        <ul class="list-inline intro-social-buttons">
          <li class="list-inline-item"><input type="text" class="form-control" required autocomplete="off" id="ename" name="ename" placeholder="Enter Event Name"/></li>
          <li class="list-inline-item"><input type="file" class="form-control" name="image" id="image"></li>
          <li class="list-inline-item"><br><button type="submit" class="btn btn-secondary btn-lg" value="submit">Create Event</button></li>
        </ul>
      </form><br>
      <p class="lead">Add teachers from here:</p>

      <form action="<?php echo "teacher.php?unm=$uName" ?>" method="Post" enctype="multipart/form-data">
        <ul class="list-inline intro-social-buttons">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="list-inline-item"><input type="text" class="form-control" required autocomplete="off" id="fn" name="fn" placeholder="First Name"/></li>
          <li class="list-inline-item"><input type="text" class="form-control" required autocomplete="off" id="ln" name="ln" placeholder="Last Name"/></li><br><br>
          <li class="list col-lg-5 "><input type="text" class="form-control" required autocomplete="off" id="Department" name="Department" placeholder="Department"/></li><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="list-inline-item"><input type="file" class="form-control" name="image" id="image"></li><br><br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li class="list-inline-item"><button type="submit" class="btn btn-secondary btn-lg" value="submit">Add Teacher</button></li>
        </ul>
      </form>

    </header>

    <!-- Page Features -->
    <div class="row">
      <div class="col-lg-6 my-auto">
        <h3>Here are your users:</h3>
        <?php
        $sql = "SELECT username FROM login";
        if($result = mysqli_query($conn, $sql)){
          if(mysqli_num_rows($result) > 0){
            echo "<ul class='list-group'>";
            while($row = mysqli_fetch_array($result)){
              $link_address= $row['username'];
              ?>
              <li class="list-group-item"><?php echo $link_address; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php echo "<a href='remove.php?id=$link_address'>";?><button class='btn btn-primary btn-lg float-right'>Remove</button></a> </li>
                <?php
              }
              echo "</ul><br><br>";
              mysqli_free_result($result);
            }
          }
          else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
          }

          ?>
          <br>

        </div>
        <!-- /.row -->
        <div class="col-lg-6 my-auto">
          <h3>Received Messages:</h3>
          <?php
          $sql = "SELECT fullname,mobile,email,msg FROM contact";
          if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
              //echo "";
              while($row = mysqli_fetch_array($result)){
                ?>
                <ul class='list-group'>
                  <li class="list-group-item"><?php echo $row['fullname']; ?></li>
                  <li class="list-group-item">Mobile:<?php echo $row['mobile']; ?>
                    <br>Email:<?php echo $row['email']; ?>
                    <br>Message:<br>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['msg']; ?></li></ul><br>
                    <?php
                  }
                  echo "<br><br>";
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
        <!-- /.container -->

        <!-- Footer -->
        <br>  <footer class="py-5 bg-dark">
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
