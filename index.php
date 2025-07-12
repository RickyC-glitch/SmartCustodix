<?php
session_start();
include 'dbconnect.php';
include 'includes/header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

</head>

<body>
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center m-0 " style="height: 80vh; ">
      <div class="login_oueter rounded">
        <div class="col-md-12 logo_outer ">
          <img class="my-2" src="images/LIS logo.png" class="w-40 h-20 " alt="..." />
          
        </div>
        <form action="login.php" method="post" id="login" autocomplete="off" class="bg-light border p-3">
          <div class="form-row text-center ">

            <div class="col-12 ">
              <h4 class="title my-3 text-success"><i class="fa-solid fa-key"></i> User Login</h4>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                </div>
                <input name="username" type="text" value="" class="input form-control" id="username" placeholder="Username" required="true" aria-label="Username" aria-describedby="basic-addon1" />
              </div>
            </div>
            <div class="col-12">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                </div>
                <input name="password" type="password" value="" class="input form-control" id="password" placeholder="Password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                <div class="input-group-append">
                  <span class="input-group-text" onclick="password_show_hide();">
                    <i class="fas fa-eye" id="show_eye"></i>
                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                  </span>
                </div>
              </div>
            </div>
            <div class="col-12 text-center">
              <button class="btn btn-success btn-lg btn-block btn-sm" type="submit" name="btnlogin" id="btnlogin">Login</button>

            </div>

            <div class="col-sm-12 pt-3 text-center">
              <a href="#">Forgot password?</a> or <a href="Facultyregistration.php">Sign up</a>
            </div>

          </div>
        </form>
        <hr class="my-2">
      </div>
    </div>
  </div>

  <?php
  include 'includes/Alertinfo.php';
  include 'includes/footer.php';
  
  ?>

  <script>
    function password_show_hide() {
      var x = document.getElementById("password");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
  </script>
</body>

</html>