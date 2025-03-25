<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login untuk masuk</p>

      <form action="ceklog.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Log In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
<?php
if(isset($_GET['error'])){
$w = ($_GET['error']);
if($w==1){
  echo "
  <script>
    var Toast = Swal.mixin({
     toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
    Toast.fire({
    icon: 'warning',
    title: 'Username atau Password salah'
  });
  </script>";
}else if($w==2){
  echo "
  <script>
    var Toast = Swal.mixin({
     toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
    Toast.fire({
    icon: 'warning',
    title: 'Masukan Username dan Password'
  });
  </script>";

}else if($w==3){
  echo "
  <script>
    var Toast = Swal.mixin({
     toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });
    Toast.fire({
    icon: 'warning',
    title: 'Harap login terlebih dahulu'
  });
  </script>";
}
}
?>
</html>