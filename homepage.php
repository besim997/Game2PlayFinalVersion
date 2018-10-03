<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
  <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

    <!-- Start your project here-->



    <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
  </br></br></br></br>
    <div class="carousel-inner" role="listbox" style="height:600px;">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="images/asasinscreed.jpg" alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <p>First text</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="images/fifa2018.jpg" alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Strong mask</h3>
                <p>Secondary text</p>
            </div>
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="images/battlefield1.jpg" alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <p>Third text</p>
            </div>
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">
          <img src="images/back1.png" style="width:42px; height:42px;" alt="">
        </span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next" >
        <span class="carousel-control-next-icon" aria-hidden="true">
          <img src="images/next.png" style="width:42px; height:42px;" alt="" >
        </span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
  <!--/.Carousel Wrapper-->
</br></br>
  <div class="container" id="latestproducts">
    <div >
      <h1 style="text-align:center;"  > Latest products </h1>

    </div>

  </br></br>
  </div>
  <div class="container" style="padding:25px;">
    <!-- <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <img src="images/asasinscreed.jpg" class="fotoHomepage" />
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <h1 style="text-align:center;">Assassin's Creed</h1></br>
        <p>
          <strong>Assassin's Creed</strong> is a franchise centered on an action-adventure video game series developed by Ubisoft. It depicts a centuries-old struggle pitting the Assassins, who fight for peace and free will, against the Templars, who believe peace comes through control of humanity. The series features historical fiction mixed with real-world historical events and figures. The series took inspiration from the novel Alamut by the Slovenian writer Vladimir Bartol,[1] while building upon concepts from the Prince of Persia series.
        </p>
      </div>
    </div> -->
  </br>
  <?php
    include('dbconnect.php');
    $lastProductQuery = "SELECT *
                          FROM product ORDER BY datecreated DESC LIMIT 0,5;" ;
    $result = mysqli_query($conn,$lastProductQuery) or die(mysqli_error($conn));
    for($x = 0; $x < $row = mysqli_fetch_array($result) ; $x++)
    {

      if($x%2 == 0 )
      {
        echo "<div class=row style='border-bottom:1.6px groove #b4bac1; padding-bottom:10px;padding-top:10px;'>
          <div class=col-lg-5 col-md-5 col-sm-12 col-xs-12>
            <img src=images/".$row['logo']." class=fotoHomepage />
          </div>
          <div class=col-lg-7 col-md-7 col-sm-12 col-xs-12>
            <h1 style=text-align:center;>".$row['productname']."</h1></br>
            <p>
              <strong>".$row['productname']."</strong> ".$row['productdescription']."
            </p>";
            echo "
                  <div class='form-row text-center'>
                    <div class=col-12>
                    <a href=productdetails.php?id=".$row['productid']." type=button class='btn btn-secondary btn-lg' style='position: relative;top: 113px;'>
                      Details
                    </a>
                    </div>
                  </div>
            ";
          echo"</div>
        </div>";
      }else{
        echo "<div class=row style='border-bottom:1.6px groove #b4bac1;padding-bottom:10px; padding-top:10px;'>";
        echo "<div class=col-lg-7 col-md-7 col-sm-12 col-xs-12>";
        echo "<h1 style=text-align:center;> ".$row['productname']."  </h1></br>";
        echo "<p>
        <strong> ".$row['productname']." </strong> ".$row['productdescription']."
        </p>";
        echo "
              <div class='form-row text-center'>
                <div class=col-12>
                  <a href=productdetails.php?id=".$row['productid']." type=button class='btn btn-secondary btn-lg' style='position: relative;top: 113px;'>
                    Details
                  </a>
                </div>
              </div>
        ";
        echo "</div>";
        echo "<div class=col-lg-5 col-md-5 col-sm-12 col-xs-12>";
        echo "<img src=images/".$row['logo']." class=fotoHomepage />";
        echo "</div>";
        echo "</div>";
        echo "</br>";
      }

    }
   ?>





  </div>

  <?php
    include("footer1.php");
   ?>


    <!-- /Start your project here-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
