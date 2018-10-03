<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
  <title>Shopping cart</title>
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

     <style type="text/css">
     li {
      display: flex;
      flex-direction: row;
      text-align: center;
    }
     </style>
     </head>
<body>
  <br /><br /><br /><br /><br /><br /><br />

  <?php

        include("dbconnect.php");
        $sid = session_id();
        $query = "SELECT *
                  FROM shoppingcart,price,product
                  WHERE shoppingcart.sessionid='$sid' AND product.productid=shoppingcart.productid AND product.productid=price.productid";

        $result = mysqli_query($conn,$query);
        $sid = session_id();
        $sumQuery = "SELECT SUM(cost) as total, quantity FROM shoppingcart WHERE shoppingcart.sessionid='$sid'";
        $sum = mysqli_query($conn,$sumQuery);
        $row1 = mysqli_fetch_assoc($sum);

        echo "<div class=container>
              <ul class='list-group list-group-flush'>";
        while($row = mysqli_fetch_array($result))
        {
          echo "
          <li class='list-group-item '>
            <h6 class='h6-responsive font-weight-bold' style='position: absolute;bottom: 24px;'>
              ".$row['productname']."&nbsp;&nbsp;&nbsp;<b style='color:red'>x".$row['quantity']."</b>
            </h6>
            <a href='deletefromcart.php?productid=".$row['productid']."&cartid=".$row['cartid']."'>
              <button type=button class='btn btn-outline-danger' style='padding: 15px;float: right;'><b>X</b></button>
            </a>

            <span class='badge badge-dark text-center' style='float:right; padding:10px; margin:17px;'>
              USD $".$row['cost']."
            </span>
          </li>";
          echo "";
        }
        echo "</ul>";
          echo "<div>
          <span class='badge badge-danger' style='padding:12px;float:right;margin:10px; font-size:14px; margin-right:90px'>
            Total: USD $".$row1['total']."
          </span>
          </div></div>";

      ?>
    <form class="container" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST" style="text-align: right;margin-top: 16px;">


      <!-- Saved buttons are identified by their button IDs -->
       <input type="hidden" name="business" value="fa24841@seeu.edu.mk">

      <!-- Specify a Buy Now button. -->
      <input type="hidden" name="cmd" value="_xclick">

      <!-- Specify details about the item that buyers will purchase. -->
      <input type="hidden" name="item_name" value="<?php echo $row['productname']; ?>">
      <input type="hidden" name="amount" value="<?php echo $row1['total']; ?>">
      <input type="hidden" name="currency_code" value="USD">

      <input type="hidden" name="return" value="http://localhost:85/Game2Play/order.php">
      <!-- Saved buttons display an appropriate button image. -->
      <input type="image" name="submit" style=""
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
        alt="PayPal - The safer, easier way to pay online">
      <img alt="" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >


    <?php
    echo "</ul>";
    echo "</div>";
    echo "</form> ";


    ?>
<br /><br /><br /><br />
<?php
  include('footer1.php');
 ?>
<!-- Section: Contact v.1 -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
