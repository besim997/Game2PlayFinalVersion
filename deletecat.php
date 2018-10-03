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
    <?php include("adminIndex.php"); ?>
  <br/>
  <div class="container" >
    <form method="GET" action="actdeletecat.php" onsubmit="return confirm('Are you sure you want to delete the category?');">
      <p class="text-center h2-responsive">Select category to delete: </p><br/>
      <div class="row">
        <div class="col"></div>
      <div class="col-xs-4">
      <select name="category" class="form-control " title="Choose one of the following..."  >

       <?php
       include("dbconnect.php");
       $query = "SELECT * FROM category";
       $result = mysqli_query($conn, $query);

       while ($row = $result->fetch_assoc())
       {
         unset($catid, $name);
         $catid = $row['catid'];
         $catname = $row['catname'];
         echo '<option style=cellspacing:30px value="'.$row['catid'].'">'.$row['catname'].'</option>';

       }
       echo "</select>";
       echo "<br />";
       echo "<br />";
         ?>


         <div class='form-row text-center'>
           <div class=col-12>
             <input class="btn btn-info" type="submit" name="sumit" value="Delete" >
             <a class='btn btn-danger'  href='adminindex.php'> Cancel </a>
           </div>
         </div>
       </div>
       <div class="col"></div>
     </div>


  </form>
</div>
  <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/popper.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script> -->
    </body>
  </html>
