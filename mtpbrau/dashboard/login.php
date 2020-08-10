<!-- <?php
  
  // ob_start();
  // session_start();
  // if (isset($_SESSION['akun_id'])) header("location: login.php");
  // include "aset/include/config.php";

  // <!-- KONEKSI LOGIN -->
  // if(isset($_POST['sign_in'])){
  //   $row_akun = $_POST['username'];
  //   $Password = $_POST['password'];
  //   $sql_login  = mysqli_query($koneksi, "SELECT *FROM login_admin WHERE username='$username' AND password ='$password' ");

  //   if (mysqli_num_rows($sql_login)>0) {
  //     $row_akun = mysqli_fetch_array($sql_login);
  //     $_SESSION['login_admin_username'] = $row_akun['username'];
  //     $_SESSION['login_admin_password'] = $row_akun['password'];
  //   }
  //   else{
  //     header("location: login.php?login gagal");
  //   }
  // }


  
  ?> -->

          

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div  class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>


      <form action="../dashboard/index.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
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
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
<!-- <?php 
  // mysqli_close($koneksi);
  // ob_end_flush();
 ?> -->