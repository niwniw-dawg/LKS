<?php
include("koneksi.php");
 
$id = $_GET['id'];
 
$siswa = mysqli_query($koneksi,"DELETE FROM siswa WHERE id='$id'");

//echo "User deleted successfully.</a>";
header("location:index.php?success=3");
?>
