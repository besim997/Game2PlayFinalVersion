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
      include("dbconnect.php");
      $query = "SELECT * FROM order_, user WHERE order_.userid = user.userid";
      $result = mysqli_query($conn, $query);
      echo "<table class='table table-hover text-center'>";
      echo "<thead>
        <tr>
          <th scope=col>#</th>
          <th scope=col>Ordered by:</th>
          <th scope=col>Transaction ID:</th>
          <th scope=col>Date:</th>
          <th scope=col>Status:</th>
          <th scope=col>Amount:</th>
        </tr>
      </thead>";
      while ( $row = mysqli_fetch_array($result))
      {
        echo "<tr>
                <td  width='10%'>".$row['orderid']."</td>
                <td>".$row['firstname']." ".$row['lastname']."</td>
                <td>".$row['transactionid']."</td>
                <td>".$row['date']."</td>
                <td>".$row['flag']."</td>
                <td>USD $".$row['amount']."</td>
              </tr>";
      }
      echo "</table>";
      echo "<div class='form-row text-center'>
        <div class=col-12>
          <a href='adminIndex.php' type=button class='btn btn-secondary btn-lg'>
            Back
          </a>
        </div>
      </div>";
      ?>


    <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/popper.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/mdb.min.js"></script> -->
      </body>
    </html>
