<?php

include_once("dbconnect.php");
$FID = $_POST['FID'];
$answer = $_POST['answer'];

$query="UPDATE faq SET answer='$answer' WHERE FID='$FID'";

mysqli_query($conn,$query) or die(mysqli_error($conn));
include('answer.php');
?>
