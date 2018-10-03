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
    <link href="css/search.css" rel="stylesheet">
</head>
</head>
<body>
  <?php include("adminIndex.php"); ?><br/>
     <form method="POST" action="actinsertprod.php" enctype="multipart/form-data" name="frmTest" id="frmTest">
       <p class="text-center h2-responsive">Add new product </p>
       <br />
   <div class="row">
     <div class="col">

     </div>
     <div class="col-6" style="font-weight:bolder;">
       <input type="text" class="form-control" name="productname" id="product" placeholder="Product name" pattern="[a-zA-Z0-9./$ ]+" title="Letters, numbers and characters only" required />
       <br />
       <textarea rows="3" class="form-control" name="productdescription" id="product" placeholder="Product description" pattern="[a-zA-Z0-9./ ]+" title="Letters, numbers and characters only" required></textarea>
       <br />
       <label for="product" style="font-weight:bolder;">Select picture/s:</label>

       <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="inputGroupFile01" name="productpicture[]"  multiple required aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">CTRL + Click to select</label>
          </div>

        </div>
        <small id="passwordHelpInline" class="text-muted" style="position: relative;top: -8px;">
          * First selected image will remain the logo
        </small><br />

        <div class="row" style="font-weight:bolder;">
          <div class=" form-groupcol-xs-4 col-md-6">
            <input type="text-sm" class="form-control"  name="productprice" id="product" placeholder="Price: USD $" pattern="[0-9]+([\.,][0-9]+)?" title="This should be a number with up to 2 decimal places." required >
            </div>
            <div class=" form-groupcol-xs-4 col-md-6">
            <input type="text-sm" class="form-control"  name="quantity" placeholder="Quantity" pattern="[0-9]+" title="Enter integer number( Minimum:1 )" required >
          </div>
        </div><br />
          <label for="product" style="font-weight:bolder;">Select category/ies of the product: </label>
          <div class="col">
            <?php
            include_once("dbconnect.php");
            $query = "SELECT catid,catname FROM category";
            $result = mysqli_query($conn,$query);
            echo "<div class=row>";
            while( $row = mysqli_fetch_array($result))
            {
              echo "<div class='col-3 form-check mb-2 mr-sm-2'>";
              echo "<input class='form-check-input' id='inlineFormCheckMD' type='checkbox' name=q1[] value=\"".$row['catid']."\"> ".$row['catname']."<br />";
              echo "</div>";
            }
            echo "</div>";
            ?>
            <br/>
            <div class="row">
              <div class="mx-auto">
                <input class="btn btn-info" type="submit" name="submit" value="Add">
                <a class='btn btn-danger'  href='adminindex.php'> Cancel </a><br>
              </div>
            </div>

     </form>

     </div>
     </div>
     <div class="col">

     </div>
   </div>
 <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="js/popper.min.js"></script>
 <script type="text/javascript" src="js/bootstrap.min.js"></script>
 <script type="text/javascript" src="js/mdb.min.js"></script> -->
 <script>


    $("#frmTest").submit(function(){
      var checked = $('#frmTest input:checked').length > 0;
      if (!checked){
          alert("Please select at least one category");
          return false;
      }
    });


 </script>
 </body>
</html>
