<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FeedBack </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor1/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.css" rel="stylesheet">

  </head>

  <body>

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
              <a class="nav-link" href="timeline.php">Events
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav><br><br><br>
    <div class="container">
    <div class="row text-center">
<?php
include "connection.php";
$sql = "SELECT ename,images FROM events group by (ename)";
if($result = mysqli_query($conn, $sql)){
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
$link_address= $row['ename'];
$imge=$row['images'];
  echo "<div class='col-lg-6 col-md-6 mb-4'>";
    echo "<div class='card'>";
      echo "<img class='card-img-top' src='images/$imge.jpg' alt='$link_address' height='320px' width='325px'>";
      echo "<div class='card-footer'>";
        echo "<a href='review.php?id=$link_address' class='btn btn-primary'>$link_address</a>";
        ?><br><br><div class="progress">
  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<?php
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
<!-- /.row -->

</div>

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
        <p class="copyright text-muted small">Copyright &copy; Your Company 2017. All Rights Reserved</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/popper/popper.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
