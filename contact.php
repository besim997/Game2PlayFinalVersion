<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
  <title>Contact</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <?php
    if(!isset($_SESSION))
        {
            session_start();
        }
        if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
              echo "<script>";
              echo "alert('Please login first !')";
              echo "</script>";
              include("index.php");
              exit();
        }

        $username = $_SESSION['username'];
     ?>
</head>
<body>


<!-- Section: Contact v.1 -->
<section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Contact us</h2>
  <!-- Section description -->

    <div class="form-header text-center">
      <h2 class="mt-2"><i class="fa fa-envelope"></i> Write to us:</h3>
    </div><br>
  <!-- Grid row -->
  <div class="container">

  <div class="row">
    <!-- <div class="col-lg-1">
    </div> -->
    <!-- Grid column -->
    <div class="col-lg-6 mb-lg-0 mb-4 col-xs-12">

      <!-- Form with header -->
      <div class="card">
        <div class="card-body">
          <!-- Header -->
          <form action="form-to-mail.php" method="post" name="myemailform">
          <p class="dark-grey-text">We'll write rarely, but only the best content.</p>
          <!-- Body -->
          <div class="md-form">
            <i class="fa fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control" name="name">
            <label for="form-name">Your name</label>
          </div>
          <div class="md-form">
            <i class="fa fa-envelope prefix grey-text"></i>
            <input type="text" id="form-email" class="form-control" name="email">
            <label for="form-email">Your email</label>
          </div>
          <div class="md-form">
            <i class="fa fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control" name="subject">
            <label for="form-Subject">Subject</label>
          </div>
          <div class="md-form">
            <i class="fa fa-pencil prefix grey-text"></i>
            <textarea type="text" id="form-text" class="form-control md-textarea" rows="3" name="message"></textarea>
            <label for="form-text">Message</label>
          </div>
          <div class="text-center">
            <input class="btn btn-light-blue" type="submit" value="Submit">
          </div>
        </form>
        </div>
      </div>
      <!-- Form with header -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-6 col-xs-12">
      <div class="card">

          <iframe src="https://snazzymaps.com/embed/88539" width="100%" height="512px" style="border:none;"></iframe>
      <!-- Google map-->
  </div>
      <br>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating accent-1">
            <i class="fa fa-map-marker"></i>
          </a>
          <p> Arhiepiskop Angelarij,nr.1 , <br />1000 Skopje </p>
          <p class="mb-md-0">F. Y. Republic of Macedonia</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating accent-1">
            <i class="fa fa-phone"></i>
          </a>
          <p>+ 2 2034 141</p>
          <p class="mb-md-0">Mon - Fri, 9:00-18:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating accent-1">
            <i class="fa fa-envelope"></i>
          </a>
          <p>contact@game2play.com</p>
          <p class="mb-0">bs24491@seeu.edu.mk</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->
    <!-- <div class="col-lg-1">

    </div> -->
  </div>
  <!-- Grid row -->
</div>

</section>
<?php
  include('footer1.php');
 ?>
<!-- Section: Contact v.1 -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
