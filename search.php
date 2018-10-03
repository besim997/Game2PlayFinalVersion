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
    <link href="css/search.css" rel="stylesheet">
</head>
<body>

  <?php
  include("dbconnect.php");
    $name = $_GET['name'];

  	   $make = '<h4>No match found!</h4>';
  	   $query = "SELECT DISTINCT * FROM product,price
        WHERE product.productid=price.productid AND product.productname
        LIKE '%$name%' ORDER BY CASE WHEN product.productname like '$name%' THEN 0
                 WHEN product.productname like '%%$name%%' THEN 1
                 WHEN product.productname like '%$name' THEN 2
                 ELSE 3
            END,product.productname";
       $result = mysqli_query($conn,$query);
       echo "<br /><br /><br /><br /><br /><br />";


       echo "
       <div >
         <h3 class=h3-responsive style=text-align:center;  > &nbsp;&nbsp;&nbsp; Search results for keyword: <i>$name</i></h3>
       </div>";
            $count = mysqli_num_rows($result);
            echo "
            <div>
              <h6 class=h6-responsive style='text-align:center;'><b>$count</b> result/s found. </h6><br />
            </div>";
            echo "<div class=row>";
  		      while($row = mysqli_fetch_array($result))
            {

                  ?>

                  <div class="col-md-3 col-sm-6">
                	<figure class="card card-product">
                		<div class="img-wrap"> <img src="images/<?php echo $row['logo']; ?>" /></div>
                		<figcaption class="info-wrap text-center">
                			<a href="productdetails.php?id=<?php echo $row['productid']; ?>" class="title"><?php echo $row['productname']; ?></a>
                			<div class="price-wrap">
                				<span class="price-new" style='color:#B12704;'> USD $<?php echo $row['activeprice']; ?></span>
                				<?php
                        if ($row['price'] != $row['activeprice'])
                        {
                        echo "<span class='text-center'><del class='price-old '>&nbsp; USD $".$row['price']."</del></span>";
                        }
                         ?>
                			</div> <!-- price-wrap.// -->
                		</figcaption>
                	</figure> <!-- card // -->
                </div>


              <?php


        }

        echo "</div>";

    mysqli_close($conn);


  ?>


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
