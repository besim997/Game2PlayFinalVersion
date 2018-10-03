	<?php
  if(isset($_POST))
{
	session_start();
	include_once("dbconnect.php");

	$username=$_POST['usernameLogin'];
	$password=$_POST['passwordLogin'];

	$query=" SELECT * FROM user WHERE username='$username' AND password='$password' AND admin=0";
	$adminQuery=" SELECT * FROM user WHERE username='$username' AND password='$password' AND admin=1 ";

	$result=mysqli_query($conn,$query);
	$result2=mysqli_query($conn,$adminQuery);

	if(mysqli_num_rows($result)==1)
	{
		session_regenerate_id();
		$_SESSION['username'] = $username;
		include("homepage.php");

	}
	else if(mysqli_num_rows($result2)==1)
	{
		$_SESSION['admin'] = $username;
		include("adminIndex.php");

	}
	else{
    echo "<script>alert('Wrong username or password! ')</script>";
    echo "<script>location.href='index.php'</script>";


	}
}
	?>
