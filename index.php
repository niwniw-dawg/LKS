<!DOCTYPE html>
<html lang="en">
  <?php 
  	session_start();
  include('koneksi.php');
  include('header.php');

  if (!isset($_SESSION['username'])){
		header('Location:login.php?error=3');
	}
  ?>
<class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php');?>

  <!-- Navbar -->
<?php include('navbar.php');?>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
     <?php include('sidebar.php') ?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <?php include('content_header.php') ?>
    <!-- /.content-header -->
    <!-- Main content -->
     <div>Selamat Datang <?php echo $_SESSION['level'];?></div>
     <br></br>
     <?php
if(isset($_GET['page'])){
   if($_GET['page']=='data-siswa'){
    include('datas.php');
  }
  else if($_GET['page']=='data-guru'){
    include('datag.php');
  }
}
?>

    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->
 <?php include('footer.php');?>

<?php
if(isset($_GET['success'])){
$x = ($_GET['success']);
if($x==1){
  echo "
  <script>
    var Toast = Swal.mixin({
     toast: true,
    position: 'center-top',
    showConfirmButton: false,
    timer: 3000
  });
    Toast.fire({
    icon: 'success',
    title: 'Berhasil ditambahkan'
  });
  </script>";
}else if($x==2){
  echo "
  <script>
    var Toast = Swal.mixin({
     toast: true,
    position: 'center-top',
    showConfirmButton: false,
    timer: 3000
  });
    Toast.fire({
    icon: 'success',
    title: 'Berhasil diubah'
  });
  </script>";

}else if($x==3){
  echo "
  <script>
    var Toast = Swal.mixin({
     toast: true,
    position: 'center-top',
    showConfirmButton: false,
    timer: 3000
  });
    Toast.fire({
    icon: 'success',
    title: 'Berhasil dihapus'
  });
  </script>";
}
}
?>
</body>
</html>
