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
    <link rel=”stylesheet” id=”font-awesome-css” href=”//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css” type=”text/css” media=”screen”>
    <style type="text/css">
      .cimiLogo
      {
          width: 100px;
          height: 90px;
      }
      .full-height, .full-height body, .full-height header, .full-height header .view, .view .full-bg-img{
        height: auto;
      }
      .carousel-indicators .active {

          background-color: #f31515;

      }
      .fotoHomepage
      {
        border:3px solid purple;
        padding:5px;
        width: 100%;
        height: auto;
        background-size: cover;
      }
      .social
      {
          width: 42px;
          height: 42px;
          position: fixed;
          top:36%;
          left: 94.6%;
          border-radius: 100%;
          z-index: 999;
      }
      .social1
      {
          width: 42px;
          height: 42px;
          position: fixed;
          top:43%;
          left: 94.6%;
          border-radius: 100%;
          z-index: 999;
      }
      .social2
      {
          width: 42px;
          height: 42px;
          position: fixed;
          top:50%;
          left: 94.6%;
          border-radius: 100%;
          z-index: 999;
      }
      .social3
      {
          width: 42px;
          height: 42px;
          position: fixed;
          top:57%;
          left: 94.6%;
          border-radius: 100%;
          z-index: 999;
      }


      .upArrow{
        width: 62px;
        height: 62px;
        border-radius: 90%;
      }
      #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        left: 94%;
        z-index: 99;
        cursor: pointer;

      }

    </style>

</head>
<body>

    <!-- Start your project here-->


    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar" style="padding-bottom: 0px;background-color:white;" >
            <a href="homepage.php">  <img src="gaminglogo.jpg" class="cimiLogo" />  </a>
            <button style="background-color:black;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>
            <div class="collapse navbar-collapse <!--justify-content-center-->" id="navbarSupportedContent">
                <ul class="navbar-nav" style="padding: 22px; padding-left: 50px;" >
                    <li class="nav-item active">
                        <a class="nav-link" style="color:black;padding-right:20px;" href="homepage.php"> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black;padding-right:20px;" href="contact.php"> Contact </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black;padding-right:20px;" href="about.php"> About </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black;padding-right:20px;" href="faq.php"> FAQ </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="color:black;padding-right:20px;" href="shoppingcartdetails.php"> Shopping Cart </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link   dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black;padding-right:20px;" href="#"> Categories </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                          <?php
                          include("dbconnect.php");

                          $query = " SELECT * FROM category" ;
                          $result = mysqli_query($conn, $query);
                          	echo "<ul style='list-style-type:none;margin-left: -33px;position: relative;' class='sidebar-nav'>";
                          	while ( $row = mysqli_fetch_array($result))
                          	{
                          		echo "<li>";
                          		echo "<a  href = productbycat.php?catid=".$row['catid'].">";
                          		echo $row['catname'];
                          		echo "</a></li>";
                          	}

                          	echo "</ul>";
                            ?>
                        </div>
                    </li>

                </ul>

            </div>
            <!-- Search form -->
            <form action="search.php" class="form-inline md-form form-sm" style="width: 394px; position:relative;top:8px;">
              <!-- <div class="input-group">

              </div> -->
              <input class="form-control form-control-sm mr-3 w-75" type="text" name="name" placeholder="Search" aria-label="Search">
                <i class="fa fa-search" aria-hidden="true">
                </i>
            </form>
            <a class="nav-link" style="color:white;font-size:14px;" href="logout.php">
            <button type="button" class="btn btn-default btn-sm" style="width:auto;height:50px;float:right; font-size:13px; font-family:arial; font-weight:bold;">
               LOG OUT
            </button></a>
        </nav>
    </header>
    <!--Carousel Start Besim-->
    <!--Carousel Wrapper-->
    <div class="container">
      <a href="https://www.facebook.com/" target="_blank"><img src="images/facebook.jpg" class="social" /></a>
      <a href="https://www.twitter.com/" target="_blank"><img src="images/twitter2.jpg" class="social1" /></a>
      <a href="https://www.instagram.com/" target="_blank"><img src="images/instagram.jpg" class="social2" /></a>
      <a href="https://www.linkedIn.com/" target="_blank"><img src="images/linkedin.png" class="social3" /></a>
      <a href="javascript:topFunction();"  id="myBtn" title="Go to top">
        <img src="images/up-arrow.png" class="upArrow" alt="" style="">
      </a>
    </div>
    <!--Carousel Wrapper-->


  </br></br>
  </div>
  <div class="container" style="padding:25px;">
  </br>


  </br>



  </div>
<!-- /Start your project here-->
    <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script> -->

    <script>
// When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
          if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
              document.getElementById("myBtn").style.display = "block";
          } else {
              document.getElementById("myBtn").style.display = "none";
          }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
      }
    </script>



<!-- Footer -->
<footer class="page-footer font-small elegant-color-dark pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mt-md-0 mt-3">

          <!-- Content -->
          <h5 class="text-uppercase">
            <a href="javascript:topFunction();">Game2Play</a>
          </h5>
          <p>Because playing never gets old. </p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase" style="border-left: 4px solid #2BBBAD">&nbsp;Customer services</h5>

            <ul class="list-unstyled" style="list-style-type: none;">
              <li>
                <a href="shoppingcartdetails.php"> ➥&nbsp;Cart </a>
              </li>
              <li>
                <a href="contact.php"> ➥&nbsp;Contact </a>
              </li>
              <li>
                <a href="about.php"> ➥&nbsp;About </a>
              </li>
              <li>
                <a href="faq.php"> ➥&nbsp;FAQ </a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase" style="border-left: 4px solid #2BBBAD">&nbsp;Contact</h5>

            <ul class="list-unstyled">
              <li>


                <i class="fa fa-home" aria-hidden="true"> </i>&nbsp; Street 7, Number 7 Radusha, Skopje
              </li>
              <li>
                <a href="mailto:besimsallahi@hotmail.com">
                  <i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;  bs24491@seeu.edu.mk
                </a>
              </li>
              <li>
                <i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;  +389 70 727 439
              </li>
              <li>
                <i class="fa fa-fax" aria-hidden="true"></i>&nbsp;   +389 2 2034 141
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="homepage.php"> Game2Play</a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
</body>
</html>
