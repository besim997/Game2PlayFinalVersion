<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
  <title>Product Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>

</head>
<body>
  <br /><br /><br /><br /><br /><br />

  <div class="row" style="">

    <div class="col">
      <ul style="float:right; list-style-type:none;">
        <?php
        $prod = $_GET['id'];
        include("dbconnect.php");
        session_start();

        $query2="SELECT picture.picture, picture.pictureid
                 FROM product, picture
                 WHERE product.productid=picture.productid AND product.productid='$prod'";

        $result2= mysqli_query($conn,$query2);

        while($row2 = mysqli_fetch_assoc($result2))
        {

          echo  "<li style='padding-bottom: 5px;'>
          <img data-toggle=modal data-target='#myModal".$row2['pictureid']."' style='width: 50px; height: 50px;' src=images/".$row2['picture']." data-toggle=tooltip data-placement=top title='Click to expand' />";
          echo "</li>


          <div class='modal fade bd-example-modal-lg' id='myModal".$row2['pictureid']."'>";
          ?>
          <div class="modal-dialog modal-dialog-centered modal-lg" tabindex="-1" role="dialog" role="document">
            <div class="modal-content">
              <!-- Modal body -->
              <div class="modal-body" >
                <img src="images/<?php echo $row2['picture']; ?>" style="width: 65%;height: 100%;margin-left: 135px;" alt="photo"  />
              </div>


            </div>
          </div>
        </div>
          <?php

        }
         ?>
      </ul>
    </div>
    <?php
    $query = "SELECT *
              FROM product,price,stock
              WHERE product.productid='$prod' AND price.productid='$prod' AND stock.productid = '$prod'";

    $result= mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result))
    {
     ?>
    <div class="col-7" style="">
      <figure class="card card-product">
        <div class="row">


        <div class="col-sm-6">
          <img class="mx-auto d-block" data-toggle="modal" data-target=".myModal" src="images/<?php echo $row['logo']; ?>" width="350px" height="437px" alt="" style="float:left; " >
        </div>
        <div class="col-sm-5" style="padding: 10px;" >
          <div style=" ">
            <div class="price-wrap">
            </div>
          </div>
          <div class="row">
            <p class="h3-responsive"><b><?php echo $row['productname']; ?></b></p>
          </div>

          <div class="row">
            <p class="h7-responsive"><b><?php echo $row['productname']; ?></b> <?php echo $row['productdescription']; ?></p>
            </div>
          <div class="row ">
            <small id="passwordHelpInline" class="text-muted">
                <b><?php echo $row['quantity']; ?></b> items available on stock
            </small>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
              </div>
              <form action="addtocart.php" method="GET">
                <input type="hidden" name="productid" value="<?php echo $row['productid']; ?>" />


              <input type="hidden" name="total_days" id = "totaldays" value="<?php echo $row['activeprice']; ?>" />
              <input type="hidden" name="total_cost" id = "total" value="" />
              <input type="text" min="0" name="quantity" pattern="(5000|([1-4][0-9][0-9][0-9])|([1-9][0-9][0-9])|([1-9][0-9])|[1-9])" title="Enter a number.Minimum: 1" id="quantity" class="form-control" aria-label="Quantity" aria-describedby="inputGroup-sizing-default" required>

            </div>

          </div><br />
          <div class="text-center" style="position:relative; bottom: auto">
            <p class="badge badge-warning h6-responsive" style="font-size:102%;">Total Cost: $<span class="h6 total_cost "></span></p>
            <small id="passwordHelpInline" class="text-muted">
                <b>Shipping: </b> USD $5.00
            </small>
          </div>

            <div class="row" style="position:absolute; bottom:6px; width:100%" >
                <div class="col-6 ">
                    <span id="activeprice" style="color:#B12704; font-size:22px; font-weight:700;position: relative;top: 10px;">
                      <b>USD $<?php echo $row['activeprice']; ?></b>
                    </span>
                    <?php
                    if ($row['price'] != $row['activeprice'])
                    {
                      echo "<span class='text-center'><del class='price-old '>&nbsp;USD $".$row['price']."</del></span>";
                    }
                     ?>

                </div>
                <div class="col-6">
                  <button type="submit" name="submit" href="#" class="btn btn-info btn-md " style="position:relative; right:-53px !important;" >
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> <b>Add to &nbsp;&nbsp;&nbsp;   cart</b>
                  </button>
                  </form>
                </div>
            </div>
        </div>
        </div>
      </figure>
    </div>
    <?php
  }
     ?>
    <div class="col"></div>
  </div>

<?php
  include('footer1.php');
 ?>
<!-- Section: Contact v.1 -->

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script>
$("#quantity").on('keyup',function(){
   // alert('pressed')
        var totalcost= $("#totaldays").val() * $(this).val() + 5;
    $(".total_cost").html(totalcost);

    $('input[name="total_cost"]').val(totalcost);
})



</script>
</body>
</html>
