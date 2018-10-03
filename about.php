<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body><br>
  <div class="container">
    <div class="row">
      <div class="col">

      </div>
      <div class="col-lg-8 col-xs-12"><br><br><br><br><br>
        <p class="h1-responsive text-center" style="margin-bottom: -70px;position: relative;z-index:999; font-weight:900;letter-spacing: 2.5px;">
          Game2Play
        </p>
        <img class="mx-auto d-block" src="gaminglogo3.jpg" alt="" />
      </div>
      <div class="col">

      </div>
    </div>

  </div>
  <?php
  session_start();
  ?>
  <br><br><br>
  <div class="container-fluid">

      <div class="row">
        <div class="col-lg-6 col-xs-12">
          <div class="jumbotron text-center blue-grey lighten-5">
          <!--Title-->
          <h1 class="card-title h2-responsive font-bold"><strong>Who we are</strong></h1>
          <!--Subtitle-->

          <!--Text-->
          <div class="d-flex justify-content-center">
              <p class="card-text my-2" style="max-width: 43rem;">
                <b style="font-weight: 700;">Game2Play</b> is an e-commerce platform and a “community” to provide the best
                offers and qualities of <b style="font-weight: 700;"><a href="https://www.playstation.com/en-us/explore/ps4/" target="_blank">PlayStation4</a></b> products like: <b>Games</b>, <b>Gift cards</b>, <b>Accessories</b> and similar.
                 It does not own an inventory where customers can go and buy by themselves.
                 It has offices in Skopje, where interested people can ask about informations and contact the representatives of the company face-to-face.
              </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-xs-12">
        <div class="jumbotron text-center blue-grey lighten-5">
        <!--Title-->
        <h1 class="card-title h2-responsive font-bold"><strong>Our mission</strong></h1>
        <!--Subtitle-->

        <!--Text-->
        <div class="d-flex justify-content-center">
            <p class="card-text my-2" style="max-width: 43rem;">
              Our vision is to provide a friendly space to our customers, but not just specifically for PlayStation gamers,
               but also for people who are interested to become close with the Playstation World and the extraordinary satisfaction this video game console gives to people.
               We put the customer's services on the first place, that's why we are sure on what we are doing. Those who already know the reputation of our company, are our best advertisement.
            </p>
        </div>
      </div>
    </div>
        </div>


    </div>
  </div>


  <?php
    include('footer1.php');
    $username = $_SESSION['username'];
   ?>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  </body>
  </html>
