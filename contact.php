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
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Header -->
    <div class="container">

     <!-- Page Heading/Breadcrumbs -->
     <h1 class="mt-4 mb-3">Contact
       <small>Subheading</small>
     </h1>

     <ol class="breadcrumb">
       <li class="breadcrumb-item">
         <a href="index.html">Home</a>
       </li>
       <li class="breadcrumb-item active">Contact</li>
     </ol>

     <!-- Content Row -->
     <div class="row">
       <!-- Map Column -->
       <div class="col-lg-8 mb-4">
         <!-- Embedded Google Map -->
         <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJOQdH1qK_wjsRS5TlOP3tYFI&key=AIzaSyAjKz9qY3OyMlHFoHx2D7iSxiSuyMIWIiE" allowfullscreen></iframe>
       </div>
       <!-- Contact Details Column -->
       <div class="col-lg-4 mb-4">
         <h3>Contact Details</h3>
         <p>
		   MIT Polytechnic Pune<br>
           rambaug colony
           <br>kothrud,Pune
           <br>
         </p>

       </div>
     </div>
     <!-- /.row -->

     <!-- Contact Form -->
     <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
     <div class="row">
       <div class="col-lg-8 mb-4">
         <h3>Send us a Message</h3>
         <form action="cont.php" method="POST" novalidate>
           <div class="control-group form-group">
             <div class="controls">
               <label>Full Name:</label>
               <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name." placeholder="Enter Your Name">
               <p class="help-block"></p>
             </div>
           </div>
           <div class="control-group form-group">
             <div class="controls">
               <label>Phone Number:</label>
               <input type="tel" class="form-control" name="mobile" required data-validation-required-message="Please enter your phone number." placeholder="Enter Your Mobile No">
             </div>
           </div>
           <div class="control-group form-group">
             <div class="controls">
               <label>Email Address:</label>
               <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address." placeholder="Enter Your Email">
             </div>
           </div>
           <div class="control-group form-group">
             <div class="controls">
               <label>Message:</label>
               <textarea rows="10" cols="100" class="form-control" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
             </div>
           </div>
           <div id="success"></div>
           <!-- For success/fail messages -->
           <button type="submit" class="btn btn-primary">Send Message</button>
         </form>
       </div>

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
        <p class="copyright text-muted small">Copyright &copy; ajay morale. All Rights Reserved</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor1/jquery/jquery.min.js"></script>
    <script src="vendor1/popper/popper.min.js"></script>
    <script src="vendor1/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
