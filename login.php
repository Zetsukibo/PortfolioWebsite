<?php
require('include/db.php');
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM admin WHERE email='$email' && password='$password'";
  $run = mysqli_query($db, $query);
  $data = mysqli_fetch_array($run);
  if (count($data) > 0) {
    $_SESSION['isUserLoggedIn'] = true;
    $_SESSION['emailId'] = $_POST['email'];
    echo "<script>window.location.href = 'index.php';</script>";
  } else {
    echo "<script>alert('Incorrect email id or password !')</script>";
  }
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Art Abode | Log in</title>
  <link href="images/logo.png" rel="icon">
  <link href="images/logo.png" rel="apple-touch-icon">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./admin/dist/css/admin.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body style="background-color: #000000;" class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../Home/home.html"><b style="color: #1DB954;">Art </b><b style="color: #FFF;">Abode</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to manage your PORTFOLIO</p>

        <form method="post">
          <div class="input-group mb-3">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Remember Me
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>


        <!-- /.social-auth-links -->
        <p class="mb-1">
          <a href="./admin/forgot-password.html">I forgot my password</a>
        </p>
        <p class="mb-0">
          <a href="./admin/register.html" class="text-center">Register</a>
        </p>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src=".admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src=".admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Admin App -->
  <script src=".admin/dist/js/adminlte.min.js"></script>

</body>

</html>