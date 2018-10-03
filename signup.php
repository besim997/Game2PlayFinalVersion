<?php
include_once("dbconnect.php");


      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $username=$_POST['username'];
      $password=$_POST['password'];
      $email=$_POST['email'];
      $address=$_POST['address'];
      $zip=$_POST['zip'];
      $phone=$_POST['phone'];


        $query="INSERT INTO user
                  VALUES(NULL,'$firstname','$lastname','$username','$password','$email','$address','$zip','$phone',0)";

        mysqli_query($conn,$query) or die (mysqli_error($conn));

        echo "<script>";
        echo "alert('Successfully registered! Now log in')";
        echo "</script>";
        include('index.php');

 ?>
