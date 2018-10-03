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
// function productsbyCat($cat)
// {
//   include("dbconnect.php");
//   echo '<link rel="stylesheet" type="text/css" href="style.css" />';
//   $query = "SELECT DISTINCT product.productid, product.productname, product.logo, price.activeprice, category.catname
//   FROM product , productcategory , picture ,price, category
//   WHERE product.productid=productcategory.productid AND picture.productid=product.productid AND productcategory.catid=category.catid
//   AND product.productid=price.productid AND productcategory.catid =" . $cat  ;
//
//   $catQuery = "SELECT catname FROM category WHERE catid ='$cat'";
//   $result = mysqli_query($conn,$query);
//   $result1 = mysqli_query($conn,$catQuery);
//   echo "<div class=container>";
//   while($row1 = mysqli_fetch_row($result1))
//   {
//     echo "<br /><br /><br /><br /><br /><br />";
//
//       echo "<div class=row>
//       <div class=col-sm-5></div>
//       <div class=col-sm-3>
//       <h1 style='margin:0 auto;' ><span class=badge badge-primary style='background-color:gray;'> ".$row1[0]."</span></h1>
//       </div>
//       <div class=col-sm-3></div>
//       </div>";
//   }
//
//     echo "<div class=row>";
//   while($row = mysqli_fetch_array($result))
//   {
//
//     echo "<div class='col-sm-4 text-center' >";
//     echo  "<span >";
//
//     echo "<a href = productdetails.php?id=".$row['productid'].">";
//
//     echo "<img width=230px height=280px style='margin-top:50px;' src=images/".$row['logo'].". />";
//     echo "<br />";
//     echo " <div class='producttitle '>";
//     echo $row['productname'];
//     echo "</div>";
//
//     echo "<div class=productprice><div class=pull-right></div><div class=pricetext>";
//     echo"$";  echo $row['activeprice'];
//     echo "<br />";
//     echo "<br />";
//     echo "</div>";
//     echo "</div>";
//     echo "</a>";
//     echo "</span>";
//     echo "</div>";
//
//
//   }
//   echo "</div>";
//   echo "</div>";
// }





function cartDetails($sid)
{
}
?>

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
