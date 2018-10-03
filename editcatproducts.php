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
  <body>
<?php
    include("adminIndex.php");
    include_once("dbconnect.php");
    $categoryid = $_GET['category'];
    $query=" SELECT DISTINCT product.productid,product.productname , product.productdescription , price.price
              FROM product,category ,productcategory,price
              WHERE productcategory.catid='$categoryid'
              AND productcategory.productid=product.productid AND product.productid=price.productid" ;

    $result = mysqli_query($conn,$query);

    echo "<table class='table table-hover text-center'>";
    echo "<thead style='font-size:15px'>
      <tr>
        <th scope=col>#</th>
        <th scope=col>Product name: </th>
        <th scope=col>Description: </th>
        <th scope=col>Price: </th>
      </tr>
    </thead>";
    while($row=mysqli_fetch_array($result))
    {
      echo "<tr>
              <td width='5%'>".$row['productid']."</td>
              <td width='25%'>".$row['productname']."</td>
              <td width='25%'>".$row['productdescription']."</td>
              <td width='25%'>USD $".$row['price']."</td>";

    	echo "<td width=100px>";
    	echo "<a class='btn btn-info' href=editproductform.php?id=".$row['productid']."> Edit </a>";
    	echo "</td>";
    	echo "</tr>";

    }
    echo "</table>";

  ?>
  <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script> -->
    </body>
  </html>
