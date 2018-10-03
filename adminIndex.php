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
    <style type="text/css">
    address, dl, ol, p, pre, ul {
      margin-bottom: 0px;
    }
    </style>
</head>
  <body>


    <!--Navbar-->
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand align-self-center" href="adminIndex.php" style="position: relative;bottom: -8px;">
        <p class="h5-responsive align-self-center"> Admin Panel </p>
        <small id="passwordHelpInline" class="text-muted">
            Game2Play
        </small>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mx-auto p-auto">
          <li class="nav-item dropdown">
            <a style="padding-right:20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Products
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="insertproduct.php">Insert</a>
              <a class="dropdown-item" href="editproductcat.php">Edit</a>
              <a class="dropdown-item" href="deleteproductcat.php">Delete</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a style="padding-right:20px;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Category
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="insertcategory.php">Insert</a>
              <a class="dropdown-item" href="editcategoryform.php">Edit</a>
              <a class="dropdown-item" href="deletecat.php">Delete</a>
            </div>
          </li>
          <li class="nav-item">
            <a style="padding-right:20px;" class="nav-link" href="orderdetails.php">Orders</a>
          </li>
          <li class="nav-item">
            <a style="padding-right:20px;" class="nav-link" href="answer.php">FAQ's</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link" style="color:white;font-size:14px;" href="logout.php">
          <button type="button" class="btn btn-default btn-sm" style="width:auto;height:50px;float:right; font-size:13px; font-family:arial; font-weight:bold;">
             LOG OUT
          </button></a>
        </span>
      </div>
    </nav>
    <!--/.Navbar-->
<!--/.Navbar-->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/popper.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/mdb.min.js"></script>
      </body>
    </html>
