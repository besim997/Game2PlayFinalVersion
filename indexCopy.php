<html>
<head>
<title>eCommerce</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
include("functions.php");
?>

<script type="text/javascript">

$(function() {

  $('#login-form-link').click(function(e) {
  $("#login-form").delay(100).fadeIn(100);
  $("#register-form").fadeOut(100);
  $('#register-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});
$('#register-form-link').click(function(e) {
  $("#register-form").delay(100).fadeIn(100);
  $("#login-form").fadeOut(100);
  $('#login-form-link').removeClass('active');
  $(this).addClass('active');
  e.preventDefault();
});

});

</script>
    <link rel="stylesheet" href="css/login.css" />

    <script src="login.js" type="text/javascript"></script>

</head>
<body>


<div class="modal fade" id="overlay">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" style="text-align: center;">Please login first</h2>
      <div class="modal-body">

            	<div class="row">
        			<div class="col-md-12 col-md-offset-0">
        				<div class="panel panel-login" style="margin-top:10px">
        					<div class="panel-heading">
        						<div class="row">
        							<div class="col-xs-6">
        								<a href="#" class="active" id="login-form-link">Login</a>
        							</div>
        							<div class="col-xs-6">
        								<a href="#"  id="register-form-link">Register</a>
        							</div>
        						</div>
        						<hr>
        					</div>
        					<div class="panel-body">
        						<div class="row">
        							<div class="col-lg-12">
        								<form id="login-form" action="actlogin.php" method="post" role="form" style="display: block;">

                          <div class="form-group">
        										<input type="text" name="usernameLogin" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
        									</div>
        									<div class="form-group">
        										<input type="password" name="passwordLogin" id="password" tabindex="2" class="form-control" placeholder="Password">
        									</div>
        									<div class="form-group text-center">
                            <input type="checkbox" tabindex="3" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
        										<label for="remember"> Remember Me</label>
        									</div>
        									<div class="form-group">
        										<div class="row">
        											<div class="col-sm-6 col-sm-offset-3">
        												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
        											</div>
        										</div>
        									</div>
        									<div class="form-group">
        										<div class="row">
        											<div class="col-lg-12">
        												<div class="text-center">
        													<a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
        												</div>
        											</div>
        										</div>
        									</div>
        								</form>
                        <form id="register-form" action="signup.php" method="post" role="form" style="display: none;">
                          <div class="form-group row">
                            <div class="col-xs-6">
                              <label for="ex1">First name:</label>
                              <input class="form-control" id="ex1" type="text" name="firstname" id="firstname" tabindex="1" class="form-control" placeholder="First name" value="" required>
                            </div>
                            <div class="col-xs-6">
                              <label for="ex2">Last name:</label>
                              <input class="form-control" id="ex2" type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Last name" value="" required>
                            </div>
                          </div>
                        <div class="form-group">
                          <label for="ex3">Username:</label>
                          <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}" title="Minimum 8-characters(letters and numbers" required>
                        </div>
                        <div class="form-group">
                          <label for="ex3">Email adress:</label>
                          <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="ex3">Create password:</label>
                          <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Enter password"  minlength="8" required>
                        </div>
                        <div class="form-group">
                          <label for="ex3">Confirm your password:</label>
                          <input type="password" name="confirm-password" id="confirm_password" tabindex="2" class="form-control" placeholder="Enter password again" data-match="#password" data-match-error="Whoops, these don't match" required>
                          <span id="message"></span>

                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                              <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now" >
                            </div>
                          </div>
                        </div>
                        </form>
        							</div>
        						</div>
        					</div>
        				</div>
        			</div>
            </div>
      </div>
    </div>
  </div>
</div>
</div>
<script type="text/javascript">
/*$(document).ready(function() {
    var dialogShown = localStorage.getItem('dialogShown')

    if (!dialogShown) {
        $(window).load(function(){
            $( "#overlay" ).modal();
            localStorage.setItem('dialogShown', 1)
        });
    }
    else {
        $("#overlay").hide();
    }


});*/
$('#overlay').modal({backdrop: 'static', keyboard: false});
</script>
</body>
</html>
