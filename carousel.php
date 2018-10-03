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
