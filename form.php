<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Feedback Form</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/heroic-features.css" rel="stylesheet">

</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="profile.php">FeedBack</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="profile.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  include "connection.php";
  session_start();
  //==============================================
  if(isset($_GET['unm'])){
    $u=$_GET['unm'];
    //echo $u;
  }
  if(isset($_GET['img'])){
    $imagess=$_GET['img'];
    //echo $imagess;
  }
  if(isset($_GET['id'])){
    $ename=$_GET['id'];
    //echo  $ename;
  }
  if(isset($_GET['fil'])){
    $imagess=$_GET['fil'];
    //echo  $ename;
  }
  //=====================================================
  if(isset($_SESSION['login_user'])){
    $u=$_SESSION['login_user'];

  }
  if(isset($_POST['ename'])){
    $ename = mysqli_real_escape_string($conn,$_POST['ename']);
  }

  if(isset($_SESSION['login_user'])) {
    $uName=$_SESSION['login_user'];
  }

  if(isset($_GET['unm'])){
    $u=$_GET['unm'];
    //echo $u;
  }
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $target = "images/" . basename($_FILES["image"]["name"]);
    //  $uploadOk = 1;

    //==========================================
    //    $imageFileType = pathinfo($target,PATHINFO_EXTENSION);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target)) {
      echo " ";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }

    $imagess= basename($_FILES["image"]["name"],".jpg"); // used to store the filename in a variable
  }
  $_SESSION['img']=$imagess;
  $_SESSION['suser']=$u;
  $_SESSION['evtn'] = $ename;
  //storind the data in your database
  //$data="form.php?id=".$ename."&user=".$u."&fil=".$imagess;
  //}

$_SESSION['loggedIN']=$u;

  ?>

  <!-- Page Content -->
  <div class="container">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">

      <?php echo "<h1 class='display-3'>".$ename." feedback form:</h1>"; ?>
<lable class="form-group">Add question to form:</lable><br><br>
<textarea required autocomplete="off" name="question" id="question" placeholder="Enter question to add into form" class="form-control"></textarea>
<br><button type="submit" class="btn btn-primary "/>submit</button>
    </header>
<?php
include "connection.php";
$sql="select * from login where username='$u'";
$result = $conn->query($sql);

        while($re=$result->fetch_assoc()){
          $fn=$re['fn'];
          $ln=$re['ln'];
          $email=$re['email'];
        }

 ?>
    <form action="form2.php" method="post" >
      <div class="col-lg-6 my-auto form-group">
        <?php echo "        <lable class='form-group'><input type='hidden' required autocomplete='off' name='name' id='name' placeholder='Enter Name' class='form-control' value='".$fn." ".$ln."'/><br>
          <lable class='form-group'><input type='hidden'required autocomplete='off' name='email' id='email' placeholder='Enter Email'class='form-control' value='".$email."'/><br>";
         ?>
            <lable class="form-group">Review:<textarea class="form-control" rows="3" name="review" id="review" placeholder="Review"class="form-control"></textarea><br>

              <lable class="form-group">Overall Experience:</lable><br><label class="radio-inline"><input type="radio" name="optradio" value="worst">&nbsp;Worst  &nbsp;&nbsp;&nbsp;  </label>
              <label class="radio-inline"><input type="radio" name="optradio" value="good">&nbsp;Good  &nbsp;&nbsp;&nbsp;  </label>
              <label class="radio-inline"><input type="radio" name="optradio" checked="" value="better">&nbsp;Better  &nbsp;&nbsp;&nbsp;  </label>
              <label class="radio-inline"><input type="radio" name="optradio"value="best">&nbsp;Best  &nbsp;&nbsp;&nbsp;  </label><br>

              <lable class="form-group">Timely Responce:</lable><br><br><label class="radio-inline"><input type="radio" name="optradio1" value="worst">&nbsp;Worst  &nbsp;&nbsp;&nbsp;  </label>
              <label class="radio-inline"><input type="radio" name="optradio1" value="good">&nbsp;Good  &nbsp;&nbsp;&nbsp;  </label>
              <label class="radio-inline"><input type="radio" name="optradio1" checked="" value="better">&nbsp;Better  &nbsp;&nbsp;&nbsp;  </label>
              <label class="radio-inline"><input type="radio" name="optradio1"value="best">&nbsp;Best  &nbsp;&nbsp;&nbsp;  </label><br>

              <lable class="form-group">Suggestion:<textarea class="form-control" rows="3" name="sugg" id="sugg" placeholder="Enter Your Suggestion here"class="form-control"></textarea><br>
                <button type="submit" class="btn btn-primary btn-lg"/>submit</button><br><br>
              </div>
            </form><br><br>

            <lable class="form-group">Here is link for your form:</lable><br><br>
            <div class="card" style="width: 40rem;">
              <img class="col-lg-5 card-img-top" src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://localhost:8080/sample/form.php&choe=UTF-8" alt="QR code">
              <p id="copyTarget"><?php echo "localhost:8080/sample/form.php?unm=$u&id=$ename&img=$imagess";?> </p>
              <button id="copyButton" class="btn btn-secondary btn-lg">Copy</button></div><br><br>
              <script>
              document.getElementById("copyButton").addEventListener("click", function() {
                copyToClipboard(document.getElementById("copyTarget"));
              });

              function copyToClipboard(elem) {
                // create hidden text element, if it doesn't already exist
                var targetId = "_hiddenCopyText_";
                var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
                var origSelectionStart, origSelectionEnd;
                if (isInput) {
                  // can just use the original source element for the selection and copy
                  target = elem;
                  origSelectionStart = elem.selectionStart;
                  origSelectionEnd = elem.selectionEnd;
                } else {
                  // must use a temporary form element for the selection and copy
                  target = document.getElementById(targetId);
                  if (!target) {
                    var target = document.createElement("textarea");
                    target.style.position = "absolute";
                    target.style.left = "-9999px";
                    target.style.top = "0";
                    target.id = targetId;
                    document.body.appendChild(target);
                  }
                  target.textContent = elem.textContent;
                }
                // select the content
                var currentFocus = document.activeElement;
                target.focus();
                target.setSelectionRange(0, target.value.length);

                // copy the selection
                var succeed;
                try {
                  succeed = document.execCommand("copy");
                } catch(e) {
                  succeed = false;
                }
                // restore original focus
                if (currentFocus && typeof currentFocus.focus === "function") {
                  currentFocus.focus();
                }

                if (isInput) {
                  // restore prior selection
                  elem.setSelectionRange(origSelectionStart, origSelectionEnd);
                } else {
                  // clear temporary content
                  target.textContent = "";
                }
                return succeed;
              }
            </script>
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
                <li class="footer-menu-divider list-inline-item">&sdot;</li>
                <li class="list-inline-item">
                  <a href="privacy.php">  Privacy</a>
                </li>
              </ul>
              <p class="copyright text-muted small">Copyright &copy; Your Company 2017. All Rights Reserved</p>
            </div>
          </footer>

          <!-- Bootstrap core JavaScript -->
          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/popper/popper.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

        </body>

        </html>
