<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
  <title>FAQ's</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
  <body>
    <br><br><br><br>
    <div class="container-fluid p-3 mb-2 text-white" style="background-color: #F1F1F1; margin-top:12px;">
      <h4 class=" text-dark text-center ">Ask a question</h4>
    </div>
    <!-- Default form contact -->
<form class="text-center p-5" action="actfaq.php" method="post">

    <!-- Name -->
    <div class="col-lg-8" style="margin: 0 auto;">
      <input type="text" name="name" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" pattern="[A-Za-z ]{3,32}" title="Text only (3 to 32 characters)" required>
    </div>


    <!-- Message -->
    <div class="form-group col-lg-8" style="margin: 0 auto;">
        <textarea name="body" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Question" required></textarea>
    </div>

    <button class="btn btn-info btn-md" type="submit">Send</button>

</form>
    <div class="p-3 mb-2 text-white" style="background-color: #F1F1F1">
      <h4 class=" text-dark text-center ">Most frequently asked questions</h4>
    </div><br /><br />


      <div class="container-fluid accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
    <?php
      include("dbconnect.php");
      $query = "SELECT * FROM faq GROUP BY question
        ORDER BY COUNT(question) DESC
        LIMIT 0,6;";
      $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
      $i=0;
      while($row = mysqli_fetch_array($result))
      {
          echo "
          <!-- Accordion card -->
          <div class=card>

              <!-- Card header -->
              <div class=card-header role=tab id=headingOne>
                  <a data-toggle=collapse data-parent=#accordionEx href=#collapse".$i." aria-expanded=true aria-controls=collapse".$i.">
                      <h5 class=d-inline mb-0 >
                        ".$row[2]."<small class=font-weight-light style='color:gray; font-size:13px'>&nbsp; </small>
                        <p class='d-inline blockquote-footer font-weight-bold'>".$row[1]."</p><i class=fa fa-angle-down rotate-icon></i>
                      </h5>
                  </a>
              </div>

              <!-- Card body -->
              <div id=collapse".$i." class=collapse show role=tabpanel aria-labelledby=headingOne data-parent=#accordionEx>
                  <div class=card-body blockquote-footer>
                    <b>A:</b> ".$row[3]."
                  </div>
              </div>
          </div><br />
          ";
          $i++;

      }
        ?>
    </div>
  <?php
    include('footer1.php');
   ?>
  <!-- Section: Contact v.1 -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  </body>
</html>
