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

  include("adminIndex.php");
  include_once("dbconnect.php");
  $id=$_GET['id'];
  $query=" SELECT product.productname,product.productdescription,price.price,price.activeprice
            FROM product,price WHERE product.productid='$id' AND product.productid=price.productid  ";


  $result=mysqli_query($conn,$query);

  $row=mysqli_fetch_row($result);

  ?>
   <div class="container">
     <form method="POST" action="acteditproduct.php">
       <br /></b><p class="text-center h2-responsive">Edit Product: </p>
       <br />
   <div class="form-group">
     <div class="row">
       <div class="col"></div>
     <div class="col-6">
       <input type="hidden" name="productid" value="<?php echo $id ?>" />
      <label for="product">Product name:</label>
       <input type="text" class="form-control" name="productname" id="product" value="<?php echo $row[0];?>" required />
       <br />
       <label for="product">Product description:</label>
       <textarea class="form-control" name="productdescription" id="product" value="<?php echo $row[1];?>" required><?php echo $row[1];?></textarea>
       <br />
        <div class="row">
          <div class="col-6">
            <label for="product">Price:</label>
            <input type="text-sm" class="form-control"  name="productprice" id="product" value="<?php echo $row[2];?>" required />
          </div>
          <div class="col-6">
              <label for="product">Active price:</label>
              <input type="text-sm" class="form-control"  name="discountprice" id="product" value="<?php echo $row[3];?>" required />
          </div>
        </div>
          <div class="col-xs-6">
          <label for="product">Discount:</label>
       <input type="text-sm" class="form-control" name="activeprice" id="act" placeholder="%" />
        </div>
        <br /><br />
         <div class='form-row text-center'>
           <div class=col-12>
             <input class="btn btn-info" type="submit" name="submit" value="Update">
             <a class='btn btn-danger'  href='adminindex.php'> Cancel </a>
           </div>
         </div>

         </div>
         <div class="col"></div>
         </div>
     </form>
   </div>
 </div>
 <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
   <script type="text/javascript" src="js/popper.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/mdb.min.js"></script> -->
   </body>
 </html>
