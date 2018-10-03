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
    <script type="text/javascript">
      function validateForm(){
        var x = document.forms["signupForm"]["password"].value;
        var y = document.forms["signupForm"]["repassword"].value;
        if(x != y){
          var text = "<div class='alert alert-danger'>Passwords do not match. Try again</div>";
          document.getElementById("message").innerHTML = text;
          return false;
        }
      }

      function myFunction() {
        var txt = document.getElementById("txtAgree");
        var x = document.forms["signupForm"]["checkbox"].checked;
        if(!x) {
              txt.style.color = "red;"
              return false;
          }
      }
    </script>

</head>
<body>



<!--Modal: Login / Register Form-->
<div class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" id="overlay">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Modal cascading tabs-->
            <div class="modal-c-tabs">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fa fa-user-plus mr-1"></i> Register</a>
                    </li>
                </ul>

                <!-- Tab panels -->
                <div class="tab-content">
                    <!--Panel 7--><h3 class="text-center">Welcome</h3>
                    <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
                      <form method="POST" action="actlogin.php" id="myForm">

                        <!--Body-->
                        <div class="modal-body mb-1">
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-address-card prefix"></i>
                                <input type="text" name="usernameLogin" id="username1" class="form-control form-control-sm">
                                <label for="username1">&nbsp;Username</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" name="passwordLogin" id="password1" class="form-control form-control-sm">
                                <label for="password1">Password</label>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer">
                          <div class="text-center mt-2">
                              <button type="submit" name="submit" class="btn btn-info">Log in <i class="fa fa-sign-in ml-1"></i></button>
                          </div>
                        </div>
                        </form>
                    </div>
                    <!--/.Panel 7-->

                    <!--Panel 8-->
                    <div class="tab-pane fade" id="panel8" role="tabpanel">
                      <form method="post" action="signup.php" name="signupForm" onSubmit="return !!(validateForm() & myFunction());">
                        <!--Body-->
                        <div class="modal-body">
                          <div class="form-row" style="height:76px;">
                            <div class="md-form form-sm mb-5 col">
                                <i class="fa fa-user-circle prefix"></i>
                                <input type="text" id="modalLRInput10" class="form-control form-control-sm validate" name="firstname" id="firstname" tabindex="1" pattern="[A-Za-z]{3,32}" title="Text only(3 to 32 letters)" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput10">&nbsp;First name</label>
                            </div>

                            <div class="md-form form-sm mb-5 col">
                                <input type="text" id="modalLRInput10" class="form-control form-control-sm validate" name="lastname" id="lastname" tabindex="1" pattern="[A-Za-z]{3,32}" title="Text only(3 to 32 letters)" title="Text only" required>
                                <label data-error="wrong" data-success="right" for="modalLRInput10">&nbsp;&nbsp;Last name</label>
                            </div>
                          </div>

                          <div class="md-form form-sm mb-5">
                              <i class="fa fa-address-card prefix"></i>
                              <input type="text" id="username" class="form-control form-control-sm" name="username" id="username" tabindex="1" pattern="(?=.*\d)(?=.*[A-Za-z]).{8,}" title="Minimum 8-characters(letters and numbers only)" required>
                              <label data-error="wrong" data-success="right" for="username">&nbsp;Username</label>
                              <div id="status"></div>
                          </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-envelope prefix"></i>
                                <input type="email" id="email" class="form-control form-control-sm" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="Enter valid Email address!" required>
                                <label data-error="wrong" data-success="right" for="email">Email</label>
                                <div id="status1"></div>
                            </div>

                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="password" class="form-control form-control-sm validate" name="password" minlength="8" pattern=".{8,}" title="Eight or more characters" required>
                                <label data-error="wrong" data-success="right" for="password">Password</label>
                            </div>

                            <div class="md-form form-sm mb-4">
                                <i class="fa fa-lock prefix"></i>
                                <input type="password" id="repassword" class="form-control form-control-sm" name="repassword" required>
                                <label for="repassword">Repeat password</label>
                                <div id="message"></div>
                            </div>

                            <div class="form-row" style="height:95px;">
                              <div class="md-form form-sm mb-5 col-8">
                                  <i class="fa fa-map-marker prefix"></i>
                                  <input type="text" class="form-control form-control-sm validate" name="address" id="address" tabindex="1" pattern="[a-zA-Z0-9./ ]+" title="Letters, numbers and characters only" required>
                                  <label data-error="wrong" data-success="right">&nbsp;Address</label>
                              </div>

                              <div class="md-form form-sm mb-5 col-4">
                                  <input type="text"class="form-control form-control-sm validate" name="zip" id="zip" tabindex="1" pattern="[0-9]{4}" title="4-digits number" title="Text only" required>
                                  <label data-error="wrong" data-success="right">&nbsp;&nbsp;ZIP</label>
                              </div>
                            </div>
                            <div class="md-form form-sm mb-5">
                                <i class="fa fa-phone prefix"></i>
                                <input type="tel" id="phone" class="form-control form-control-sm validate" name="phone" pattern="[\+][0-9]{1,3} [0-9]{2,3} [0-9]{4,6}" title="Enter valid phone number(E.g:+389 70 727439)" required>
                                <label data-error="wrong" data-success="right" for="password">Phone number</label>
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="checkbox" name="checkbox" required>
                                <label class="custom-control-label" id="txtAgree" for="checkbox">I agree to the Terms and Conditions of <a href="#">Game2Play</a> Website </label>
                            </div>

                            <div class="text-center form-sm mt-2">
                                <button type="submit" name="submit" id="submit" class="btn btn-info">Sign up <i class="fa fa-sign-in ml-1"></i></button>
                            </div>

                        </div>
                      </form>
                    </div>
                    <!--/.Panel 8-->
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Login / Register Form-->

<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
  $('#overlay').modal({backdrop: 'static', keyboard: false});

//   $('form').on('submit',function(){
//    if($('#password').val()!=$('#repassword').val()){
//        alert("Password's doesn't match");
//        $('#repassword').val('');
//        return false;
//    }
//    return true;
// });



$(document).ready(function(){


// check change event of the text field
$("#username").keyup(function(){
// get text username text field value
var username = $("#username").val();
var email = $("#email").val();

// check username name only if length is greater than or equal to 3
if(username.length >= 8)
{
    $.post("username_check.php", {username: username}, function(data, status){
    $("#status").html(data);
    // $('#rbutton').on('click',function() {
    //     $(this).prop("disabled",true);
    //   });
});
$.post("username_check.php", {email: email}, function(data, status1){
  $("#status1").html(data);
  // $('#rbutton').on('click',function() {
  //     $(this).prop("disabled",true);
  //   });
});
}
return false;
});

$("#email").keyup(function(){
// get text username text field value
var email = $("#email").val();
// check username name only if length is greater than or equal to 3

    // check username

    $.post("username_check.php", {email: email}, function(data, status1){
      $("#status1").html(data);
    //   $('#rbutton').on('click',function() {
    //   $(this).prop("disabled",true);
    // });
});
});




});
</script>


<style type="text/css">
#overlay {
 position: absolute;
 top: -50px;
 bottom: 0;
 left: 0;
 z-index: 10040;
 overflow: auto;
 overflow-y: auto;
}
</style>
</body>
</html>
