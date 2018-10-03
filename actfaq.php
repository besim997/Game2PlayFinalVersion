<?php
  include("dbconnect.php");
  $name = $_POST['name'];
  $body = $_POST['body'];

  $query = "INSERT INTO faq VALUES(NULL, '$name', '$body', NULL)";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));;
  include('faq.php');
  ?>
