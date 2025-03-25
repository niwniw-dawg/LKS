<?php
include('koneksi.php');
	$id = $_GET['id'];
	$id_user = $_GET ['id_user'];
	$nama = $_GET ['nama'];
	$mapel = $_GET ['mapel'];
	$gender = $_GET ['gender'];

	$result = mysqli_query($koneksi, "UPDATE guru SET id_user='$id_user' ,nama='$nama' ,mapel='$mapel' ,gender='$gender' WHERE id='$id' ");

	header("location:index.php?success=2");
	?>