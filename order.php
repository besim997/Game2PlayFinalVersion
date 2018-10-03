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
      </head>
<body>
  <br /><br /><br /><br /><br /><br /><br />
<?php

  include('dbconnect.php');
  $transactionId = $_GET['tx'];
  $date = date('Y-m-d H:i:s');
  $flag = $_GET['st'];
  $amount = $_GET['amt'];
  $username = $_SESSION['username']  ;
  $usernameQuery = "SELECT * FROM user WHERE username = '$username'";
  $result = mysqli_query($conn, $usernameQuery);
  while($row = mysqli_fetch_assoc($result))
  {
    $userid = $row['userid'];
    $query = " INSERT INTO order_ VALUES (NULL,'$transactionId','$date','$flag','$amount', '$userid')";
    mysqli_query($conn, $query);

  echo "<div class=container>
        <p class='h2-responsive text-center'>
          Order completed
        </p>
        <ul class='list-group list-group-flush text-center'>
        <li class='list-group-item '>
          Buyer: <strong>".$row['firstname']." ".$row['lastname']."</strong>
        </li>
          <li class='list-group-item '>
            Transaction ID: <strong>".$transactionId."</strong>
          </li>
          <li class='list-group-item '>
            Date : <strong>".$date."</strong>
          </li class='list-group-item '>
          <li class='list-group-item '>
            Amount : USD $<strong>".$amount."</strong>
          </li>
        </ul>";
        echo "<div class='form-row text-center'>
          <div class=col-12>
            <a href=homepage.php type=button class='btn btn-secondary btn-lg'>
              Return to Homepage
            </a>
          </div>
        </div>";
      }
 ?>
 <?php
   include('footer1.php');
  ?>
 <!-- Section: Contact v.1 -->
 <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="js/popper.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/mdb.min.js"></script>
 </body>
