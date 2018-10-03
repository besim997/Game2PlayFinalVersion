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
    <?php include("adminIndex.php"); ?><br/>
  <br/>
  <div class="container">
    <div class="row">
      <div class="col">

      </div>

  <div class="col-md-offset-4" >
<?php

include_once("dbconnect.php");
$categoryid=$_POST['select'];
$query="SELECT * FROM category WHERE catid='$categoryid' ";

$result=mysqli_query($conn,$query);

$row=mysqli_fetch_array($result);
?>

<form class="form" method="POST" action="editcatquery.php">

  <div class="form-group">
      <p class="text-center h2-responsive">Category name:</p>
      <input type="hidden" name="categoryid" value="<?php echo $row['catid']?>" />

    <br /><br />

    <input class="form-control" type="text" name="catname" value="<?php echo $row['catname'];?>" />
    <br /><br /><br />
    <input class="btn btn-info" type="submit" value="Update">
    <a class='btn btn-danger'  href='adminindex.php'> Cancel </a>

  </form>
  </div>
</div>
<div class="col">

</div>
</div>
</div>
<!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script> -->
  </body>
</html>
