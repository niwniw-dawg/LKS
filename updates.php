<?php
include('koneksi.php');
	$id = $_GET['id'];
	$id_user = $_GET ['id_user'];
	$nama = $_GET ['nama'];
	$kelas = $_GET ['kelas'];
	$gender = $_GET ['gender'];
	$angkatan = $_GET ['angkatan'];

	$result = mysqli_query($koneksi, "UPDATE siswa SET id_user='$id_user' ,nama='$nama' ,kelas='$kelas' ,gender='$gender' ,angkatan='$angkatan' WHERE id='$id' ");

	header("location:index.php?success=2");
	?>