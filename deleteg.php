<?php
include("koneksi.php");
 
$id = $_GET['id'];
 
$guru = mysqli_query($koneksi,"DELETE FROM guru WHERE id='$id'");

//echo "User deleted successfully.</a>";
header("location:index.php?success=3");
?>
