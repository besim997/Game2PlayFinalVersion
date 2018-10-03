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
  $query = "SELECT DISTINCT FID, personname, question, answer FROM faq";
  $result = mysqli_query($conn, $query);
  echo "";
  echo "<table class='table table-hover text-center'>";
  echo "<thead>
    <tr>
      <th scope=col>#</th>
      <th scope=col>Person</th>
      <th scope=col>Question</th>
      <th scope=col>Answer</th>
    </tr>
  </thead>";
  while ( $row = mysqli_fetch_row($result))
  {
  echo "<form action='editanswer.php' method=POST>
          <tbody class=''>
          <tr>
            <td width='5%'>".$row['0']."</td>
            <td width='25%'>".$row['1']."</td>
            <td width='25%'>".$row['2']."</td>
            <td width='35%'> <textarea class=form-control rows=3 cols=40 name=answer>".$row['3']."</textarea></td>
            <td>
              <button class='btn btn-info' type=submit>Update</button>
            </td>
          </tr>
          <input type=hidden name=FID value=".$row['0']." />
          </tbody>
        </form>";
  }
    echo "</table>";
    echo "";
 ?>
 <!-- <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
   <script type="text/javascript" src="js/popper.min.js"></script>
   <script type="text/javascript" src="js/bootstrap.min.js"></script>
   <script type="text/javascript" src="js/mdb.min.js"></script> -->
   </body>
 </html>
