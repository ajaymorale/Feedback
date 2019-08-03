<!DOCTYPE html>
<?php
SESSION_START();

?>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Review-FeedBack</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="vendor1/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->

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
    <aside class="banner">

      <div class="container">

        <div class="row">
          <div class="col-lg-6 my-auto">
            <h2>Check out your feedbacks here:</h2>
          </div>
        </div>

      </div>
      <!-- /.container -->
    </aside>

    <div class="container">

      <!-- Jumbotron Header -->

      <?php
    //  SESSION_START();
      if(isset($_SESSION['login_user'])) {
        $uName= $_SESSION['login_user'];
      }
      else{
        header("location: index.html");
             echo "success";
      }

        $value = $_GET['id'];
        include "connection.php";
        $sql = "SELECT * FROM events where ename='$value'";
  if($result = mysqli_query($conn, $sql)){
     if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
     $link_address= $row['ename'];
        ?>
      <!-- Page Features -->
      <br>
       <div class="card">
          <div class="card-header"><?php  echo  "<h4 class='card-title'>" . $row['sname'] . "</h4>"; ?></div>
          <div class="card-body">
            <h5 class="card-title">Feedback:</h5>
          <?php
                      echo  "<table><tr><td> Review:</td><td>&nbsp;&nbsp;" .$row['review'] . "<br></td></tr>";
                      echo  " <tr><td>Email:</td><td>&nbsp;&nbsp;" .$row['semail'] . "<br></td></tr>";
                      echo  " <tr><td>Overall Experiance:</td><td>&nbsp;&nbsp;" .$row['Overall'] . "<br></td></tr>";
                      echo  " <tr><td>Timely Responce:</td><td>&nbsp;&nbsp;" .$row['timely'] . "<br></td></tr>";
                      echo  " <tr><td>Suggestion:</td><td>&nbsp;&nbsp;" .$row['suggestion'] . "<br></td></tr>";

                  echo "</table></div></div><br><br>";
              }
           mysqli_free_result($result);
       } else{
              echo "No records matching your query were found.";
          }
       }
        else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
       }
       ?>

      <!-- /.row -->

    </div>
    <!-- /.container -->

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
        </ul>
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
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
