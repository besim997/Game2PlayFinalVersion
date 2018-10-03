<?php
session_start();


//$username = $_SESSION['username'];
include_once("dbconnect.php");
$productid = $_GET['productid'];
$quantity = $_GET['quantity'];
$cost = $_GET['total_cost'];

$stockquantity = " SELECT * FROM stock, product WHERE product.productid='$productid' AND stock.productid='$productid'";
$result2=mysqli_query($conn,$stockquantity);
$row = mysqli_fetch_array($result2);
if($quantity <= $row['quantity'])
{
  $query3="SELECT *
  FROM product ,price
  WHERE product.productid='$productid' AND price.productid='$productid' AND price.productid=product.productid ";
  $result=mysqli_query($conn,$query3);
  $row3=mysqli_fetch_assoc($result);
  $price=$row3['activeprice'];
  $sid=session_id();

  $query="INSERT INTO shoppingcart VALUES(NULL,'$productid','$sid', '$cost', '$quantity')";
  mysqli_query($conn,$query) or die (mysqli_error($conn));
  // echo "<script>";
  // echo "alert('Product Added to CART !')";
  // echo "</script>";

  $updatequantity = "UPDATE stock SET quantity = quantity - '$quantity'  WHERE productid='$productid'";
  mysqli_query($conn,$updatequantity)  or die (mysqli_error($conn));
  include("shoppingcartdetails.php");
}
else {
  echo "<script>";
  echo "alert('We are sorry, we have not that much products in the stock !')";
  echo "</script>";
  print "<script language=Javascript>document.location.href='productdetails.php?id=".$productid ."' ;</script>";
}

// header("Location:productdetails.php?id=".$productid ."");


 ?>
