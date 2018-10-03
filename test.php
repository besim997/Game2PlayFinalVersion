<?php
//index.php
include("dbconnect.php");
function make_query($conn)
{
 $query = "SELECT DISTINCT product.productid, product.productname, product.logo
  FROM picture,product WHERE picture.productid=product.productid ORDER BY product.datecreated DESC LIMIT 0,6";
 $result = mysqli_query($conn, $query);
 return $result;
}

function make_slide_indicators($conn)
{
 $output = '';
 $count = 0;
 $result = make_query($conn);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>
   ';
  }
  else
  {
   $output .= '
   <li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>
   ';
  }
  $count = $count + 1;
 }
 return $output;
}

function make_slides($conn)
{
 $output = '';
 $count = 0;
 $result = make_query($conn);
 while($row = mysqli_fetch_array($result))
 {
  if($count == 0)
  {
   $output .= '<div class="item active">';
  }
  else
  {
   $output .= '<div class="item" >';
  }
  $output .= '
    <a href = productdetails.php?id='.$row["productid"].'>";
   <img style="width: 380px; height: 400px;" src="images/'.$row["logo"].'" alt="'.$row["logo"].'" />
   <div class="carousel-caption">
    <h3>'.$row["productname"].'</h3>
   </div></a>
  </div>
  ';
  $count = $count + 1;
 }
 return $output;
}

?>
<!DOCTYPE html>
<html>
 <head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
   <div>
  <br />
  <div class="container">
   <br />
   <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <?php echo make_slide_indicators($conn); ?>
    </ol>

    <div class="carousel-inner">
     <?php echo make_slides($conn); ?>
    </div>
    <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
     <span class="glyphicon glyphicon-chevron-left"></span>
     <span class="sr-only">Previous</span>
    </a>

    <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
     <span class="glyphicon glyphicon-chevron-right"></span>
     <span class="sr-only">Next</span>
    </a>

   </div>
  </div>
</div>

  <style type="text/css">

  #dynamic_slide_show.carousel.slide {
    width: 100%;
    height: : 100%;
    max-width: 600px; !important
  }
  .carousel-inner img {
  margin: auto;
  }
  </style>
 </body>
</html>
