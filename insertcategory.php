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
  <div class="container">
    <form method="POST" action="actinsertcat.php"><br>
      <p class="text-center h2-responsive">Add new category </p><br />
      <div class="row">
        <div class="col"></div>
          <div class="col-4">
            <label for="category">Category name:</label>
            <input type="text" class="form-control" name="catname" id="category" pattern="[a-zA-Z0-9./ ]+" title="Letters and numbers only" required />

            <br />


            <div class='form-row text-center'>
              <div class=col-12>
                <input type="submit" class="btn btn-info" value=" Add " />
                <a class='btn btn-danger'  href='adminindex.php'> Cancel </a>
              </div>
            </div>
          </form>


      </div>
      <div class="col"></div>
      </div>
    </div>


  </body>
</html>
