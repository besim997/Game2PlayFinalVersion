<?php
include("dbconnect.php");
if(isset($_POST['username']) )
{
  $username=$_POST['username'];
  $query= "SELECT username FROM user WHERE username='$username'";
  if(!$result = mysqli_query($conn, $query))
  {
    exit(mysqli_error($conn));
  }
	// include Database connection file
  if($_POST['username'] != "")
  {
  	if(mysqli_num_rows($result) > 0)
  	{
  		// username is already exist
  		echo '<div class="alert alert-danger">
        <strong>'.$username.'</strong> is already in use
        </div>';
  	}
  }
  else{
    echo '<div>
      </div>';
  }



}



if(isset($_POST['email']))
{
  $email=$_POST['email'];
  $query1= "SELECT adress FROM user WHERE adress='$email'";
	if(!$result1 = mysqli_query($conn, $query1))
	{
		exit(mysqli_error($conn));
	}
  $contains = ".com";
  if($_POST['email'] != "" &&  preg_match("/\b($contains)\b/",$email ))
  {
    if(mysqli_num_rows($result1) > 0)
  	{
  		// username is already exist
  		echo '<div class="alert alert-danger">
        <strong>'.$email.'</strong> is already in use
        </div>';
  	}
  }

}
?>
